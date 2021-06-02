<?php 
ob_start();
define('SITE_IS', true );
// include_once 'Controller/controller_home.php';
include_once'config.php';
include_once 'autoload.php';

$control = new controller_home();
//$control->show();
/*$info=$data->select();
print_r($info) ;*/
 ?>