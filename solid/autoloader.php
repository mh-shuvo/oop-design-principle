<?php 
require_once 'ShapeInterface.php';
require_once 'ThreeDShapeInterface.php';
require_once 'ManageInterface.php';

spl_autoload_register(function($class){
	$filename = 'shapes/' . $class . '.php';
	    if (file_exists($filename)) {
	     include $filename;
	}
});


spl_autoload_register(function($class){
	$filename = 'controller/' . $class . '.php';
	    if (file_exists($filename)) {
	     include $filename;
	}
});


 ?>