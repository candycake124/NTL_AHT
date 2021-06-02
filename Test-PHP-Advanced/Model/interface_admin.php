<?php 
interface interface_admin{
	function select($table);
	function select_user($data,$key);
	function checklogin($data);
	function add($data,$key);
	function edit($data,$key1,$key2);
	function delete($data,$key);
	// function select_pass($data);
}
 ?>
