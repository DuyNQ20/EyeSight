<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="public/backend/css/QuanLiThiLucCSS.css">
</head>
<body>
	<?php 
		session_start();
		include 'config.php';
		include 'application/model.php';
		include 'application/controller.php';
		include 'controller/backend/controller_taikhoan.php';

		if(isset($_GET["controller"])&&$_GET["controller"]!="")
		{
			include 'controller/backend/controller_add_edit_taikhoan.php';
		}
		
	 ?>
</body>
</html>
