<?php 
class controller_doctor extends controller
{
	function __construct()
	{
		parent::__construct();
		$schools = $this->model->fetch("SELECT * FROM tbl_school");
		include 'view/backend/doctor.php';
	}
}
new controller_doctor();



?>