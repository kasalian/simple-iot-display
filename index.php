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

	$binHeight = 70.0; // Assuming the garbage bin is 70.0cm in height.
	$distance_left = 70.0;
	$garbage_location = "";

	


	$result = $myPDO->query("SELECT id, distance, location, cdatetime FROM `garbage_data` ORDER BY id DESC LIMIT 20");

	// var_dump($result);
	print "<u>Distance\tLocation\tDateTime\t</u>\n<br/>";
	$count  = 1;
	foreach ($result as $row) {
		print "<h2> ".$row['distance'] . "</h2>\t";
		print $row['location'] . "\t";
		print $row['cdatetime'] . "\t\n<br/>";

		if($count == 1){
			$distance_left = $row['distance'];
			$garbage_location = $row['location'];
		}
		$count++;
	}

	$distance = abs($binHeight - $distance_left);
	// $distance = abs($distance_left);

	$percent = (double)$distance_left/$binHeight * 100;
	$percent = ceil($percent);

// echo "<h1>$percent % | $distance</h1>";
  
  // if its above 70 percent empty
  $alert ='';
      if ($percent >= 70.0){
        
         	$colour = "green";
         	$status_label = "Garbage-Level: EMPTY";        
        }
        else if($percent >= 50.0)
        {
         	$colour = "yellow";
         	$status_label = "Garbage-Level:  HALF-EMPTY";
        }
        else
        {
        	$colour = "red";
        	$status_label = "Garbage-Level FULL : Contents Due For Disposal";
         	$alert=' GARBAGE-FULL PLEASE EMPTY ';
        }


?>	
	</div>
	<div  style="float:left; width: 50em; background-color: lightgrey">
		<canvas id="bar-chart" width="800" height="450"></canvas>


	</div>
	    <script>
        
        window.onload = function() {
            // Bar chart
				new Chart(document.getElementById("bar-chart"), {
				    type: 'bar',
				    data: {
				      labels: ["Garbage Level Measured in (Cm)"],
				      datasets: [
				        {
				          label: "<?php echo $status_label; ?>",
				          backgroundColor: ["<?php echo $colour; ?>"],
				          data: [<?php echo $distance; ?>]
				        }
				      ]
				    },
				    options: {
				      legend: { display: false },
				      title: {
				        display: true,
				        text: 'Garbage Level Indicator | Empty: <?php echo "$distance_left CM | $percent % | USED: $distance CM | $alert";?>'
				      },
				      scales: {
                    xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'Garbage Level Graphical Display | Garbage Location: <?php echo $garbage_location ?>'
                            }
                        }],
                    yAxes: [{
                            display: true,
                            ticks: {
                                beginAtZero: true,
                                steps: 2,
                                stepValue: 2,
                                max: <?php echo $binHeight; ?>
                            }
                        }]
                },
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
