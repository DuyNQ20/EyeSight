<?php 
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "db_eyesight";
	$conn = mysqli_connect($hostname, $username, $password, $database);
	mysqli_set_charset($conn, "utf8");
 ?>