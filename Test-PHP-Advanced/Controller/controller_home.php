<?php 
@session_start();

/**
 * 
 */
// include_once 'autoload.php';

// include_once url_model.'admin.php';
include_once 'autoload.php';
class controller_home
{
	public $model_admin;
	public $controller_login;
	// public $model_customer;
	function __construct()
	{

		$this->model_admin = new model_admin();
		// $this->model_customer = new model_customer();
		// $this->check_type();
		$this->check_login();
		
	}
	private function check_type()
	{
		if (isset($_SESSION['type']) && $_SESSION['type']!=1) {
			header('location: index.php');
			exit;
		}

	}
	private function check_login()
	{
		if (isset($_SESSION['log'])) {
			$this->show();
		}else{
			if (isset($_GET['action']) && $_GET['action']=='login') {
				$this->controller_login = new controller_login();
				$this->controller_login->c_login();
				exit();
			}
			$data_customer = $this->model_admin->select('khachhang');
			include_once url_view.'index_view.php';
			// header()
		}
	}
	
	function show(){
//----------------------------------/DEFINE VALUE View/-------------------------------//
		
		
//----------------------------------/LOGOUT/----------------------------------/
		if (isset($_POST['logout'])) {
			$this->controller_login = new controller_login();
			$this->controller_login->c_logout();
		}
		if (isset($_GET['action'])) {
			switch ($_GET['action']) {
//------------------------------------------------------------------------
				case 'home':
				$this->check_type();
				$this->c_home();
				break;
//------------------------------------------------------------------------
				case 'user':
				$this->check_type();
				$this->c_user();
				break;
//------------------------------------------------------------------------
				case 'myuser':
				$this->c_myuser();
				break;
//----------------------------------/HOME PAGE/----------------------------------/
				case 'homepage':
				$data_customer = $this->model_admin->select('khachhang');
				include_once url_view.'index_view.php';
				break;
				default:
				include_once url_view.'index_view.php';
				break;
			}

		}
//----------------------------------/LOGIN/----------------------------------/
		else{
			include_once url_view.'index_view.php';
		}
	}
//----------------------------------/MANAGE MY USER/----------------------------------/
	private function c_myuser(){
		$myuser=$this->model_admin->select_user($_SESSION['log'],1);
		include_once url_view.'index_view.php';
		if (isset($_POST['edit'])) {
			$_SESSION['log']=$_POST['user'];
			if ($_POST['password']==null) {
				$this->model_admin->edit($_POST,2,1);
				header("Refresh:0");
			}else if ($_POST['password']!=null) {
				$this->model_admin->edit($_POST,2,2);
				header("Refresh:0");
			}


		}
	}
//----------------------------------/MANAGE USER/----------------------------------/
	private function c_user(){
		$data_user=$this->model_admin->select_user($_SESSION['log'],2);
		include_once url_view.'index_view.php';
		if (isset($_POST['adduser'])) {
			$check=$this->model_admin->check($_POST);
			if ($check==0) {
				$this->model_admin->add($_POST,2);
				header("Refresh:0");
				exit();
			}else{
				$message = "Same username! Please re-enter";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
		}

		if (isset($_POST['edit'])) {
			$check=$this->model_admin->check($_POST);
			if ($_POST['password']==0) {
				if ($check==0) 
				{
					$this->model_admin->edit($_POST,2,1);
					header("Refresh:0");
				}else{
					$message = "Same username! Please re-enter";
					echo "<script type='text/javascript'>alert('$message');</script>";
				}
			}else{
				if ($check==0) 
				{
					$this->model_admin->edit($_POST,2,2);
					header("Refresh:0");
				}else{
					$message = "Same username! Please re-enter";
					echo "<script type='text/javascript'>alert('$message');</script>";
				}
			}
						//header("Refresh:0");


		}
		if (isset($_POST['delete'])) {
			$this->model_admin->delete($_POST,2);
			header("Refresh:0");
			exit;
		}
	}
//---------------------------------/home-manage customer/---------------------------------
	private function c_home(){
		$data_customer = $this->model_admin->select('khachhang');
		if (file_exists(url_view.'index_view.php')) {
			include_once url_view.'index_view.php';
		}

		if (isset($_POST['add'])) {
			$this->model_admin->add($_POST,1);
			header("Refresh:0");
			exit;
		}
		if (isset($_POST['edit'])) {
			if ($_POST['img']==null) {
				$this->model_admin->edit($_POST,3,3);
				header("Refresh:0");
				exit;
			}else{
				$this->model_admin->edit($_POST,1,3);
				header("Refresh:0");
				exit;
			}
		}
		if (isset($_POST['delete'])) {
			$this->model_admin->delete($_POST,1);
			header("Refresh:0");
			exit;
		}
	}
}
?>