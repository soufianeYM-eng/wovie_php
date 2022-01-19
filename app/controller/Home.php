<?php
defined('BASEPATH') or exit('No direct script access allowed'); 

class Home extends Controller
{
    public function process()
    { 
        $AuthUser               = $this->getVariable("AuthUser"); 
        if (Input::cleaner($_POST['_ACTION']) == 'get-started') {
            $this->check(); 
        } elseif ($AuthUser['id']) {
            header("location: " . APP);
        } 
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
