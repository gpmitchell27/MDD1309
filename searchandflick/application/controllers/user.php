<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller {

	public function __construct() {
  		parent::__construct();
  		$this->load->model('user_model');
 	}
	public function index() {
		if($this->session->userdata('logged_in')) {
		 $session_data = $this->session->userdata('logged_in');
		 $data['username'] = $session_data['username'];
		 $this->welcome();
  		} else {
		$data['title']= 'Home';
		$this->load->helper(array('form'));
		$this->load->view('searchandflick/login_header.inc');
     	$this->load->view('searchandflick/login.inc');
	 	$this->load->view('searchandflick/footer.inc');
  		}
 	}

 	public function tryagain() {

		$data['title']= 'TryAgain';
		$this->load->helper(array('form'));
		$this->load->view('searchandflick/login_header.inc');
     	$this->load->view('searchandflick/tryagain.inc');
	 	$this->load->view('searchandflick/footer.inc');
  	}

	public function welcome() {
		$data['title']= 'Welcome';
		$this->load->view('searchandflick/welcome_header.inc',$data);
		$this->load->view('searchandflick/welcome_view.php', $data);
		$this->load->view('searchandflick/footer.inc',$data);
	}

	public function login() {
		if(!isset($_POST['email']) && (!isset($_POST['pass']))) {
		$this->index();
	} else {

		$email=$this->input->post('email');
		$password=md5($this->input->post('pass'));
		$result=$this->user_model->login($email,$password);
			if($result) {
				$this->welcome();
			} else {
				$this->tryagain();
			}
		}
	}

	public function thank() {
		$data['title']= 'Thank';
		$this->load->view('searchandflick/member_header.inc',$data);
		$this->load->view('searchandflick/thank_view.php', $data);
		$this->load->view('searchandflick/footer.inc',$data);
	}

	public function memberthank() {
		$data['title']= 'Member Thank';
		$this->load->view('searchandflick/member_header.inc',$data);
		$this->load->view('searchandflick/memberadded.inc', $data);
		$this->load->view('searchandflick/footer.inc',$data);
	}

	public function add() {
		$this->load->library('form_validation');
		

		$this->form_validation->set_rules('user_name', 'User Name', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');
		$data['title']= 'Add Member';
		$this->load->view('searchandflick/member_header.inc');
		$this->load->view('searchandflick/add.inc');
		$this->load->view('searchandflick/footer.inc');
		// field name, error message, validation rules
		if($this->form_validation->run() == FALSE) {
			$this->signup();
			} else {
			$this->user_model->add_user();
			$this->thank();
		}
		
	}

	public function memberadd() {
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('user_name', 'User Name', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');

		if($this->form_validation->run() == FALSE) {
			$this->membersignup();
			} else {
			$this->user_model->add_user();
			$this->memberthank();
		}
		
	}

	public function deleteuser() {
		$this->load->view('searchandflick/member_header.inc');
		$this->load->view('searchandflick/memberdeleted.inc');
		$this->load->view('searchandflick/footer.inc');
		
	}

	public function membersignup() {
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('user_name', 'User Name', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');
		$data['title']= 'Signup';
		$this->load->view('searchandflick/member_header.inc',$data);
		$this->load->view('searchandflick/add.inc', $data);
		$this->load->view('searchandflick/footer.inc',$data);
	}

	public function signup() {
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('user_name', 'User Name', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');
		$data['title']= 'Signup';
		$this->load->view('searchandflick/signup_header.inc',$data);
		$this->load->view('searchandflick/signup.php', $data);
		$this->load->view('searchandflick/footer.inc',$data);
	}

	public function registration() {
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('user_name', 'User Name', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');

		if($this->form_validation->run() == FALSE) {
			$this->signup();
			} else {
			$this->user_model->add_user();
			$this->thank();
		}
	}

	function logout() {
		$this->session->unset_userdata('logged_in');
		session_start();

		$_SESSION = array();


	if (isset($_COOKIE[session_name()])) {
	setcookie(session_name(), '', time()-42000, '/');
	}

		session_destroy();
		redirect('user/login', 'location');
 	}

	public function gallery() {
		$photos = array();
		$data = array();
		if(isset($_POST['search'])) {
			$this->load->model('FlickrPhoto_model');
			$photos['photos'] = $this->FlickrPhoto_model->getPhotos();
			$data['photos'] = $photos;
			$this->load->view('searchandflick/member_header.inc');
			$this->load->view('searchandflick/body.inc', $data);
			$this->load->view('searchandflick/footer.inc');
			} else {
			$this->load->view('searchandflick/member_header.inc');
			$this->load->view('searchandflick/body.inc', $data);
			$this->load->view('searchandflick/footer.inc');
			}
	}

	public function showDetails() {
		$this->user_model->getall();
		$data['mydata'] = $this->user_model->getall();
		$data['mydata'] = $data;
		$this->load->view('searchandflick/member_header.inc');
		$this->load->view('searchandflick/details.inc', $data);
		$this->load->view('searchandflick/footer.inc');
	}

	public function updateuser() {
		if($this->input->post('submit')){
		$data['data'] = $this->user_model->getinfo();
		$result = $data['data'];
 		$this->user_model->cleanit($result);
	        $this->user_model->update();	    
	    }    	 
    	if($result = $this->user_model->update()) {
        $this->showdetails();
    	} else {
        redirect('user/showDetails', 'location');
    	}
	}
}
?>