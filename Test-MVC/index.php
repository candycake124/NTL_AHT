<?php 
define('SITE_IS', true );
include_once 'Controller/Home_Controller.php';
$control = new Home_Contro();
$control->Show();
?>