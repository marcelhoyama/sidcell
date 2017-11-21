<?php
require 'environment.php';



$config = array();


if (ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/sidcell/");
	$config['dbname']='sidcell';
	$config['host']='localhost';
	$config['dbuser']='root';
	$config['dbpass']='';
}
else{

		//define("BASE_URL", "http://sidcellinformatica.com.br/");
        $config['dbname']='u245522034_sidce';
	$config['host']='mysql.hostinger.com.br';
	$config['dbuser']='u245522034_sidce';
	$config['dbpass']='';
}


