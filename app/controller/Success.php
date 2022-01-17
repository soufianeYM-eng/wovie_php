<?php
defined('BASEPATH') or exit('No direct script access allowed');
 

class Success extends Controller {
	public function process() {
		$this->view('success', 'app');
	}
}