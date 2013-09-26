<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
	public function __construct() {
	parent::__construct();
	}
	public function login($email,$password) {
		$this->db->where("email",$email);
		$this->db->where("password",$password);
		$query=$this->db->get("user");
		if($query->num_rows()>0) {
			foreach($query->result() as $rows) {
				//add all data to session
				$newdata = array(
				'user_userid'  => $rows->id,
				'user_name'  => $rows->username,
				'user_email'    => $rows->email,
				'logged_in'  => TRUE,
				);
			}
		$this->session->set_userdata($newdata);
		return true;
		}
	return false;
	}
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
    	$q = $this->db->get('user');
    		if($q->num_rows() > 0){
            return $q->result();
    		}
    }

    public function getOne(){
	$query = $this->db->query("SELECT * from user WHERE 'id' = $id");

		if ($query->num_rows() > 0) {
	   		$row = $query->row();
		}
		return $query->result();
    }

	public function del_user($id) {
		$this->db->delete('user', array('id' => $id)); 
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
}
?>