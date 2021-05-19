<?php 
/**
 * 
 */
class modelll
{
	private $serverrr = 'localhost';
	private $username = 'root';
	private $pass = '';
	private $db = 'db_quanly';
	private $connecttt = null;
	
	function __construct()
	{
		$this->connect();
	}

	function connect(){
		$this->connecttt = new mysqli($this->serverrr, $this->username, $this->pass, $this->db);
		mysqli_set_charset($this->connecttt,'utf8');
	}

	function showcustomer(){
		$sql="select * from khachhang";	
		$this->result=$this->connecttt->query($sql);
		if ($this->result->num_rows==0) {
			$data=0;
		}else{
			while ($row=$this->result->fetch_assoc()) {
				$data[]=$row;
			}
		}
		return $data;
	}
	function checklogin($data){
		$sql='SELECT * FROM `user` WHERE name="'.$data['user_email'].'" and password="'.md5($data['pasw']).'"';	
		$this->result=$this->connecttt->query($sql);
		if ($this->result->num_rows==0) {
			$data_resutl=0;
		}else{
			while ($row=$this->result->fetch_assoc()) {
				$data_resutl[]=$row;
			}
		}
		return $data_resutl;
	}
	function user_type($data){
		$sql='SELECT user_type FROM `user` WHERE name="'.$data['user_email'].'" and password="'.md5($data['pasw']).'"';	
		$this->result=$this->connecttt->query($sql);
		if ($this->result->num_rows==0) {
			$data_resutl=0;
		}else{
			while ($row=$this->result->fetch_assoc()) {
				$data_resutl[]=$row;
			}
		}
		return $data_resutl;
	}
	function add_customer($data){
		$sql='INSERT INTO khachhang(name,email,created_date) VALUES("'.$data['name'].'","'.$data['email'].'","'.date("Y-m-d").'")';
		$this->result=$this->connecttt->query($sql);
	}
	function edit_customer($data){
		$sql='UPDATE khachhang SET name="'.$data['name'].'", email="'.$data['email'].'", updated_date="'.date("Y-m-d").'" WHERE id="'.$data['edit'].'"';
		$this->result=$this->connecttt->query($sql);
	}
	function delete_customer($data){
		$sql='DELETE FROM `khachhang` WHERE `khachhang`.`id` ="'.$data['delete'].'"';
		$this->result=$this->connecttt->query($sql);
	}

	function showuser($data,$key){
		switch ($key) {
			case '1':
			$sql='SELECT * FROM `user`WHERE name!="'.$data['user_email'].'"';	
			$this->result=$this->connecttt->query($sql);
			if ($this->result->num_rows==0) {
				$data_resutl=0;
			}else{
				while ($row=$this->result->fetch_assoc()) {
					$data_resutl[]=$row;
				}
			}
			return $data_resutl;
			break;
			case '2':
			$sql='SELECT * FROM `user`WHERE name="'.$data['user_email'].'"';	
			$this->result=$this->connecttt->query($sql);
			if ($this->result->num_rows==0) {
				$data_resutl=0;
			}else{
				while ($row=$this->result->fetch_assoc()) {
					$data_resutl[]=$row;
				}
			}
			return $data_resutl;
			break;
			
			default:
				# code...
			break;
		}
		
	}
	function add_user($data){
		$sql='INSERT INTO user(name,password,user_type) VALUES("'.$data['user'].'","'.md5($data['password']).'","'.$data['user_type'].'")';
		$this->result=$this->connecttt->query($sql);
	}
	function edit_user($data,$key){
		switch ($key) {
			case '1':
			$sql='UPDATE `user` SET `name` = "'.$data['user'].'", user_type="'.$data['user_type'].'" WHERE `user`.`id` = "'.$data['edit'].'"';
			$this->result=$this->connecttt->query($sql);
			break;
			case '2':
			$sql='UPDATE `user` SET `name` = "'.$data['user'].'", password="'.md5($data['password']).'",user_type="'.$data['user_type'].'" WHERE `user`.`id` = "'.$data['edit'].'"';
			$this->result=$this->connecttt->query($sql);
			break;
			default:
			$sql='UPDATE `user` SET `name` = "'.$data['user'].'", user_type="'.$data['user_type'].'" WHERE `user`.`id` = "'.$data['edit'].'"';
			$this->result=$this->connecttt->query($sql);
			break;
		}
	}
	function oldpass($data){
		$pas='SELECT password FROM `user` WHERE `user`.`id` = "'.$data['edit'].'"';
		$this->result=$this->connecttt->query($pas);
		if ($this->result->num_rows==0) {
			$data=0;
		}else{
			while ($row=$this->result->fetch_assoc()) {
				$data[]=$row;
			}
		}
		return $data;
	}
	function delete_user($data){
		$sql='DELETE FROM `user` WHERE `user`.`id` ="'.$data['delete'].'"';
		$this->result=$this->connecttt->query($sql);
	}
}
?>