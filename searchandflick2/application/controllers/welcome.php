<?php 

class Welcome extends CI_Controller {
	
	public function index() { // public view load
	$data['header'] = 'searchandflick/login_header.inc';
	$data['main_content'] = 'searchandflick/intro.php';
	$this->load->view('includes/template.php', $data);

	}
}