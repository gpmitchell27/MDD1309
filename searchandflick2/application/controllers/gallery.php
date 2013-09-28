<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery extends CI_Controller {
	public function __construct() { // load parent controller
		parent::__construct();
	}
	public function gallery() { // initialize two arrays for flickr api data
		$photos = array();
		$data = array();
		if($this->input->post['search']) {  // grabbing whatever is in the search box
			$this->load->model('FlickrPhoto_model'); // load my flickr model
			$photos['photos'] = $this->FlickrPhoto_model->getPhotos(); // result from my model
			$data['photos'] = $photos;
			$data['header'] = 'searchandflick/member_header.inc'; // load my views
			$data['main_content'] = 'searchandflick/body.inc';
			$this->load->view('includes/template', $data);
		} else {
			$data['header'] = 'searchandflick/member_header.inc'; // load view again incase no results
			$data['main_content'] = 'searchandflick/body.inc';
			$this->load->view('includes/template', $data);
		}

	}
}