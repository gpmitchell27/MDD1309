<?php

class Userlist_model extends CI_Model {
	 
	 public function __construct() 
     {
           parent::__construct(); 
           $this->load->database();
     }
	 
	 public function getUsers() {
		 
		 // result query
		 
		 $q = $this->db->select('user_id , user_name , user_fullname')
		 ->from('users');
		 
		 $ret['row'] = $q->get()->result();
		 return $ret;
		 //count query
	 }
	 
 }