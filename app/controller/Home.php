<?php
defined('BASEPATH') or exit('No direct script access allowed'); 

class Home extends Controller
{
    public function process()
    { 
        // $AuthUser               = $this->getVariable("AuthUser");
        // $Route                  = $this->getVariable("Route");
        // $Settings               = $this->getVariable("Settings");    
        // $isValid                = $this->getVariable("isValid"); 
        // if (Input::cleaner($_POST['_ACTION']) == 'login' AND $isValid) {
        //     $this->check(); 
        // } elseif ($AuthUser['id']) {
        //     header("location: " . APP);
        // }

        // $Config['title']        = __('Login').' - '.get($Settings, "data.title", "general");
        // $Config['description']  = get($Settings, "data.description", "general"); 
        // $Config['url']          = APP.'/login'; 
        // $this->setVariable("Config", $Config);  
        $this->view('home', 'app');
    }
}
