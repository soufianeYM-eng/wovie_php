<?php
defined('BASEPATH') or exit('No direct script access allowed');
 

class Payment extends Controller {
	public function process() {
		$this->view('payment', 'app');
	}
}