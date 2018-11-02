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
		/*danh sách độ cận của học sinh lớp 5A Niên Khóa có id = 3(K10) của trường Tiểu Học Ba Đình*/	
		$arr = $this->model->fetch("SELECT * FROM tbl_student INNER JOIN tbl_eyesight ON tbl_student.stu_id = tbl_eyesight.stu_id INNER JOIN tbl_class ON tbl_class.class_id = tbl_eyesight.class_id WHERE tbl_class.school_id = '120' AND tbl_class.class_name = '5a' AND tbl_class.academicYear_id = '3'");
		/*danh sách các lớp của trường tiểu học Ba Đình*/
		$arr2 = $this->model->fetch("select * from tbl_class where school_id = '120'");
		/* danh sách các niên khóa của trường tiểu học Ba Đình */
		$arr3 = $this->model->fetch("SELECT * FROM tbl_academicyear WHERE school_id = '120'");
			//---load view
		
		include "view/backend/view_eyesight.php";
	}
} 
new controller_eyesight();

?>