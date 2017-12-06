<?php

	$distance = $_GET['d'];
	$location = $_GET['l'];

	echo "<br/><h2>Receiving Data...</h2><br/>";

	if(empty($distance) || empty($location)){
		die("DISTANCE AND LOCATION REQUIRED");
	}

	echo "<h1>DISTANCE: $distance</h1>";
	echo "<h1>DISTANCE: $location</h1>";

	require('dbconnect.php');

	echo "<h1>MY RECEIVING PAGE - Receive</h1><br/>";

	$stmt = $myPDO->prepare("INSERT INTO garbage_data (distance, location, cdatetime) VALUES (?, ?, NOW())");
    $stmt->bind_param("ds", $distance, $location);
	$stmt->execute();
	$stmt->close();


	echo "<h4>DATA RECEIVED SUCCESSFULLY</h4>";

?>
