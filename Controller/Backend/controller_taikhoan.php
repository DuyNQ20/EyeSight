<?php 

	class controller_taikhoan extends controller
	{
		function __construct()
		{
			parent::__construct();

			$arr = $this->model->fetch("SELECT * FROM tbl_accounts");
			
			include 'view/backend/layout_admin.php';
		}
	}
	new controller_taikhoan();
 ?>