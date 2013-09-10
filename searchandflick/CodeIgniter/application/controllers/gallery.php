<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}
	public function index() {
		$data['photos'] = $this;
		$this->load->view('searchandflick/header.inc');
		$this->load->view('searchandflick/body.inc', $data);
		$this->load->view('searchandflick/footer.inc');
		$this->load->model('FlickrPhoto_model');
		$result['get_photo'] = $this->FlickrPhoto_model->getPhotos();
	}
}