<?php if ( ! defined('BASEPATH')) exit;
class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->view('searchandflick/header.inc');
		$this->load->view('searchandflick/login.inc');
		$this->load->view('searchandflick/footer.inc');
	}
}
 
