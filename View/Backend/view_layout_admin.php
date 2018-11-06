<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="public/backend/css/QuanLiThiLucCSS.css">
	<link rel="stylesheet" type="text/css" href="public/backend/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/backend/css/jquery.dataTables.min.css">
	<script type="text/javascript" src="public/backend/js/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="public/backend/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="public/backend/js/bootstrap.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#example').DataTable();
		} );
	</script>
</head>
<body>
	<header>
		<div class="container-fluid">
			<div class="row" style="height: 67px;line-height: 67px;">
				<div class="col-md-3">
					<img src="public/backend/images/2.png" alt="Logo alt" height="67">
				</div>
				<div class="col-md-9" style="line-height: 67px;">
					<p style="float: right;"><a href="admin.php?controller=logout">Đăng xuất</a></p>
				</div>
			</div>
		</div>
	</header>

	<!--------------- content  ------------------->
	<div class="content">
		<div class="container-fluid">
			<!-- menu -->
			<div class="col-md-2">
				<div class="title-menu">Admin</div>
				<div class="menu">
					<ul>
						<li>
							<a href="QuanLiThiLuc.html">
								<span class="glyphicon glyphicon-home"></span>Trang chủ
								<span class="glyphicon glyphicon-chevron-right" style="font-size: 9px;"></span>
							</a>
						</li>
						<li>
							<a href="admin.php?page=dulieutruong">
								<span class="glyphicon glyphicon-user"></span> QL dữ liệu trường
								<span class="glyphicon glyphicon-chevron-right" style="font-size: 9px;"></span>
							</a>
							<ul class="sub-menu">
							</ul>
						</li>
						<li>
							<a href="#">
								<span class="glyphicon glyphicon-eye-open"></span>QL bài viết
								<span class="glyphicon glyphicon-chevron-right" style="font-size: 9px;"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="admin.php?page=qlbaiviet">Tất cả bài viết</a></li>
								<li><a href="admin.php?page=baivietmoi" >Bài viết mới</a></li>
							</ul>
						</li>
						<li>
							<a href="admin.php?controller=user">
								<span class="glyphicon glyphicon-signal"></span>
								QL tài khoản<span class="glyphicon glyphicon-chevron-right" style="font-size: 9px;">
								</a>

							</li>
						</ul>

					</div>
				</div>
				<!-- end menu -->
				<div class="col-md-10">
					<div class="row">
						<div class="col-md-12 x">
							<div id="result">
								<?php
								// echo("$controller");
								if (file_exists("controller/backend/$controller") == true)
									include "controller/backend/$controller";
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<div class="container-fluid">
				<div class="col-md-12"></div>
			</div>
		</footer>
	</body>
	</html>