<?php
class controller_add_edit_academic extends controller{
	function __construct()
	{
		parent:: __construct();
		$act = isset($_GET["act"])?$_GET["act"]:"";
		//echo $act;
		switch ($act) 
		{
			case 'add':
			$form_action = "admin.php?controller=add_edit_academic&act=do_add";
			break;

			case 'do_add':
			$academicYear_name = isset($_POST["academicYear_name"])?$_POST["academicYear_name"] : "";
			$academicYear_begin = isset($_POST["academicYear_begin"]) ? $_POST["academicYear_begin"] : "";
			$academicYear_end = isset($_POST["academicYear_end"]) ? $_POST["academicYear_end"] : ""; 
			$academicYear_classnumber = isset($_POST["academicYear_classnumber"]) ? $_POST["academicYear_classnumber"] : 0;
			$acadamicYear_createdate = isset($_POST["acadamicYear_createdate"]) ? $_POST["acadamicYear_createdate"] : "";
			$sql = "INSERT INTO tbl_academicyear(academicYear_name,academicYear_begin,academicYear_end,academicYear_classnumber,school_id,acadamicYear_createdate) VALUES('$academicYear_name','$academicYear_begin','$academicYear_end',$academicYear_classnumber,'120','$acadamicYear_createdate')";
			$a = $this->model->execute($sql);
			header("location:admin.php?controller=academic");
			break;
			case 'delete':
			$academicYear_id = isset($_GET["academicYear_id"]) ? $_GET["academicYear_id"]:0;
			$this->model->execute("delete tbl_academicyear where tbl_academicyear.academicYear_id = '$academicYear_id'");
			// header("location:admin.php?controller=academic");
		}
		include "view/backend/view_add_edit_academic.php";
	}
} 
new controller_add_edit_academic();
?>