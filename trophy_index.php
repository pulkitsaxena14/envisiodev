<?php
	$q1 = $q2 = $q3 = $q4 = $q5 = $q6 = $q7 = $q8 = $q9 = $volume = $area = $volcost = $areacost = $totalcost = ""; 
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
			$q1 = $_POST["q1"];
			$q2 = $_POST["q2"];
			$q3 = $_POST["q3"];
			$q4 = $_POST["q4"];
			$q5 = $_POST["q5"];
			$q6 = $_POST["q6"];
			$q7 = $_POST["q7"];
			$q8 = $_POST["q8"];
			$q9 = $_POST["q9"];
	}
	echo $q1;
	switch($q1)
	{
		case 1:
			$volume= ((4 * 3.14 * pow($q5, 3)) / 3);
			$area= (4 * 3.14 * pow($q5, 2));
			break;
		case 2:
			$volume= (3.14 * pow($q5, 2) * $q4);
			$area= (2 * 3.14 * $q5 * ($q5 + $q4));
			break;
		case 3:
			$volume= (pow($q2,3));
			$area= (6 * pow($q2,2));
			break;
		case 4:
			$volume= $q2 * $q3 * $q4;
			$area= (2 * ((q2 * q3) + (q3 * q4) + (q4 * q5)));
			break;
	}
	switch($q6)
	{
		case 1: 
			$volcost = 500 * (($q7 * $volume) / 100);
			break;
		case 2:
			$volcost = 300 * (($q7 * $volume) / 100);
			break;
		case 3:
			$volcost = 100 * (($q7 * $volume) / 100);
			break;
		default:
			break;
	}
	switch($q8)
	{
		case 1: 
			$areacost = 500 * (($q9 * $area));
			break;
		case 2:
			$areacost = 300 * (($q9 * $area));
			break;
		case 3:
			$areacost = 100 * (($q9 * $area));
			break;
		default:
			break;
	}
	$totalcost = $areacost + $volcost;
	echo "Total Cost : " + $totalcost;
?>
