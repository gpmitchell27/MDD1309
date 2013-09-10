<?php
class Gallery extends CI_Controller {

	public function index() {

		$this->load->view('searchandflick/header.inc');
		$this->load->view('searchandflick/body.inc');
		$this->load->view('searchandflick/footer.inc');
		$this->load->model('searchandflick/FlickrPhoto_model');
		$result = $this->FlickrPhoto_model->getPhotos();
	}
}