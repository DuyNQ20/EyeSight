<?php 
	class controller_user extends controller
	{
		public function __construct()
		{
			parent::__construct();
			//------------
			$record_perpage = 4;
			$total = $this->model->num_rows("select * from  tbl_account");
			$num_page = ceil($total/$record_perpage);
			$page = isset($_GET["p"])&&$_GET["p"] > 1 ?($_GET["p"]-1):0;
			$from = $page * $record_perpage;
			$arr = $this->model->fetch(" SELECT acc_id,tbl_account.acc_code,acc_username,tbl_account.role_id,role_name,user_fullname,user_phone,user_email FROM tbl_user INNER JOIN tbl_account 
				ON tbl_user.acc_code=tbl_account.acc_code INNER JOIN tbl_role 
				ON tbl_account.role_id=tbl_role.role_id	
				WHERE tbl_user.acc_code=tbl_account.acc_code 
				AND tbl_account.role_id=tbl_role.role_id");
			
			//---load view
			include "view/backend/view_user.php";
		}
		
	}
	new controller_user();
 ?>