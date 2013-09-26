<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class AddUser extends CI_Controller {
	function __construct(){
   		parent::__construct();
   	}
   	public function index(){
		$this->load->helper(array('form'));
   		$this->load->view('searchandflick/login_header.inc');
		$this->load->view('searchandflick/add.inc');
		$this->load->view('searchandflick/footer.inc');
	}
	public function registration() {
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('username', 'User Name', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
			if($this->form_validation->run() == FALSE) {
				$this->index();
			}
			else {
				$this->add->add_user();
				$this->thankyou();
			}
 	}
}
?>