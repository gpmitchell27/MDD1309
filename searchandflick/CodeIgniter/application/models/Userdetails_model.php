<?php

class Userdetails_model extends CI_Model {
	
	public function __construct() 
     {
           parent::__construct(); 
           $this->load->database();
     }
	 
	 public function getDetails() {
		 
		 // result query
		 
		 $q = $this->db->select('user_id, user_email, user_phone, user_address, user_favorite_color, user_zodiac, user_status, user_favorite_color')
		 ->from('user_details');
		 $ret['d_row'] = $q->get()->result();
		 return $ret;
		 //count query
	 }

	
	
}