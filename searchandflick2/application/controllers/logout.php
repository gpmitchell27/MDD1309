<?php 

class Logout extends CI_Controller {

	function index() { 
		session_start(); // start session

		$this->session->unset_userdata('is_logged_in'); // unset session 'is_logged_in'

		$_SESSION = array(); // empty out session array if exists


		if (isset($_COOKIE[session_name('is_logged_in')])) { // dump cookies
		setcookie(session_name(), '', time()-42000, '/');
	}

		session_destroy(); // destroy session
		redirect('/login', 'location'); // redirect to homepage
 	}

}