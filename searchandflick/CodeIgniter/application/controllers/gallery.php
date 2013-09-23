<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery extends CI_Controller {
	public function __construct() {
		parent::__construct();
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
	public function logout() {
		$newdata = array(
		'user_id'   =>'',
		'user_name'  =>'',
		'user_email'     => '',
		'logged_in' => FALSE,
		);
		$this->session->unset_userdata($newdata );
		$this->session->sess_destroy();
		$this->user->index();
	}
}