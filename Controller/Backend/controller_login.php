<?php
//class controller_login ke thua class controller de co the tac dong vao cac ham cua class model
class controller_login extends controller
{
    public function __construct()
    {
        //goi ham __construct cua class controller de khoi tao bien $model la object cua class model, de tu bien $model nay co the goi cac ham trong class model
        parent::__construct();

        //-----------
        if ($_SERVER["REQUEST_METHOD"] == "POST") {echo "<script>alert('OK')</script>";
            $acc_username = $_POST["acc_username"];
            $c_password = $_POST["acc_password"];
            //lay ban ghi co email truyen vao
            $arr = $this->model->fetch_one("select acc_username, acc_password from tbl_account where acc_username='$acc_username'");
            //kiem tra xem password cua ban ghi vua lay ra co trung voi password nhap vao khong
            if (isset($arr->acc_username)) {
                // $c_password = md5($c_password);
                if ($arr->acc_password == $c_password) {
                    //dang nhap thanh cong
                    $_SESSION["acc_username"] = $acc_username;
                    header("location:admin.php");
                } else {
                    //dang nhap khong thanh khong
                    header("location:admin.php?action=invalid");
                }
            } else {
                //dang nhap khong thanh cong
                header("location:admin.php?action=invalidx");
            }
        }
        //-----------
        //load view
        include "view/backend/view_login.php";
    }
}
new controller_login();
