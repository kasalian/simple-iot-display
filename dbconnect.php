<?php 

	
	require __DIR__ . '/vendor/autoload.php';

	// echo "First: " . getenv("M_DB_HOST");

	if(stristr($_SERVER['HTTP_HOST'], 'local') || (substr($_SERVER['HTTP_HOST'], 0, 7) == '192.168')){
		$dotenv = new Dotenv\Dotenv(__DIR__);
		$dotenv->load();
	}


	// echo "<br/>SECOND: " . getenv("M_DB_HOST");

	$DB_HOST = getenv("M_DB_HOST");
	$DB_NAME = getenv("M_DB_NAME");
	$DB_USERNAME = getenv("M_DB_USERNAME");
	$DB_PASSWORD = getenv("M_DB_PASSWORD");
	$DB_PORT = getenv("M_DB_PORT");


	$myPDO = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USERNAME, $DB_PASSWORD);

 ?>