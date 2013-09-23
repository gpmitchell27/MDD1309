<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {
	function __construct(){
   		parent::__construct();
   	}

	public function index() {
		if($this->session->userdata('logged_in')) {
		 $session_data = $this->session->userdata('logged_in');
		 $data['user_name'] = $session_data['user_name'];
		 $this->load->view('searchandflick/login_header.inc');
		 $this->load->view('searchandflick/home_view.inc', $data);
		 $this->load->view('searchandflick/footer.inc');
		} else {
		 //If no session, redirect to login page
		 redirect('login', 'location');
		}
 	}

	public function logout() {
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('login', 'refresh');
 	}

}
?>