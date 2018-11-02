<!DOCTYPE html>
<html>
<head>
	<title>Y tế học đường</title>
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
			<div class="col-md-2">
				<div class="title-menu">Y tế học đường </div>
				<div class="menu">
					<ul>
						<li><a href="QuanLiThiLuc.html"><span class="glyphicon glyphicon-home"></span>Trang chủ<span class="glyphicon glyphicon-chevron-right" style="font-size: 9px;"></span></a>
						</li>
						<li><a href="admin.php?controller=eyesight"><span class="glyphicon glyphicon-th"></span>Dữ liệu cận thị</a></li>
						<li>
							<a href="#"><span class="glyphicon glyphicon-signal"></span>Tổng hợp thông kê<span class="glyphicon glyphicon-chevron-right" style="font-size: 9px;"></a>
								<ul class="sub-menu">
									<li><a onclick="load_ajax2()">Thị lực theo một lớp</a></li>
									<li><a onclick="load_ajax3();">Các lớp trong 1 khối</a></li>
									<li><a onclick="load_ajax4()">Các khối trong trường </a></li>
									<li><a onclick="load_ajax5()">Theo dõi 1 khóa</a></li>
									
								</ul>
							</li>
						</ul>
						
					</div>

				</div>
				<div id="load">
					<div class="col-md-10">
						<div class="row">
							<div class="col-md-12">
								<div id="result">
									<?php
									
									if (file_exists("controller/backend/$controller") == true)
									include "controller/backend/$controller";
									?>
								</div>

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