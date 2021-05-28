<?php 
@session_start();
/**
 * 
 */
// include_once 'autoload.php';

include_once 'Model/model_admin.php';
class controller_home
{
	public $model_admin;
	// public $model_customer;
	function __construct()
	{
		$this->model_admin = new model_admin();
		$this->model_customer = new model_customer();
		if (isset($_POST['btnlogin'])) {
			$count=$this->model_admin->checklogin($_POST);
			if ($count!=0) {
				foreach ($count as $value) {
					$user_type=$value['user_type'];
				}
				$_SESSION['type']=$user_type;
				$_SESSION['log']=$_POST['user_email'];
				if ($user_type==1) {
					header('location: index.php?action=home');
					exit;
				}else header('location: index.php?action=homepage');

			}else echo "SAI USER HOAC PASSWORD";
		}
		if (isset($_SESSION['log'])) {
			$this->show();
		}else{
			include_once 'View/login.php';
			exit();
		} 
		
	}
	function show(){
//----------------------------------/DEFINE VALUE View/..../-------------------------------//
		$data_customer = $this->model_admin->select('khachhang');
		$data_user=$this->model_admin->select_user($_SESSION['log'],2);
		$myuser=$this->model_admin->select_user($_SESSION['log'],1);
//----------------------------------/CHECK USER TYPE/----------------------------------/
		if ($_SESSION['type']==1 && !isset($_GET['action']) || $_GET['action']=='login') {
			header('location: index.php?action=home');
		}else if ($_SESSION['type']==2 && !isset($_GET['action'])) {
			header('location: index.php?action=homepage');
		}
		if (isset($_GET['action'])) {
//----------------------------------/LOGOUT/----------------------------------/
			if (isset($_POST['logout'])) {
				header('location: index.php');
				unset($_SESSION['type']);
				unset($_SESSION['log']);
				exit;
			}

			switch ($_GET['action']) {
//---------------------------------/home-manage customer/---------------------------------
				case 'home':
				include_once 'View/index_view.php';
				
				if (isset($_POST['add'])) {
					$this->model_admin->add($_POST,1);
					header("Refresh:0");
					exit;

				}

				if (isset($_POST['edit'])) {
					$this->model_admin->edit($_POST,1,3);
					header("Refresh:0");
					exit;

				}

				if (isset($_POST['delete'])) {
					$this->model_admin->delete($_POST,1);
					header("Refresh:0");
					exit;
				}

				break;
//----------------------------------/MANAGE USER/----------------------------------/
				case 'user':
				include_once 'View/index_view.php';
				
				if (isset($_POST['adduser'])) {
					$this->model_admin->add($_POST,2);
					header("Refresh:0");
					exit();
				}

				if (isset($_POST['edit'])) {

					$oldpass=$this->model_admin->select_pass($_POST);
					if (strcmp($_POST['password'], $oldpass[0]['password'])==0) {
						$this->model_admin->edit($_POST,2,1);
						header("Refresh:0");
					}else if (strcmp($_POST['password'], $oldpass[0]['password'])!=0) {
						$this->model_admin->edit($_POST,2,2);
						header("Refresh:0");
					}
						//header("Refresh:0");


				}
				if (isset($_POST['delete'])) {
					$this->model_admin->delete($_POST,2);
					header("Refresh:0");
					exit;
				}
				
				break;
//----------------------------------/MANAGE MY USER/----------------------------------/
				case 'myuser':
				include_once 'View/index_view.php';
				if (isset($_POST['edit'])) {
					$_SESSION['log']=$_POST['user'];

					$oldpass=$this->model_admin->select_pass($_POST);
					if ($_POST['password']==null) {
						$this->model_admin->edit($_POST,2,1);
						header("Refresh:0");
					}else if ($_POST['password']!=null) {
						$this->model_admin->edit($_POST,2,2);
						header("Refresh:0");
					}


				}
				break;
//----------------------------------/ACTION LOGIN/----------------------------------/
				case 'login':
				include_once 'View/login.php';

				if (isset($_POST['btnlogin'])) {
					$count=$this->model_admin->checklogin($_POST);
					if ($count!=0) {
						foreach ($count as $value) {
							$user_type=$value['user_type'];
						}
						$_SESSION['type']=$user_type;
						$_SESSION['log']=$_POST['user_email'];
						if ($user_type==1) {
							header('location: index.php?action=home');
							exit;
						}else header('location: index.php?action=homepage');

					}else echo "SAI USER HOAC PASSWORD";
				}

				break;
//----------------------------------/HOME PAGE/----------------------------------/
				case 'homepage':
				include_once 'View/index_view.php';
				break;
				default:
				include_once 'View/index_view.php';
				break;
			}
			
		}
//----------------------------------/LOGIN/----------------------------------/
		else{
			include_once 'View/login.php';
			if (isset($_POST['btnlogin'])) {
				$count=$this->model_admin->checklogin($_POST);
				if ($count!=0) {
					foreach ($count as $value) {
						$user_type=$value['user_type'];
					}
					$_SESSION['type']=$user_type;
					$_SESSION['log']=$_POST['user_email'];
					if ($user_type==1) {
						header('location: index.php?action=home');
						exit;
					}else header('location: index.php?action=homepage');
					
				}else echo "SAI USER HOAC PASSWORD";
			}
		}
	}
}
?>