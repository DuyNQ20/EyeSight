<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="public/backend/js/Chart.min.js"></script>
	<script type="text/javascript" src="public/backend/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="public/backend/js/customer.js"></script>
	<link rel="stylesheet" type="text/css" href="public/backend/css/QuanLiThiLucCSS.css">
	<link rel="icon" href="http://www.thuthuatweb.net/wp-content/themes/HostingSite/favicon.ico" type="image/x-ico"/>
</head>
<body>

	<?php
	session_start();
	include 'config.php';
	include 'application/model.php';
	include 'application/controller.php';
	unset($_SESSION["acc_username"]);
	if (isset($_SESSION["acc_username"]) == false) 
	{
		//hien thi MVC login
		include "controller/backend/controller_login.php";
	}else
	{
		//------------
		//xac dinh controller truyen tu url de load trang
		$controller = isset($_GET["controller"])&&$_GET["controller"]!=""?"controller_".$_GET["controller"].".php":"controller_home.php";
	}
	?>

</body>
</html>
