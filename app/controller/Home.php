<?php
defined('BASEPATH') or exit('No direct script access allowed'); 

class Home extends Controller
{
    public function process()
    { 
        $AuthUser               = $this->getVariable("AuthUser"); 
        $Route                  = $this->getVariable("Route");
        $Settings               = $this->getVariable("Settings");    
        $isValid                = $this->getVariable("isValid"); 
        if (Input::cleaner($_POST['_ACTION']) == 'get-started') {
            $this->check(); 
        } 

        $Config['title']        = __('Home').' - '.get($Settings, "data.title", "general");
        $Config['description']  = get($Settings, "data.description", "general"); 
        $Config['url']          = APP.'/'; 
        $this->setVariable("Config", $Config);  
        $this->view('home', 'app');
    }

    public function check(){
        $Email      = Input::cleaner($_POST['email']);
        $EmailCheck      = $this->db->from('users')->where('email',$Email,'=','AND')->first();
        if ($Email == $EmailCheck['email']) {
            header('location: '.APP.'/login');
        }else{
            header('location: '.APP.'/register');
        }
    }
}
