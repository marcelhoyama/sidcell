<?php
require 'environment.php';



$config = array();


if (ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/sidcell/");
	$config['dbname']='sidcell_db';
	$config['host']='localhost';
	$config['dbuser']='root';
	$config['dbpass']='';
}
else{

		//define("BASE_URL", "http://localhost/sidcell/");
        $config['dbname']='sidcell_db';
	$config['host']='localhost';
	$config['dbuser']='root';
	$config['dbpass']='';
}


