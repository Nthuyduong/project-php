<?php
session_start();
require_once("../models/model_login.php");

if(isset($_REQUEST["b1"])==false)
{   
    $alert_title="Notification";
    $alert = "You have not submitted the login form! Please try again";
    $link_tieptuc="../views/index/admin_login.php";
    require_once("../views/includes/alert.php");
    die();
} 
$user = $_REQUEST["admail"];
$pass = $_REQUEST["adpass"];
$pass = md5($pass);
$login = new model_login();
//kiem tra tai khoan xem da login hay chua? Ham kiem tra?
$ketqua = $login->CheckLoginAdmin($user,$pass);
if($ketqua == false)
{   
    $alert_title="Notification";
    $alert = "ERROR CONNECT DATABASE";
}
else{
    $row = $login->data;
    //Dang nhap thanh cong
    if($row != null)
    {
        if($row["Active_status"]==1)
        {
            $_SESSION["logined_admin"] = "OK";
            $alert_title="Notification";
            $alert = "Login successfully, welcome to admin dashboard!";
            $link_tieptuc="../views/index/admin_dashboard.php";
        }
        else
        {   
            $alert_title="Notification";
            $alert = "Your account has been locked";
            $link_tieptuc="../views/index/admin_login.php";
        }
    }
    else
    {
        $alert_title = "Notification";
        $alert = "Username or Password is incorrect, please try again";
        $link_tieptuc="../views/index/admin_login.php";
    }
}    
require_once("../views/includes/alert.php")

?>