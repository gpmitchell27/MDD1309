<?php

class FlickrPhotos extends CI_Controller {
		
	public function index() {
		
	$this->load->model('FlickrPhoto_model');
			
	$results = $this->FlickrPhoto_model->getPhotos();
		
	$data['rows'] = $results['row'];

	$this->load->view('header');				
	$this->load->view('body', $data);
	$this->load->view('footer');
		
	}
}
?>