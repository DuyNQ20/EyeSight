
<?php 
	
	class controller_add_edit_taikhoan extends controller
	{
		function __construct()
		{

			parent::__construct();
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
	new controller_add_edit_taikhoan();

 ?>