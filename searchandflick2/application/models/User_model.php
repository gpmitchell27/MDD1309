<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	public function add_user()
	{
		$data=array(
		'username'=>$this->input->post('user_name'),
		'email'=>$this->input->post('email_address'),
		'password'=>md5($this->input->post('password'))
		);
		$this->db->insert('user',$data);
	}

	public function getAll(){
    	$query = $this->db->get('user');
    		if($query->num_rows() > 0){
    			foreach($query->result() as $row) {
    				$data[] = $row;
    			}
            return $data;
    		}
    }

   /* public function getOne(){
	$id = $this->session->userdata('logged_in');
	$query = $this->db->query('SELECT * FROM user WHERE id = $id');
	$row = $query->row();
	return $query->result();
    }*/

	public function del_user($u) {
		$this->db->delete('user', array('id' => $u)); 
	}

	public function cleanit($ary){
	$returnAry = Array();
	foreach($ary as $itemKey => $itemValue){
		if($itemValue!= ''){
			$returnAry[$itemKey] = $itemValue;
		}
	}
	return $returnAry;
}

	public function getinfo() {
            $data = array(
            	'username' => $this->input->post('username'),
                'address' => $this->input->post('address'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'phone' => $this->input->post('phone'),
                'favcolor' => $this->input->post('favcolor'),
                'zodiac' => $this->input->post('zodiac'),
                'status' => $this->input->post('status'));
  			return $data; 
  	}

  	public function update() {
            $data = array(
            	'username' => $this->input->post('username'),
                'address' => $this->input->post('address'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'phone' => $this->input->post('phone'),
                'favcolor' => $this->input->post('favcolor'),
                'zodiac' => $this->input->post('zodiac'),
                'status' => $this->input->post('status'));
  			$this->db->where('username',$this->input->post('username'));
  			$this->db->update('user',$data); 
  			return $data; 
  	}

  	function validate() {

		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('user');

		if(!$query->num_rows == 1)  // if the users credentials validate
		{
			return FALSE;
		} else {
			return $query;
		}	
	}


	function create_member() {
		$new_member_insert_data = array(
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password'))
		);
		$insert = $this->db->insert('user', $new_member_insert_data);
		return $insert;
	}
}
?>