<?php
	$con = new mysqli("localhost","root","","Aarogyam");
	if ($con->connect_errno) {
		echo "Error - Failed to connect to MySQL: " . $con->connect_error;
		die();
	}
?>