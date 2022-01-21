<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App {
	 
    protected $router;
    protected $controller;
    protected $plugins;
    protected static $routes = [];  

	public function __construct() {
        $this->controller   = new Controller;   
	}

	public function route() {
        // Initialize the router
        $router = new Router();
        $router->setBasePath(BASEPATH);

        $GLOBALS["_ROUTER_"] = $router; 
        Input::trigger("router.map", "_ROUTER_");
        $router = $GLOBALS["_ROUTER_"];
        // Load global routes
        include PATH."/config/router.config.php";
        
        // Map the routes
        $router->addRoutes(App::getRoutes());

        // Match the route
        $route = $router->match();
        $route = json_decode(json_encode($route)); 
        if ($route) {
            if (is_array($route->target)) {
                require_once PATH.'/controller/'.$route->target[0].'/'.$route->target[1].'.php';
                $controller = $route->target[1];
            } elseif($route->target) {
                $controller = $route->target;
            }
        } else {
            header("HTTP/1.0 404 Not Found"); 
            $controller = "Noting";
        } 

        $this->controller = new $controller;
        $this->controller->setVariable("Route", $route);
    }

    public static function getRoutes() {
        return self::$routes;
    } 

    public static function addRoute() {
        $route = func_get_args();
        if ($route) {
            self::$routes[] = $route;
        }
    }

    public function auth() {   
        $AuthUser = null;
        if(\Delight\Cookie\Cookie::exists('Auth')) {
            $db         = new Database();
            $AuthUser   = $db->from("users")->where('token',\Delight\Cookie\Cookie::get('Auth'),'=','AND')->first();

            if(!$AuthUser['token']) {
                setcookie('Auth', '', time() - (86400 * 530), "/");
                session_destroy();
            }
        }
        return $AuthUser;
    } 
      
    public function process() {  
        $this->route(); 
        ob_start();   
        $AuthUser       = $this->auth();  
        $db             = new Database();
        $Settings       = $db->from("settings")->all();
        $Ads            = $db->from("ads")->where('status',1)->orderby('id','ASC')->all(); 
        
        $Route          = $this->controller->getVariable("Route");
        if (is_array($Route->target)) {
            define("ACTIVE_LANG", get($Settings,'data.dashboard_language','general')); 
        } elseif($Route->target) {
            define("ACTIVE_LANG", get($Settings,'data.language','general')); 
        }
        
         
        $Permissions = array(
            'Login',
            'Register',
            'Logout',
            'Home',
        );

        $Middleware = array(
            'Main',
            'Comments',
            'Search',
            'Discovery',
            'Trends',
            'Movie',
            'Movies',
            'Serie',
            'Episode',
            'Series',
            'Actor',
            'Actors',
            'Channel',
            'Channels',
            'Collection',
            'Collections',
            'Discussion',
            'Discussions',
            'Category',
            'Categories',
            'Profile',
            'Notifications',
            'Settings',
            'Page',
            'SitemapMain',
            'SitemapPosts',
            'SitemapEpisodes',
            'SitemapActors',
            'SitemapDiscussions',
            'SitemapCollections',
            'SitemapCategories',
            'SitemapUsers',
            'Sitemap',
            
        );

        $AuthSettings   = json_decode($AuthUser['data'], true);
        $this->controller->setVariable("AuthUser", $AuthUser) 
                         ->setVariable("AuthSettings", $AuthSettings)
                         ->setVariable("Settings", $Settings)
                         ->setVariable("Ads", $Ads)    
                         ->setVariable("Token", Csrf::token())
                         ->setVariable("isValid", Csrf::all())
                         ->setVariable("Notify", Controller::notify()); 
        

        if(!in_array($Route->target, $Permissions) AND !$AuthUser['id'] AND get($Settings,'data.members','general') == '1') {
            header('location:'.APP);
        }else if(in_array($Route->target, $Middleware) AND $AuthUser['id'] AND $AuthUser['account_type'] !="admin"){
            $payment_infos = $db->from("payment_infos")->where("user_id", $AuthUser["id"])->orderby('date_payment','DESC')->first();
            $date_subscription = $payment_infos['date_payment']; //date_subscription
            $datetime = date("Y-m-d H:i:s"); //date now
            // //convert to datetime object to make difference
            $date1 = new DateTime($datetime); 
            $date2 = new DateTime($date_subscription); 
            $interval = $date1->diff($date2);
            $difference = intval($interval->format('%a'));
            if(in_array($Route->target, $Permissions) AND $AuthUser['id'] AND get($Settings,'data.members','general') == '1'){
                header("location:".APP);
                die();
            }
            else if($difference > 31 OR $payment_infos == NULL){
                echo var_dump($_SERVER['REQUEST_URI']);
                header("location:".APP."/payment");
                die();
            }
        }
        
        $this->controller->process();
    }
    
    public function notify($data = array()) {
        if(count($data)>1) { 
            $_SESSION['notify']['display']      = 'hidden';
            $_SESSION['notify']['text']         = $data['text'];
            $_SESSION['notify']['type']         = $data['type'];
        }
    }
    
    public function __destruct() { 
        if($_SESSION['notify']['display'] == 'visible' AND $_SESSION['notify']['text']) {
            session_destroy();
            unset($_SESSION['notify']);
        }elseif($_SESSION['notify']['display'] == 'hidden' AND $_SESSION['notify']['text']) {
            $_SESSION['notify']['display'] = true;
        }  
    }
}