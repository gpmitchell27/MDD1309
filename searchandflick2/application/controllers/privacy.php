<?php 

class Privacy extends CI_Controller {
	
	function index() { // load privacy page
		$data['header'] = 'searchandflick/signup_header.inc';
		$data['main_content'] = 'searchandflick/privacy.inc';
		$this->load->view('includes/template.php', $data);
	}
}