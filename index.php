<?php
	header('Content-Type: text/html; charset=big5');
	$flightdata = file_get_contents("http://www.taoyuan-airport.com/uploads/flightx/a_flight_v4.csv");
	echo $flightdata;
 
 ?>