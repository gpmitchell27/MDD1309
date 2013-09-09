<?php 

class Details extends CI_CONTROLLER {
	
	public function index() {
	
	$this->load->model('Userdetails_model');

	$result = $this->Userdetails_model->getDetails();
	$data['d_rows'] = $result['d_row'];
		
	$this->load->view('header');				
	$this->load->view('details', $data);
	$this->load->view('footer');	
			
	}	
}

?>