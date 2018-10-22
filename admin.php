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
		//include 'controller/backend/controller_taikhoan.php';
		include 'controller/backend/controller_doctor.php';
	 ?>
</body>
</html>
