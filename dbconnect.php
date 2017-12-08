<?php 

	require __DIR__ . '/vendor/autoload.php';
	$dotenv = new Dotenv\Dotenv(__DIR__);
	$dotenv->load();

	$DB_HOST = getenv("M_DB_HOST");
	$DB_NAME = getenv("M_DB_NAME");
	$DB_USERNAME = getenv("M_DB_USERNAME");
	$DB_PASSWORD = getenv("M_DB_PASSWORD");
	$DB_PORT = getenv("M_DB_PORT");


	$myPDO = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USERNAME, $DB_PASSWORD);

 ?>