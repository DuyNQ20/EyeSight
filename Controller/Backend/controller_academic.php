<?php
class controller_academic extends controller {
	function __construct()
	{
		parent::__construct();
		
		$act = isset($_GET["act"])?$_GET["act"]:"";
		$academicYear_id = isset($_GET["academicYear_id"]) ? $_GET["academicYear_id"]:0;
		if ($act == 'delete') {
			$test = $this->model->execute("delete from tbl_academicyear where academicYear_id = '$academicYear_id'");
			if ($test == true) {
				header("location:admin.php?controller=academic&action=success");
			}
			else if ($test == false) {
				header("location:admin.php?controller=academic&action=not_success");
			}
		}

		$arr_academic = $this->model->fetch("select * from tbl_academicyear where tbl_academicyear.school_id = '120'");
		include "view/backend/view_academic.php";
	}
}

new controller_academic(); 
?>