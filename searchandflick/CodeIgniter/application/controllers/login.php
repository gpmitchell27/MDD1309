<?php if ( ! defined('BASEPATH')) exit;
class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$username = empty($_POST['username']) ? '' : strtolower(trim($_POST['username']));
		$password = empty($_POST['password']) ? '' : trim($_POST['password']);
		session_start();

		if (!empty($_SESSION['userInfo'])) {
			$contentPage = 'success';
			$user = $_SESSION['userInfo'];
		}

		if (!empty($username) && !empty($password)) {
			$user = $this->Auth_model->getUserByNamePass($username, $password);
			if (is_array($user)) {
				$contentPage = 'gallery';
				$_SESSION['userInfo'] = $user;
			}
		}

		$this->load->model('Auth_model');
		$ret = $this->Auth_model->getUserbyNamePass($username, $password);
		$this->load->view('searchandflick/login_header.inc');
		$this->load->view('searchandflick/login.inc');
		$this->load->view('searchandflick/footer.inc');
	}
}
 
