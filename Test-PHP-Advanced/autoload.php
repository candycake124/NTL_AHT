<?php

spl_autoload_register(function ($class) {
	
	if (file_exists('Model/' . $class . '.php')) {
    	include_once 'Model/' . $class . '.php';
    }
    if (file_exists('Controller/' . $class . '.php')) {
	    include_once 'Controller/'. $class . '.php';
	}
	

});

?>