
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
		if(isset($_POST['abc']))
		{
			$id = $_POST['abc'];
			$data = array();
			$data = $this->model->fetch("SELECT * FROM tbl_eyesight JOIN tbl_student ON tbl_eyesight.stu_id=tbl_student.stu_id WHERE tbl_student.stu_code=$id  ORDER BY eyesight_date");
			echo json_encode($data);
		}
		

	}
}

new data();

?>