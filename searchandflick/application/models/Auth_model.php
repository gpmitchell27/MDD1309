<?php
 
class Auth_model extends CI_Controller {
	public function __construct() {
		parent::__construct();
        $this->load->database();
	}
	public function getUserbyNamePass($name, $pass) {
		$host = 'localhost';
		$dbname = 'flickr';
		$username = 'root';
		$password = 'root';
		$pdo_object = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
		$query = $pdo_object->prepare('SELECT user_ID AS id, user_name AS name
									   FROM users
									   WHERE user_name = :name
									   AND user_password = :pass');
		if($query->execute(array(':name' => $name, ':pass' => $pass))){
				$rows = $query->fetchAll(\PDO::FETCH_ASSOC);
				if (count($rows) === 1){
					return $rows[0];
				}
			}
			return FALSE;
	}
}
