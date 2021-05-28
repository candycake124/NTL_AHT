<?php

spl_autoload_register(function ($class,$namespace) {
   require('$namespace' . '/Model/'.$class.'.php');

});

?>