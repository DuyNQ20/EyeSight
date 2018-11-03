<?php
class controller_academic extends controller {
	function __construct()
	{
		parent::__construct();
		
		$act = isset($_GET["act"])?$_GET["act"]:"";
		$class_id = isset($_GET["class_id"]) ? $_GET["class_id"]:0;
		if ($act == 'delete') 
		{
			$test = $this->model->execute("delete from tbl_class where class_id = '$class_id'");
			if ($test == true) 
			{
				header("location:admin.php?controller=academic&action=success");
			}
			else if ($test == false) 
			{
				header("location:admin.php?controller=academic&action=not_success");
			}
		}
		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			$academicYear_id = $_POST["academic"];
			$arr_class = $this->model->fetch(" SELECT  * FROM tbl_class INNER JOIN tbl_academicyear ON tbl_class.academicYear_id = tbl_academicyear.academicYear_id WHERE tbl_class.school_id=120 AND tbl_class.academicYear_id = '$academicYear_id' ");
		}
		else{

			$arr_class = $this->model->fetch(" SELECT  * FROM tbl_class INNER JOIN tbl_academicyear ON tbl_class.academicYear_id=tbl_academicyear.academicYear_id WHERE tbl_class.school_id= '120' ");
		}
		$arr_academic = $this->model->fetch(" select * from tbl_academicyear where school_id='120' ");
		
		include "view/backend/view_class.php";
	}
}

new controller_academic(); 
?>