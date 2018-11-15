<?php
class controller_add_adit_eyesight extends controller
{
	public function __construct()
	{
		parent::__construct();
		$act = isset($_GET["act"])?$_GET["act"] : "";
		$arr_stu2 = array();
		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			$academicYear_id = isset($_POST["academic"]) ? $_POST["academic"] : 0;
			$class_id = isset($_POST["class_name"]) ? $_POST["class_name"] : 0;
			$sql = $this->model->fetch("SELECT * FROM tbl_eyesight where class_id = '$class_id' ");
			$number_rows = $this->model->num_rows("SELECT * FROM tbl_eyesight where class_id = '$class_id' ");
			$num_rows_stu = $this->model->num_rows("select * from tbl_student where class_id = '$class_id' ");
			$arr_stu1 = $this->model->fetch("SELECT * FROM tbl_student INNER JOIN tbl_eyesight ON tbl_student.stu_id = tbl_eyesight.stu_id INNER JOIN tbl_class ON tbl_class.class_id = tbl_eyesight.class_id  INNER JOIN tbl_academicyear on tbl_class.academicYear_id=tbl_academicyear.academicYear_id WHERE tbl_class.school_id = '120' AND tbl_class.class_id = '$class_id' AND tbl_class.academicYear_id = '$academicYear_id'");
			$arr_stu2 = $this->model->fetch(" SELECT * FROM tbl_student INNER JOIN tbl_class ON tbl_student.class_id=tbl_class.class_id INNER JOIN tbl_academicyear ON tbl_class.academicYear_id= tbl_academicyear.academicYear_id WHERE tbl_student.class_id = '$class_id' ");

		}
		else
		{
			$arr_stu1 = $this->model->fetch("SELECT * FROM tbl_student INNER JOIN tbl_eyesight ON tbl_student.stu_id = tbl_eyesight.stu_id INNER JOIN tbl_class ON tbl_class.class_id = tbl_eyesight.class_id  INNER JOIN tbl_academicyear on tbl_class.academicYear_id=tbl_academicyear.academicYear_id WHERE tbl_class.school_id = '120'");
		}
		switch ($act) 
		{
			case 'add':
			$arr_academic = $this->model->fetch("SELECT * FROM tbl_academicyear WHERE school_id = '120'");
			$arr_class = $this->model->fetch("select * from tbl_class where school_id = '120'");
			/*danh sách học sinh lớp 5a của trường tiều học Ba Đình*/
			$form_action="admin.php?controller=add_edit_eyesight&act=do_add";
			break;

			case 'do_add':
			$class_id = $_POST["class_name"];
			$size=sizeof($_POST);
			$number_rows = $size/11;
			for ($i=1; $i <= $number_rows; $i++)
			{ 
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