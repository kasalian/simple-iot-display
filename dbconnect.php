<?php 

	require('/vendor/autoload.php');

	// if it is my local server and not heroku hosted server
	
	// $dotenv = new Dotenv\Dotenv(__DIR__);
	// $dotenv->load();

	$DB_HOST = getenv("M_DB_HOST");
	$DB_NAME = getenv("M_DB_NAME");
	$DB_USERNAME = getenv("M_DB_USERNAME");
	$DB_PASSWORD = getenv("M_DB_PASSWORD");
	$DB_PORT = getenv("M_DB_PORT");

	// echo "$DB_HOST $DB_NAME $DB_USERNAME $DB_PASSWORD $DB_PORT";


	$myPDO = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USERNAME, $DB_PASSWORD);

 ?>