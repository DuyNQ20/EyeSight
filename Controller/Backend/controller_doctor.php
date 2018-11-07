<?php 
class controller_doctor extends controller
{


    public function __construct()
    {
        parent::__construct();
        $url = isset($_GET["url"]) ? $_GET["url"] : "";
        $schools = $this->model->fetch("SELECT * FROM tbl_school");
        $school_id = isset($_GET["school_id"]) ? $_GET["school_id"] : "";
        include 'view/backend/view_layout_doctor.php';


    }
}
new controller_doctor();



?>