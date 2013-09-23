<?php

class Userdetails_model extends CI_Model {
	
	public function __construct() 
     {
           parent::__construct(); 
           $this->load->database();
     }
	 
	 public function getDetails() {
		 
		 // result query
		 
		 $q = $this->db->select('id, phone, address, favcolor, zodiac, status')
		 ->from('user');
		 $ret['d_row'] = $q->get()->result();
		 return $ret;
		 //count query
	 }

	
	
}