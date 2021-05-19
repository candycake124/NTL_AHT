<?php 
@session_start();
require_once 'Model/BaseModel.php';
/**
 * 
 */
class Home_Contro
{
	public $base;

	
	function __construct()
	{
		$this->base = new modelll();
	}

	public function Show()
	{
		//--------------------------------------------định nghĩa các biến trong foreach - index_view
		$manage_customer=$this->base->showcustomer();
		
		//--------------------------------------------Kiểm tra session

		if (isset($_SESSION['type'])) {

			$userlog=$_SESSION['log'];
			$user=$this->base->showuser($_SESSION['log'],1);
			$myuser=$this->base->showuser($_SESSION['log'],2);

			if ($_SESSION['type']==1 && !isset($_GET['action'])) {
				header('location: index.php?action=home');
			}else if ($_SESSION['type']==2 && !isset($_GET['action'])) {
				header('location: index.php?action=homepage');
			}
			
		}
		//----------------------------------------Kiểm tra $_GET['action']
		if (isset($_GET['action'])) {
			if (isset($_POST['logout'])) {
				header('location: index.php?action=login');
				unset($_SESSION['type']);
				exit;
			}
			switch ($_GET['action']) {
				//--------------------------------LOGIN
				case 'login':
				require_once 'View/login.php';
				if (isset($_POST['btnlogin'])) {
					$count=$this->base->checklogin($_POST);
					$user_type=$this->base->user_type($_POST);
					if ($count!=0) {
						$_SESSION['log']=$_POST;
						$_SESSION['type']=$user_type[0]['user_type'];
						if ($user_type[0]['user_type']==1) {
							header('location: index.php?action=home');
							exit;
						}else header('location: index.php?action=homepage');;

					}else echo "SAI USER HOAC PASSWORD";
				}
				break;

				//--------------------------------------HOME
				case 'home':
				require_once 'View/index_view.php';
				if (isset($_SESSION['type'])) {
					if (isset($_POST['add'])) {
						$this->base->add_customer($_POST);
						header('location: index.php?action=home');
						exit;

					}
					if (isset($_POST['edit'])) {
						$this->base->edit_customer($_POST);
						header('location: index.php?action=home');
						exit;

					}
					if (isset($_POST['delete'])) {
						$this->base->delete_customer($_POST);
						header('location: index.php?action=home');
						exit;
					}
					break;
				}
				else {
					header('location: index.php?action=login');
				}

				//------------------------------------HOME PAGE
				case 'homepage':
				if (isset($_SESSION['type'])) {
					require_once 'view/home.php';
					if (isset($_POST['logout'])) {
						unset($_SESSION['type']);
						header('location: index.php?action=login');
						exit;
					}
					break;
				}
				else {
					header('location: index.php?action=login');
				}
				

				//--------------------------------USER
				case 'user':
				
				if (isset($_SESSION['type'])) {
					require_once 'view/index_view.php';
					if (isset($_POST['adduser'])) {
						$this->base->add_user($_POST);
						header("Refresh:0");
						exit;
					}
					if (isset($_POST['edit'])) {
						$old=$this->base->oldpass($_POST);
						if (strcmp($old[0]['password'],$_POST['password'])==0) 
						{
							$this->base->edit_user($_POST,1);
							header("Refresh:0");
						}else if ($old[0]['password']!=md5($_POST['password'])) 
						{
							$this->base->edit_user($_POST,2);
							header("Refresh:0");
						}

						exit;

					}
					if (isset($_POST['delete'])) {
						$this->base->delete_user($_POST);
						header("Refresh:0");
						exit;
					}
					break;
				}
				else {
					header('location: index.php?action=login');
				}

				//---------------------------------------MY USER
				case 'myuser':
				
				if (isset($_SESSION['type'])) {
					require_once 'view/index_view.php';
					if (isset($_POST['edit'])) {
						$old=$this->base->oldpass($_POST);
						if (strcmp($old[0]['password'],$_POST['password'])==0) 
						{
							$this->base->edit_user($_POST,1);
							header("Refresh:0");
							exit;
						}else if ($old[0]['password']!=md5($_POST['password'])) 
						{
							$this->base->edit_user($_POST,2);
							header("Refresh:0");
							exit;
						}


					}
					break;
				}
				else {
					header('location: index.php?action=login');
				}
				

				default:
				require_once 'View/login.php';
				break;
			}
		}
		//-----------------------------------------LOGIN
		else{
			require_once 'View/login.php';
			if (isset($_POST['btnlogin'])) {
				$count=$this->base->checklogin($_POST);
				$user_type=$this->base->user_type($_POST);
				if ($count!=0) {
					$_SESSION['type']=$user_type[0]['user_type'];
					$_SESSION['log']=$_POST;
					if ($user_type[0]['user_type']==1) {
						header('location: index.php?action=home');
						exit;
					}else header('location: index.php?action=homepage');
					
				}else echo "SAI USER HOAC PASSWORD";
			}
		}
		

	}
}
?>
