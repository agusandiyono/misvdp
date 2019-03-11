<?php

/**
 * Extend Controller Class
 */
class MY_Controller extends CI_Controller {
  	function __construct() {
    	parent::__construct();

    	if (!$this->ion_auth->logged_in()){
			if($this->uri->segment(1) && $this->uri->segment(1) != 'auth'){
				redirect('auth/login?redirect='.urlencode(uri_string()));
			}
			else{
				redirect('auth/login');
			}
		}
  	}
}