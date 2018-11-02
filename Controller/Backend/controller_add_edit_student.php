<?php

class controller_add_edit_student extends controller{
	public function __construct()
	{
		parent::__construct();
			//-----------------

		
		$act = isset($_GET["act"]) ? $_GET["act"] : "";
		$test = "";
		switch ($act) 
		{
			case 'edit':
			$stu_id = isset($_GET["stu_id"])? $_GET["stu_id"] : 0;
			$form_action = "admin.php?controller=add_edit_student&act=do_edit&stu_id=$stu_id";
			//lay ban ghi co id truyen vao 
			$arr = $this->model->fetch_one("SELECT * FROM tbl_student INNER JOIN tbl_class ON tbl_student.class_id=tbl_class.class_id INNER JOIN tbl_academicyear ON tbl_class.academicYear_id=tbl_academicyear.academicYear_id  WHERE tbl_student.stu_id = '$stu_id' ");
			break;

			case 'do_edit':
			$stu_id = isset($_GET["stu_id"])? $_GET["stu_id"] : 0;
			$stu_birthday = $_POST["stu_birthday"];
			$stu_birthplace = $_POST["stu_birthplace"];
			$stu_address = $_POST["stu_address"];
			$stu_fathername = $_POST["stu_fathername"];
			$stu_fatherphone = $_POST["stu_fatherphone"];
			$stu_mothername = $_POST["stu_mothername"];
			$stu_motherphone = $_POST["stu_motherphone"];
			$class_id = $_POST["class_name"];
			//update ban ghi co id truyen vao
			$test = $this->model->execute("UPDATE tbl_student SET stu_birthday = '$stu_birthday',stu_birthplace = '$stu_birthplace',stu_address='$stu_address',stu_fathername = '$stu_fathername',stu_fatherphone = '$stu_fatherphone', stu_mothername  = '$stu_mothername',stu_motherphone = '$stu_motherphone',class_id = '$class_id'
				WHERE tbl_student.stu_id = '$stu_id'");
			if ($test == true) {
				header("location:admin.php?controller=student&action=success_edit");
			}
			else if ($test == false) {
				header("location:admin.php?controller=student&action=fail_edit");
			}
				
			break;

			case 'add':
			$form_action="admin.php?controller=add_edit_student&act=do_add";
			/*danh sách các khóa của trường tiểu học Ba Đình*/
			$arr2 = $this->model->fetch("select * from tbl_academicyear where school_id='120'");
			break;

			case 'do_add':
			$class_id = $_POST["class_name"];
			$size=sizeof($_POST);
			$number_rows = $size/11;
			for ($i=1; $i <= $number_rows; $i++) { 
				$stu_code[$i] = $_POST["stu_code_$i"];
				$stu_name[$i] = $_POST["stu_name_$i"];
				$stu_gender[$i] = $_POST["stu_gender_$i"];
				$stu_birthday[$i] = $_POST["stu_birthday_$i"];
				$stu_birthplace[$i] = $_POST["stu_birthplace_$i"];
				$stu_address[$i] = $_POST["stu_address_$i"];
				$stu_fathername[$i] = $_POST["stu_fathername_$i"];
				$stu_fatherphone[$i] =  $_POST["stu_fatherphone_$i"];
				$stu_mothername[$i] = $_POST["stu_mothername_$i"];
				$stu_motherphone[$i] = $_POST["stu_motherphone_$i"];
				$stu_createdate[$i] =  $_POST["stu_createdate_$i"];		
			}

			for ($i=1; $i <= $number_rows; $i++) 
			{ 
				$sql[$i] = " insert into tbl_student(stu_code ,stu_name ,stu_gender ,stu_birthday ,stu_birthplace ,stu_address ,class_id ,stu_fathername ,stu_fatherphone ,stu_mothername ,stu_motherphone ,stu_createdate ) values (	'$stu_code[$i]', '$stu_name[$i]', '$stu_gender[$i]', '$stu_birthday[$i]',	'$stu_birthplace[$i]', '$stu_address[$i]','$class_id', '$stu_fathername[$i]', '$stu_fatherphone[$i]', '$stu_mothername[$i]', '$stu_motherphone[$i]', '$stu_createdate[$i]' )";
				$test =  $this->model->execute($sql[$i]);
			}
			if ($test == true) {
				header("location:admin.php?controller=student&action=success_add");
			}
			else if ($test == false) {
				header("location:admin.php?controller=student&action=fail_add");
			}
			break;
		}
			//-----------------
			//load view
		include "view/backend/view_add_edit_student.php";
	}
}
new controller_add_edit_student();
?>