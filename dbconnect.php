<?php 
	$DB_HOST = "sql3.freemysqlhosting.net";
	$DB_NAME = "sql3209328";
	$DB_USERNAME = "sql3209328";
	$DB_PASSWORD = "CeKYrG2Wrl";
	$DB_PORT = "3306";

	$myPDO = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USERNAME, $DB_PASSWORD);

	$result = $myPDO->query("SELECT id, distance, location, cdatetime FROM `garbage_data`");

	// var_dump($result);
	print "<u>Distance\tLocation\tDateTime\t</u>\n<br/>";
	foreach ($result as $row) {
		print "<h2> ".$row['distance'] . "</h2>\t";
		print $row['location'] . "\t";
		print $row['cdatetime'] . "\t\n<br/>";
	}

 ?>