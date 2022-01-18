<?php
defined('BASEPATH') or exit('No direct script access allowed');
 

class Success extends Controller {
	public function process() {
		$AuthUser               = $this->getVariable("AuthUser");
        $Route                  = $this->getVariable("Route");
        $Settings               = $this->getVariable("Settings");    
        $isValid                = $this->getVariable("isValid"); 
 

        if(Input::cleaner($_POST['_ACTION']) == 'payment') {
            $this->check();
        }
        $Config['title']        = 'Success Checkout';
        $Config['description']  = 'Payment Checkout'; 
        $Config['url']          = APP.'/successCheckout'; 
		$this->setVariable("Config", $Config);  
		$this->view('success', 'app');
	}

	public function check()
    {
		$AuthUser               = $this->getVariable("AuthUser");
        // $last_user = $this->db->from('users')->where('email', Input::cleaner($AuthUser['email']), '=')->first();
        $dataArrayPayment        = array(
            "user_id"                   => $AuthUser['id'],
            "date_payment"              => date("Y-m-d H:i:s"),
            "method"                    => Input::cleaner($_POST['method_payment'])
        );
		echo var_dump($dataArrayPayment);
        $this->db->insert('payment_infos')->set($dataArrayPayment);
        header("location: " . APP);
        return $this;
    }
}