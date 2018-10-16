<?php 
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "myeye";
	$conn = mysqli_connect($hostname, $username, $password, $database);
	mysqli_set_charset($conn, "utf8");
 ?>