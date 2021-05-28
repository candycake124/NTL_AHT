<?php 
/**
 * 
 */
include_once 'autoload.php';

class model_customer extends model_connect
{
	private $intermediary;

	function __construct()
	{
		//echo "sdcs";
		$this->intermediary = new model_connect();
		$this->intermediary->connect();
	}
	function select(){
		$data=$this->intermediary->show('khachhang');
		// print_r();
		return $data;
	}
}
 ?>