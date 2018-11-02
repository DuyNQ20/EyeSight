<?php
	class controller_logout
	{
		public function __construct()
		{
			//huy session 
			unset($_SESSION["acc_username"]);
			//quay tro lai trang admin.php
			header("location:admin.php");
		}
	}
	new controller_logout(); 
 ?>