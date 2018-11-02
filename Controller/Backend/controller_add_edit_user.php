<?php
class controller_add_edit_user extends controller
{
	public function __construct()
	{
		parent::__construct();
			//-----------------
		function id_rode($role_name)
		{
			
			if ($role_name == 'Bác sĩ') {
				$role_id = 1;
			}
			else if($role_name == 'Y tá')
			{
				$role_id = 2;
			}
			else if($role_name == 'Cán bộ QLHS')
			{
				$role_id = 3;
			}
			else
			{
				$role_id = 4;
			}
			return $role_id;
		}

		$act = isset($_GET["act"]) ? $_GET["act"] : "";
		switch ($act) 
		{
			case 'edit':
			$acc_code = isset($_GET["acc_code"])? $_GET["acc_code"] : 0;
			$form_action = "admin.php?controller=add_edit_user&act=do_edit&acc_code=$acc_code";

			//lay ban ghi co id truyen vao 
			$arr = $this->model->fetch_one("SELECT acc_id,acc_username,tbl_account.role_id,user_fullname,user_gender,user_phone,user_email,user_company
										FROM tbl_account INNER JOIN tbl_user on tbl_account.acc_code = tbl_user.acc_code
										WHERE tbl_account.acc_code='$acc_code'");
			$arr2 = $this->model->fetch("select * from tbl_role");
			
			break;

			case 'do_edit':
			$acc_code = isset($_GET["acc_code"])? $_GET["acc_code"] : 0;

			$c_fullname = $_POST["c_fullname"];
			$user_gender = $_POST["user_gender"];

			$user_phone = $_POST["user_phone"];
			$user_email = $_POST["user_email"];
			$user_company = $_POST["user_company"];
			$role_name = $_POST["role_name"];
			$role_id = id_rode($role_name);
					//update ban ghi co id truyen vao
			$this->model->execute("UPDATE tbl_user SET user_fullname = '$c_fullname',user_gender='$user_gender',user_phone='$user_phone',user_email='$user_email',user_company = '$user_company' WHERE tbl_user.acc_code = '$acc_code'");
					//kiem tra, neu password khong rong thi update password 
			$c_password = $_POST["c_password"];
			if ($c_password != "") 
			{
				$c_password = md5($c_password);
					//update ban ghi co od truyen vao
				$this->model->execute("update tbl_account set acc_password='$c_password',role_id = '$role_id' where acc_code = '$acc_code' ");
			}
			header("location:admin.php?controller=user");	
			break;

			case 'add':
			$form_action="admin.php?controller=add_edit_user&act=do_add";
			$arr = $this->model->fetch("select * from tbl_role");
			break;

			case 'do_add':
			
			$c_fullname = $_POST["c_fullname"];
			$user_birthday = $_POST["user_birthday"];
			$user_gender = $_POST["user_gender"];
			$user_phone = $_POST["user_phone"];
			$user_email = $_POST["user_email"];
			$user_address = $_POST["user_address"];
			$user_work = $_POST["user_work"];
			$user_company = $_POST["user_company"];

			$acc_code = $_POST["acc_code"];
			$acc_username = $_POST["acc_username"];
			$acc_password = $_POST["acc_password"];
			$acc_password = md5($acc_password);
			$role_name = $_POST["role_name"];
			$role_id = id_rode($role_name);
				//insert ban ghi
			// insert tbl_user
			$this->model->execute(" insert into tbl_user(user_fullname,user_birthday,user_gender,user_phone,user_email,user_address,user_work,user_company,acc_code) values ('$c_fullname','$user_birthday','$user_gender','$user_phone','$user_email','$user_address','$user_work','$user_company','$acc_code')");
			//insert tbl_account
			$this->model->execute(" INSERT INTO tbl_account(acc_code,acc_username,acc_password,role_id) VALUES ('$acc_code','$acc_username','$acc_password','$role_id')");


			header("location:admin.php?controller=user");
			break;
			case 'delete':
			$acc_code = isset($_GET["acc_code"])? $_GET["acc_code"] : 0;
				$form_action = "admin.php?controller=add_edit_user&act=do_delete&acc_code=$acc_code";
				break;
			case 'do_delete':
			$acc_code = isset($_GET["acc_code"])? $_GET["acc_code"] : 0;
			$this->model->execute("delete from tbl_account where acc_code='$acc_code'");
			$this->model->execute("delete from tbl_user where acc_code='$acc_code'");
			header("location:admin.php?controller=user");
			break;	
		}
			//-----------------
			//load view
		include "view/backend/view_add_edit_user.php";
	}
} 
new controller_add_edit_user();
?>