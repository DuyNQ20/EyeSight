<?php 

	class controller_taikhoan extends controller
	{
		function __construct()
		{
			parent::__construct();

			$arr = $this->model->fetch("SELECT * FROM tbl_accounts");
			
			include 'view/backend/layout_admin.php';
		}

		function Edit()
		{

			parent::__construct();
			echo "haah";
			$action = isset($_GET["action"])?$_GET["action"]:"";
			switch ($action) {

				case 'edit':
					$dem++;
					$id = isset($_GET["id"])?$_GET["id"]:"";
					$obj = $this->model->fetch_one("SELECT * FROM tbl_accounts WHERE acc_id = $id");
					break;
				
				default:
					# code...
					break;

			}
			
			include 'view/backend/add_edit_taikhoan.php';
		}
	}

	$h = new controller_taikhoan();

	if(isset($_GET["controller"])&&$_GET["controller"]!="")
	{
		echo "test";
		$h->Edit();
	}
 ?>