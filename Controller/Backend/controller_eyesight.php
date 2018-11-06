<?php
class controller_eyesight extends controller{
	public function __construct()
	{
		parent::__construct();
			//------------
			//quy dinh so ban ghi tren 1 trang
		$record_perpage = 4;
			//tinh tong so ban ghi
		$total = $this->model->num_rows("SELECT * FROM tbl_student INNER JOIN tbl_eyesight ON tbl_student.stu_id = tbl_eyesight.stu_id INNER JOIN tbl_class ON tbl_class.class_id = tbl_eyesight.class_id");
			//tinh so trang
		$num_page = ceil($total/$record_perpage);
			//lay bien p tu url (day la bien xac dinh vi tri trang)
		$page = isset($_GET["p"])&&$_GET["p"] > 1 ?($_GET["p"]-1):0;
			//xac dinh so ban ghi can lay cho tung trang
		$from = $page * $record_perpage;
			//thuc hien lay ban ghi trong csdl co phan trang
		
		/* danh sách các niên khóa của trường tiểu học Ba Đình */
		$arr_school = $this->model->fetch(" select * from tbl_academicyear where school_id='120' ");
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			$academicYear_id = isset($_POST["academic"]) ? $_POST["academic"] : 0;
			$class_id = isset($_POST["class_name"]) ? $_POST["class_name"] : 0;
			$arr = $this->model->fetch("SELECT * FROM tbl_student INNER JOIN tbl_eyesight ON tbl_student.stu_id = tbl_eyesight.stu_id INNER JOIN tbl_class ON tbl_class.class_id = tbl_eyesight.class_id WHERE tbl_class.school_id = '120' AND tbl_class.class_id = '$class_id' AND tbl_class.academicYear_id = '$academicYear_id'");
		}
		else{

			$arr = $this->model->fetch("SELECT * FROM tbl_student INNER JOIN tbl_eyesight ON tbl_student.stu_id = tbl_eyesight.stu_id INNER JOIN tbl_class ON tbl_class.class_id = tbl_eyesight.class_id WHERE tbl_class.school_id = '120'");
		}



			//---load view
		
		include "view/backend/view_eyesight.php";
	}
} 
new controller_eyesight();

?>