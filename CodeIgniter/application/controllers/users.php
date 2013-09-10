<?php

class Users extends CI_Controller {
		
	public function index() {
		
	$this->load->model('Userlist_model');
			
	$results = $this->Userlist_model->getUsers();
		
	$data['rows'] = $results['row'];

	$this->load->view('header');				
	$this->load->view('body', $data);
	$this->load->view('footer');
		
	}
}
?>