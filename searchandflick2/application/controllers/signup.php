<?php

class Signup extends CI_Controller {

	function index() { // load sign up page
		$data['header'] = 'searchandflick/signup_header.inc';
		$data['main_content'] = 'searchandflick/public_signup.inc';
		$this->load->view('includes/template.php', $data);
	}
}