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
			$test =  $this->model->execute($sql);
			if ($test == true) {
				header("location:admin.php?controller=academic&action=sucess_add");
			} else if ($test == false) {
				header("location:admin.php?controller=academic&action=fail_add");
			}

			break;
			case 'edit':
			$academicYear_id = isset($_GET["academicYear_id"])? $_GET["academicYear_id"] : 0;
			$form_action = "admin.php?controller=add_edit_academic&act=do_edit&academicYear_id=$academicYear_id";
			//lay ban ghi co id truyen vao 
			$arr = $this->model->fetch_one("SELECT * FROM tbl_academicyear WHERE tbl_academicyear.academicYear_id = '$academicYear_id' ");
			break;

			case 'do_edit':
			$academicYear_id = isset($_GET["academicYear_id"])? $_GET["academicYear_id"] : 0;

			$academicYear_name = $_POST["academicYear_name"];
			$academicYear_begin = $_POST["academicYear_begin"];
			$academicYear_end = $_POST["academicYear_end"];
			$academicYear_classnumber = $_POST["academicYear_classnumber"];								 
			$acadamicYear_createdate = $_POST["acadamicYear_createdate"];

			//update ban ghi co id truyen vao
			$test = $this->model->execute("UPDATE tbl_academicyear SET academicYear_name = '$academicYear_name', academicYear_begin = '$academicYear_begin', academicYear_end = '$academicYear_end',academicYear_classnumber = $academicYear_classnumber,school_id = '120', acadamicYear_createdate = '$acadamicYear_createdate' WHERE academicYear_id = '$academicYear_id'");
			if ($test == true) {
				header("location:admin.php?controller=academic&action=success_edit");
			}
			else if ($test == false) {
				header("location:admin.php?controller=academic&action=fail_edit");
			}

			break;
		}
		include "view/backend/view_add_edit_academic.php";
	}
} 
new controller_add_edit_academic();
?>