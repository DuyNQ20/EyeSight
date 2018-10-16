
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
				case 'do-edit':
						
						$username = $_POST["username"];
						$role = $_POST["role"];
						$job = $_POST["job"];
						$sdt = $_POST["sdt"];
						$birthday = $_POST["birthday"];
						$gender = $_POST["gender"];
						$address = $_POST["address"];
						$hhhh = $this->model->execute("UPDATE tbl_accounts SET,acc_username= $username,`acc_gender`=$gender,`acc_birthday`=$birthday,`acc_phone`=$sdt,`acc_address`=$address,`acc_position`=$job,`acc_authorization`=$role WHERE  `acc_id`= $id ");
						include 'view/backend/add_edit_taikhoan.php';
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