<?php
defined('BASEPATH') or exit('No direct script access allowed');
 

class Payment extends Controller {
	public function process()
    {
        $AuthUser               = $this->getVariable("AuthUser");
        $Config['title']        = 'Payment subscription';
        $Config['description']  = 'Payment Checkout'; 
        $Config['url']          = APP.'/payment'; 
        $this->setVariable("Config", $Config);  
        $this->view('payment', 'app');
    }

}