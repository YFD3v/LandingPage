<?php
	$autoload =  function($class){
		include($class.'.php');
	};

	spl_autoload_register($autoload);
	defined('INCLUDE_PATH') or define('INCLUDE_PATH','http://localhost/LandingPageSemPHPMAILER/');
?>
