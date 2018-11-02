<?php
	class controller_add_adit_eyesight extends controller
	{
		public function __construct()
		{
			parent::__construct();
			$act = isset($_GET["act"])?$_GET["act"] : "";
			switch ($act) 
			{
				case 'add':
					$arr_academic = $this->model->fetch("SELECT * FROM tbl_academicyear WHERE school_id = '120'");
					$arr_class = $this->model->fetch("select * from tbl_class where school_id = '120'");
					/*danh sách học sinh lớp 5a của trường tiều học Ba Đình*/
					$arr_stu = $this->model->fetch("SELECT * FROM tbl_student WHERE class_id = '1'");
					break;
				default:
					# code...
					break;
			}
			include "view/backend/view_add_edit_eyesight.php";
		}
	}
	new controller_add_adit_eyesight(); 
 ?>