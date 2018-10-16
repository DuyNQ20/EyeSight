<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="../css/QuanLiThiLucCSS.css">
        <script language="javascript">
            function load_ajax()
            {
                // Tạo một biến lưu trữ đối tượng XML HTTP. Đối tượng này
                // tùy thuộc vào trình duyệt browser ta sử dụng nên phải kiểm
                // tra như bước bên dưới
                var xmlhttp;
                 
                // Nếu trình duyệt là  IE7+, Firefox, Chrome, Opera, Safari
                if (window.XMLHttpRequest)
                {
                    xmlhttp = new XMLHttpRequest();
                }
                // Nếu trình duyệt là IE6, IE5
                else
                {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                 
                // Khởi tạo một hàm gửi ajax
                xmlhttp.onreadystatechange = function()
                {
                    // Nếu đối tượng XML HTTP trả về với hai thông số bên dưới thì mọi chuyện 
                    // coi như thành công
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        // Sau khi thành công tiến hành thay đổi nội dung của thẻ div, nội dung
                        // ở đây chính là 
                        document.getElementById("result").innerHTML = xmlhttp.responseText;
                    }
                };
                 
                // Khai báo với phương thức GET, và url chính là file result.php

                xmlhttp.open("GET", "result.php", true);                 
                xmlhttp.open("GET", "QLTaiKhoan.php", true);                 
                         
                // Cuối cùng là Gửi ajax, sau khi gọi hàm send thì function vừa tạo ở
                // trên (onreadystatechange) sẽ được chạy
                xmlhttp.send();
            }

            function load_ajax2()
            {

                var xmlhttp;
                 
                if (window.XMLHttpRequest)
                {
                    xmlhttp = new XMLHttpRequest();
                }

                else
                {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {

                        document.getElementById("result").innerHTML = xmlhttp.responseText;
                    }
                };                 
                xmlhttp.open("GET", "qlbaiviet.php", true);                  
                xmlhttp.send();
            }
            function load_ajax3()
            {

                var xmlhttp;
                 
                if (window.XMLHttpRequest)
                {
                    xmlhttp = new XMLHttpRequest();
                }

                else
                {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {

                        document.getElementById("result").innerHTML = xmlhttp.responseText;
                    }
                };                 
                xmlhttp.open("GET", "QuanLiBaiViet/VietBaiMoi.php", true);                  
                xmlhttp.send();
            }
        </script>
</head>
<body>
<header>
	<div class="container-fluid">
		<div class="col-md-3">
			<img src="../images/2.png" alt="Logo alt" height="67">
		</div>
		<div class="col-md-9"></div>
	</div>
</header>

<!--------------- content  ------------------->
<div class="content">
	<div class="container-fluid">
		<div class="col-md-2">
			<div class="title-menu">Admin</div>
			<div class="menu">
					<ul>
						<li><a href="QuanLiThiLuc.html"><span class="glyphicon glyphicon-home"></span>Trang chủ<span class="glyphicon glyphicon-chevron-right" style="font-size: 9px;"></span></a>
						</li>
				    	<li>
				    <a onclick="load_ajax()">
				    	<span class="glyphicon glyphicon-user"></span>QL dữ liệu trường
						<span class="glyphicon glyphicon-chevron-right" style="font-size: 9px;"></span>
					</a>
							<ul class="sub-menu">

							</ul>
						</li>
						<li>
							<a href="#"><span class="glyphicon glyphicon-eye-open"></span>QL bài viết<span class="glyphicon glyphicon-chevron-right" style="font-size: 9px;"></span></a>
							<ul class="sub-menu">
								<li><a onclick="load_ajax2()">Tất cả bài viết</a></li>
								<li><a onclick="load_ajax3()" ">Bài viết mới</a></li>
							</ul>
						</li>
						<li>
							<a onclick="load_ajax()"><span class="glyphicon glyphicon-signal"></span>QL tài khoản<span class="glyphicon glyphicon-chevron-right" style="font-size: 9px;"></a>

						</li>
					</ul>
				
			</div>

		</div>
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-12 x">
					<div id="result">
                        <?php 
                            include "QLTaiKhoan.php";
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