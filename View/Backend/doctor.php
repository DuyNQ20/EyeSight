<header>
	<div class="container-fluid">
		<div class="col-md-3">
			<img src="public/backend/images/2.png" alt="Logo alt" height="67">
		</div>
		<div class="col-md-9"></div>
	</div>
</header>

<!--------------- content  ------------------->
<div class="content">
	<div class="container-fluid">
		<div class="col-md-2">
			<div class="title-menu">Tài khoản bác sĩ</div>
			<div class="menu">
				
					<ul>
						<li><a href="#"><span class="glyphicon glyphicon-home"></span>Trang chủ<span class="glyphicon glyphicon-chevron-right" style="font-size: 9px;"></span></a>
							<ul class="sub-menu">
							</ul>
						</li>
						<li><a href="#"><span class="glyphicon glyphicon-user"></span>Thông tin cá nhân
						<span class="glyphicon glyphicon-chevron-right" style="font-size: 9px;"></span></a>
							

						</li>

						<li>
							<a href="#"><span class="glyphicon glyphicon-signal"></span>Tổng hợp thông kê<span class="glyphicon glyphicon-chevron-right" style="font-size: 9px;"></a>
							<ul class="sub-menu">
								<li><a>1 khối của các trường </a></li>
								<li><a href="SoSanhCacKhoiGiuaHaiTruong.html">khối các trường theo năm </a></li>
								<li><a href="SoSanhCacTruong.html">Độ cận TB các trường</a></li>
								<li><a href="SoSanhCacTruong.html">TK các trường theo năm</a></li>
							</ul>
						</li>
					</ul>
			</div>
		</div>
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-12">
					<div id="result"></div>
					<?php include 'MotKhoiGiuaCacTruong.php'; ?>
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
