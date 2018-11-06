<?php

class controller_add_edit_class extends controller{
	public function __construct()
	{
		parent::__construct();
			//-----------------

		
		$act = isset($_GET["act"]) ? $_GET["act"] : "";
		$test = "";
		switch ($act) 
		{
			case 'edit':
			$class_id = isset($_GET["class_id"])? $_GET["class_id"] : 0;
			$form_action = "admin.php?controller=add_edit_class&act=do_edit&class_id=$class_id";
			//lay ban ghi co id truyen vao 
			$arr = $this->model->fetch_one("SELECT * FROM tbl_class INNER JOIN tbl_academicyear on tbl_class.academicYear_id = tbl_academicyear.academicYear_id WHERE tbl_class.class_id ='$class_id' ");
			break;

			case 'do_edit':
			$class_id = isset($_GET["class_id"])? $_GET["class_id"] : 0;
			$arr = $this->model->fetch_one("SELECT * FROM tbl_class INNER JOIN tbl_academicyear on tbl_class.academicYear_id = tbl_academicyear.academicYear_id WHERE tbl_class.class_id ='$class_id' ");
			$academicYear_id = $arr->academicYear_id;
			$class_name = $_POST["class_name"];
			$class_teacher = $_POST["class_teacher"];
			$class_year = $_POST["class_year"];
			$class_stunumber = $_POST["class_stunumber"];
			$class_createdate = $_POST["class_createdate"];		
			//update ban ghi co id truyen vao
			$test = $this->model->execute("UPDATE tbl_class SET class_name='$class_name' ,class_teacher='$class_teacher' ,class_year='$class_year' ,academicYear_id='$academicYear_id',class_stunumber='$class_stunumber',school_id='120' ,class_createdate='$class_createdate' where class_id='$class_id'");
			if ($test == true) 
			{
				header("location:admin.php?controller=class&action=success_edit");
			}
			else if ($test == false) 
			{
				header("location:admin.php?controller=class&action=fail_edit");
			}

			break;

			case 'add':
			$form_action="admin.php?controller=add_edit_class&act=do_add";
			/*danh sách các khóa của trường tiểu học Ba Đình*/
			$arr2 = $this->model->fetch("select * from tbl_academicyear where school_id='120'");
			break;

			case 'do_add':
			$academicYear_id = $_POST["academicYear_id"];
			$size=sizeof($_POST);
			$number_rows = $size/5;

			for ($i=1; $i <= $number_rows; $i++) 
			{ 
				$class_name[$i] = $_POST["class_name_$i"];
				$class_teacher[$i] = $_POST["class_teacher_$i"];
				$class_year[$i] = $_POST["class_year_$i"];
				$class_stunumber[$i] = $_POST["class_stunumber_$i"];
				$class_createdate[$i] = $_POST["class_createdate_$i"];		
			}

			for ($i=1; $i <= $number_rows; $i++) 
			{ 
				$sql[$i] = " insert into tbl_class(class_name ,class_teacher ,class_year ,academicYear_id,class_stunumber,school_id ,class_createdate ) values ('$class_name[$i]', '$class_teacher[$i]', '$class_year[$i]', $academicYear_id,$class_stunumber[$i],120, '$class_createdate[$i]')";
				$test = $this->model->execute($sql[$i]);
			}
			if ($test == true) {
				header("location:admin.php?controller=class&action=sucess_add");
			}
			else if ($test == false) {
				header("location:admin.php?controller=class&action=fail_add");
			}
			break;
		}
			//-----------------
			//load view
		include "view/backend/view_add_edit_class.php";
	}
}
new controller_add_edit_class();
?>