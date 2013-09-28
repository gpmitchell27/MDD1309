<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller {

	public function __construct() { // call to the parent Controller class so all methods are available
  		parent::__construct();
		$this->is_logged_in();
		$this->load->model('user_model'); // load my user model so it doesn't have to be loaded more then once for all functions
 	}

 	public function is_logged_in() { // check to see if there is session authenticated or else error page
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != TRUE) {
			echo 'You don\'t have permission to view this page. <a href="../login">Login</a>';
			die();
		}
	}

	public function welcome() { // load members home page
		$data['header'] = 'searchandflick/welcome_header.inc';
		$data['main_content'] = 'searchandflick/welcome_view';
		$this->load->view('includes/template', $data);
	}

	public function thank() { // load success message for adding a new user from members area
		$data['header'] = 'searchandflick/member_header.inc';
		$data['main_content'] = 'searchandflick/member_thank.php';
		$this->load->view('includes/template', $data);
	}

	public function memberthank() { // load success message for members
		$data['title']= 'Member Thank';
		$data['header'] = 'searchandflick/member_header.inc';
		$data['main_content'] = 'searchandflick/memberadded.inc';
		$this->load->view('includes/template', $data);
	}

	public function memberadd() { // add member function 
		$this->load->library('form_validation'); // load form helper and validate
		$this->form_validation->set_rules('user_name', 'User Name', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');
		if($this->form_validation->run() == FALSE) { // form helper is false load member signup page again
			$this->load->model('user_model'); 
				if($query = $this->user_model->create_member()) {
					$this->memberthank(); // success and success message loaded
				}
		} else {
			$this->member_signup();
		}
		
	}

	function member_signup() { // load member signup view
		
		$data['header'] = 'searchandflick/member_header.inc';
		$data['main_content'] = 'searchandflick/add.inc';
		$this->load->view('includes/template', $data);
	}

	public function gallery() { // flickr API
		
		$photos = array();
		$data = array();
		if(isset($_POST['search'])) {
			$this->load->model('FlickrPhoto_model');
			$photos['photos'] = $this->FlickrPhoto_model->getPhotos();
			$data['photos'] = $photos;
			$data['main_content'] = 'searchandflick/body.inc';
			} else {
			$this->load->view('searchandflick/body.inc');
			$this->load->view('searchandflick/footer.inc');
			}
	}

	public function showDetails() { // query the database and return all rows from user table
		$this->user_model->getAll();
		$data['i'] = $this->user_model->getAll(); // get the userid from database
		$data['header'] = 'searchandflick/member_header.inc';
		$data['main_content'] = 'searchandflick/details.inc'; // load showdetails view
		$this->load->view('includes/template', $data);
	}

	public function updateuser() { // update users
		if($this->input->post('submit')){ // check to see if submit has been clicked
		$data['data'] = $this->user_model->getinfo(); // get array from database of details for profiles and load them into result
		$result = $data['data'];
 		$this->user_model->cleanit($result); // clean array out if anything exists
	    $this->user_model->update();	  // call update method   
	    }    	 
    	if($result = $this->user_model->update()) { // if result then add user to database from detail view
        $this->showdetails();
    	} else {
        redirect('user/showDetails', 'location');
    	}
	}

	public function deletuser() { // delete function 
		$u = $this->input->get('u'); // grab the id from the id field in showdetails 
		if(!$this->user_model->del_user($u)) { // pass it to the del_usr method
			$dat['header'] = 'searchandflick/member_header.inc';
			$dat['main_content'] = 'searchandflick/memberdeleted.inc'; // show success message
			$this->load->view('includes/template', $dat);

		} else {
			$this->showdetails(); // show details view
		
		}

	}
}
?>