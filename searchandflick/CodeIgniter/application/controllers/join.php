<?php

class join extends CI_Controller {

	public function __construct() {
		
		parent::__construct();
	
	}

	public function index() {
		
		$data['title'] = "Bemused Blogger User List";
		$this->load->view('header', $data);
		$this->load->view('footer');
	
	}
	
	public function name($str) {
		
		echo $str;
	}
	
}

?>