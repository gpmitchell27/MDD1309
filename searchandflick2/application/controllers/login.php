<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() { // public view load
	$data['header'] = 'searchandflick/login_header.inc';
	$data['main_content'] = 'searchandflick/login.inc';
	$this->load->view('includes/template.php', $data);

	}

	function validate_credentials()  // validate credentials against form input
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', '', 'trim|required|min_length[4]|alpha_numeric');
		$this->form_validation->set_rules('password', '', 'trim|required|min_length[4]|max_length[32]');
			if($this->form_validation->run() == FALSE) { // all form validation done and input protection
				$this->index(); // if this returns false show public index view again
			} else {
		$this->load->model('user_model');
		$query = $this->user_model->validate(); // load model and call validate method
 		
			if($query) { // validation
			$data = array(
				'userid'  => $this->session->userdata('id'), // if validation comes back clean build session array
				'username' => $this->input->post('username'),
				'is_logged_in' => true
				);
				$this->session->set_userdata($data); // then redirect user to welcome page
				redirect('user/welcome');

			} else {
				$this->index(); // if something goes wrong bring the user back to home page.
			}
		}
	}

	function create_member() { // create member function
		$this->load->library('form_validation'); // load form helper
		$this->form_validation->set_rules('username', 'Username', 'trim|required'); // form validation against unwanted input
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');

		if($this->form_validation->run() == FALSE) { // if form validation fails load homepage
			$this->index();
		} else { 
			$this->load->model('user_model');  // if successful add the user to the database and show success page 
			if($query = $this->user_model->create_member()) {
			$data['header'] = 'searchandflick/login_header.inc';
			$data['main_content'] = 'searchandflick/public_signup_success.php';
			$this->load->view('includes/template.php', $data);
			}
		}

	}
}
	
?>