<!DOCTYPE html>
<html>
<head>
	<title>My Garbage Level Indicator</title>
	<style  type="text/css">
		body{
			background-color: orange;
		}

		title-h1{
			text-align: center;
		}
	</style>
</head>
<body>
	<h1 id='title-h1'>GARBAGE LEVEL INDICATOR</h1><br/>
		<?php

	
	
	require('dbconnect.php');

	$result = $myPDO->query("SELECT id, distance, location, cdatetime FROM `garbage_data` ORDER BY id DESC LIMIT 20");

	// var_dump($result);
	print "<u>Distance\tLocation\tDateTime\t</u>\n<br/>";
	
	foreach ($result as $row) {
		print "<h2> ".$row['distance'] . "</h2>\t";
		print $row['location'] . "\t";
		print $row['cdatetime'] . "\t\n<br/>";
	}


?>


</body>
</html>
