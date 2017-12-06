<?php

	$distance = $_GET['d'];
	$location = $_GET['l'];

	echo "<br/><h2>Index-Page Displaying Data...</h2><br/>";

	echo isset($distance)? "<h1>DISTANCE: $distance</h1>" : "No Distance";
	echo isset($location)? "<h1>DISTANCE: $location</h1>" : "No Location";

?>
