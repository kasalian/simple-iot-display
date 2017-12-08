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
	<script src="dist/Chart.bundle.min.js"></script>
    <!-- <script src="dist/utils.js"></script> -->
</head>
<body>
	<h1 id='title-h1'>GARBAGE LEVEL INDICATOR</h1><br/>

	<div style="float:left; width: 25em;background-color: white">
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
	</div>
	<div  style="float:left; width: 50em; background-color: lime">
		<canvas id="bar-chart" width="800" height="450"></canvas>


	</div>
	    <script>
        
        window.onload = function() {
            // Bar chart
				new Chart(document.getElementById("bar-chart"), {
				    type: 'bar',
				    data: {
				      labels: ["Bauchi"],
				      datasets: [
				        {
				          label: "Filled Level (Cm)",
				          backgroundColor: ["#3e95cd", "#ee2323"],
				          data: [65.8]
				        }
				      ]
				    },
				    options: {
				      legend: { display: false },
				      title: {
				        display: true,
				        text: 'Garbage Level Indicator'
				      }
				    }
				});



        };
/*

data: {
				      labels: ["Bauchi", "Asia", "Europe", "Latin America", "North America"],
				      datasets: [
				        {
				          label: "Population (millions)",
				          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
				          data: [70,60,55,30,20]
				        }
				      ]
				    },

 */
      
    </script>

</body>
</html>
