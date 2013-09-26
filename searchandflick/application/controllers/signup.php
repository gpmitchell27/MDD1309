<?php if ( ! defined('BASEPATH')) exit;
class Signup extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->helper(array('form'));
		$this->load->view('searchandflick/signup_header.inc');
		$this->load->view('searchandflick/signup.inc');
		$this->load->view('searchandflick/footer.inc');
	}
}

