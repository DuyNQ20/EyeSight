
<?php

include_once '../config.php';
include_once '../application/model.php';
include_once '../application/controller.php';
header('Content-Type: application/json');
class data extends controller
{

	function __construct()
	{
		parent::__construct();
		if(isset($_POST['student_code']))
		{
			$student_code = isset($_POST['student_code'])?$_POST['student_code']:"";
			$school_id = isset($_POST['school_id'])?$_POST['school_id']:"";
			$data = $this->model->fetch("SELECT * FROM tbl_eyesight JOIN tbl_student ON tbl_eyesight.stu_id=tbl_student.stu_id JOIN tbl_class ON tbl_student.class_id=tbl_class.class_id WHERE tbl_student.stu_code=$student_code AND tbl_class.school_id=$school_id ORDER BY eyesight_date");
			echo json_encode($data);
		}
		else if(isset($_POST['schoolID'])) // Get dữ liệu 
		{

			// $data = $this->model->fetch("SELECT * FROM tbl_class JOIN tbl_eyesight ON tbl_class.class_id=tbl_eyesight.class_id JOIN tbl_student on tbl_student.class_id=tbl_eyesight.class_id WHERE tbl_class.school_id='121'");
			$schoolID = $_POST['schoolID'];
			$data = $this->model->fetch("SELECT * FROM tbl_class INNER JOIN tbl_eyesight ON tbl_class.class_id=tbl_eyesight.class_id WHERE tbl_class.class_id = 1");
			echo json_encode($data);
		}
		else if(isset($_POST['check'])) // Get dữ liệu độ cận của 1 lớp học
		{
			$eyesight = $_POST['check'];
			$data = $this->model->fetch("SELECT * FROM tbl_class INNER JOIN tbl_eyesight ON tbl_class.class_id=tbl_eyesight.class_id WHERE tbl_class.class_id = 1 AND tbl_eyesight.eyesight_diopter=$eyesight");
			echo json_encode($data);
		}
		else if(isset($_POST['id_academic'])&&isset($_POST['id_school']))
		{
			$school_id = $_POST['id_school'];
			$id_academic = $_POST['id_academic'];
			$string = '';
			$data = $this->model->fetch("SELECT *FROM tbl_academicYear JOIN tbl_class ON tbl_academicyear.school_id = tbl_class.school_id WHERE tbl_class.school_id=$school_id AND tbl_academicyear.academicYear_id=$id_academic");
			foreach ($data as $row) {
				$giatri = "$row->class_name";
				$string = $string."<option>$giatri</option>";
			}
			echo json_encode($string);
		}
		else if(isset($_POST['id_school'])) // Get dữ liệu khối của mỗi trường học
		{

			$school_id = $_POST['id_school'];
			$string = '';
			$data = $this->model->fetch("SELECT *FROM tbl_academicYear WHERE school_id=$school_id");
			foreach ($data as $row) {
				$giatri = "$row->academicYear_name ($row->academicYear_begin - $row->academicYear_end)";
				$string = $string."<option value='$row->academicYear_id'>$giatri</option>";
			}
			echo json_encode($string);

			
		}

			// //$data = $this->model->fetch("SELECT * FROM tbl_class WHERE school_id='120'");
			// $chuoi = "hh";
			// // foreach ($data as $row) {
			// // 	$chuoi += "<option>".$row->class_name."</option>";
			// // }
			// echo $chuoi;
		


		

	}
}

new data();

?>