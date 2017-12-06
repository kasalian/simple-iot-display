<?php 
	$DB_HOST = "sql3.freemysqlhosting.net";
	$DB_NAME = "sql3209328";
	$DB_USERNAME = "sql3209328";
	$DB_PASSWORD = "CeKYrG2Wrl";
	$DB_PORT = "3306";

	$myPDO = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USERNAME, $DB_PASSWORD);

	$result = $myPDO->query("SELECT id, distance, location, cdatetime FROM `garbage_data`");

	var_dump($result);

 ?>