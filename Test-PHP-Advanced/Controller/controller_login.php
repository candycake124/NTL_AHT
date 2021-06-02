<?php 
/**
 * 
 */
class controller_login
{
	public $model_admin;
	function __construct()
	{
		$this->model_admin = new model_admin();
		include_once url_view.'login.php';
	}
	function c_login(){
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

			}else{
				$message = "SAI USER HOAC PASSWORD";
				echo "<script type='text/javascript'>alert('$message');</script>";
				// header('location: index.php?action=login');
				// include_once url_view.'login.php';
			}
		}
	}
	function c_logout(){
		header('location: index.php');
		unset($_SESSION['type']);
		unset($_SESSION['log']);
		exit;
	}
}
?>