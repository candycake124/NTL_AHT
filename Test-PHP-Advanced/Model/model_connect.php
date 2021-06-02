<?php 
/**
 * 
 */
//namespace general;

class model_connect
{
	public $server = local;
	public $username = user;
	public $password = pass;
	public $database = db;
	public $var_connect = null;
	function connect(){
		$this->var_connect = new mysqli($this->server, $this->username, $this->password, $this->database);
		mysqli_set_charset($this->var_connect,'utf8');
	}

	public function show($table){	
		$sql='SELECT * FROM '.$table.'';
		$this->result=$this->var_connect->query($sql);
		if ($this->result->num_rows==0) {
			$data=0;
		}else{
			while ($row=$this->result->fetch_assoc()) {
				$data[]=$row;
			}
		}
		return $data;
	}
	public function update($sql){
		$this->result=$this->var_connect->query($sql);
	}
	
}
 ?>