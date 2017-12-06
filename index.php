<?php

	// $distance = $_GET['d'];
	// $location = $_GET['l'];

	// echo "<br/><h2>Index-Page Displaying Data...</h2><br/>";

	// echo isset($distance)? "<h1>DISTANCE: $distance</h1>" : "No Distance";
	// echo isset($location)? "<h1>DISTANCE: $location</h1>" : "No Location";
	// 
	require('dbconnect.php');

	echo "<h1>MY HOME PAGE - INDEX</h1><br/>";


	$result = $myPDO->query("SELECT id, distance, location, cdatetime FROM `garbage_data`");

	// var_dump($result);
	print "<u>Distance\tLocation\tDateTime\t</u>\n<br/>";
	foreach ($result as $row) {
		print "<h2> ".$row['distance'] . "</h2>\t";
		print $row['location'] . "\t";
		print $row['cdatetime'] . "\t\n<br/>";
	}


?>
