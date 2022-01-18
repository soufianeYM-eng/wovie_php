<?php
defined('BASEPATH') or exit('No direct script access allowed');
 

class Failed extends Controller {
	public function process() {
		$AuthUser               = $this->getVariable("AuthUser");
        $Route                  = $this->getVariable("Route");
        $Settings               = $this->getVariable("Settings");    
        $isValid                = $this->getVariable("isValid"); 
 

        if(Input::cleaner($_POST['_ACTION']) == 'payment') {
            $this->check();
        }
        $Config['title']        = 'Failed Checkout';
        $Config['description']  = 'Failed Checkout'; 
        $Config['url']          = APP.'/failedCheckout'; 
        $this->setVariable("Config", $Config);  
		$this->view('failed', 'app');
	}
}