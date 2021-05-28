<?php 
/**
 * 
 */

include_once 'autoload.php';
define('a', 'View/');
class model_admin extends model_connect implements interface_admin
{
	
	private $intermediary;

	function __construct()
	{
		$this->intermediary = new model_connect();
		$this->intermediary->connect();
	}
	function select($table){
		return $this->intermediary->show($table);
	}
	function select_user($info,$key){
		switch ($key) {
			case '1':
				$sql='SELECT * FROM `user` WHERE name="'.$info.'"';
				break;
			
			case '2':
				$sql='SELECT * FROM `user` WHERE name!="'.$info.'"';
				break;
		}
		
		$this->result=$this->intermediary->var_connect->query($sql);
		if ($this->result->num_rows==0) {
			$data=0;
		}else{
			while ($row=$this->result->fetch_assoc()) {
				$data[]=$row;
			}
		}
		return $data;
	}
	function select_pass($data){
		$sql='SELECT password FROM `user` WHERE `user`.`id`='.$data['edit'];
		$this->result=$this->intermediary->var_connect->query($sql);
		if ($this->result->num_rows==0) {
			$data=0;
		}else{
			while ($row=$this->result->fetch_assoc()) {
				$data[]=$row;
			}
		}
		return $data;
	}
	public function checklogin($data){
		$sql='SELECT * FROM `user` WHERE name="'.$data['user_email'].'" and password="'.md5($data['pasw']).'"';	
		$this->result=$this->intermediary->var_connect->query($sql);
		if ($this->result->num_rows==0) {
			$data_resutl=0;
		}else{
			while ($row=$this->result->fetch_assoc()) {
				$data_resutl[]=$row;
			}
		}
		return $data_resutl;
	}

	function add($data,$key){
		switch ($key) {
//----------------------------------/add customer/------------------
			case '1':
			$sql='INSERT INTO khachhang(name,email,created_date) VALUES("'.$data['name'].'","'.$data['email'].'","'.date("Y-m-d").'")';
			$this->intermediary->update($sql);
			break;
//---------------------------------/add user/---------------------------------
			case '2':
			$sql='INSERT INTO user(name,password,user_type) VALUES("'.$data['user'].'","'.md5($data['password']).'","'.$data['user_type'].'")';
			$this->intermediary->update($sql);
			break;
//---------------------------------/add customer/---------------------------------
			default:
			$sql='INSERT INTO khachhang(name,email,created_date) VALUES("'.$data['name'].'","'.$data['email'].'","'.date("Y-m-d").'")';
			$this->intermediary->update($sql);
			break;
		}
	}

	function edit($data,$key1,$key2){
		switch ($key1) {
//----------------------------------/edit customer/------------------			
			case '1':
			$sql='UPDATE khachhang SET name="'.$data['name'].'", email="'.$data['email'].'", updated_date="'.date("Y-m-d").'" WHERE id="'.$data['edit'].'"';
			$this->intermediary->update($sql);
			break;
//---------------------------------/edit user/---------------------------------
			case '2':
			switch ($key2) {
//---------------------------------/edit user not fix password/---------------------------------
				case '1':
				$sql='UPDATE `user` SET `name` = "'.$data['user'].'", user_type="'.$data['user_type'].'" WHERE `user`.`id` = "'.$data['edit'].'"';
				$this->intermediary->update($sql);
				break;
//---------------------------------/edit user not fix password/---------------------------------
				case '2':
				$sql='UPDATE `user` SET `name` = "'.$data['user'].'", password="'.md5($data['password']).'",user_type="'.$data['user_type'].'" WHERE `user`.`id` = "'.$data['edit'].'"';
				$this->intermediary->update($sql);
				break;
				default:
				break;
			}
			break;
//---------------------------------/edit customer/---------------------------------
			default:
			$sql='UPDATE khachhang SET name="'.$data['name'].'", email="'.$data['email'].'", updated_date="'.date("Y-m-d").'" WHERE id="'.$data['edit'].'"';
			$this->intermediary->update($sql);
			break;
		}
	}

	function delete($data,$key){
		switch ($key) {
//----------------------------------/add customer/------------------
			case '1':
			$sql='DELETE FROM `khachhang` WHERE `khachhang`.`id` ="'.$data['delete'].'"';
			$this->intermediary->update($sql);
			break;
//---------------------------------/add user/---------------------------------
			case '2':
			$sql='DELETE FROM `user` WHERE `user`.`id` ="'.$data['delete'].'"';
			$this->intermediary->update($sql);
			break;
		}
		
	}
}
?>