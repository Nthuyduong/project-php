<?php
session_start();
require_once("../models/model_login.php");
require_once("../models/model_user.php");

if(isset($_REQUEST["b1"])==false)
{   
    $alert_title="Notification";
    $alert = "You have not submitted the login form! Please try again";
    $link_tieptuc="../views/includes/login.php";
    require_once("../views/includes/alert.php");
    die();
} 
$user = $_REQUEST["temail"];
$pass = md5($_REQUEST["tpass"]);
$login = new model_login();
$customer= new model_user();
//kiem tra tai khoan xem da login hay chua? Ham kiem tra?
$ketqua = $login->CheckLoginUser($user,$pass);
$checkMail=$customer->CheckUserAccountByEmail($user);
if($ketqua == false || $checkMail==false)
{   
    $alert_title="Notification";
    $alert = "ERROR CONNECT DATABASE";
    include_once("../views/includes/alert.php");
}
else{
    $row = $login->data;
    $rowcheckMail= $customer->data;
    //Dang nhap thanh cong
    if($row != null)
    {
        if($row["Active_status"]==1)
        {
            $_SESSION["logined_user"] = "OK";
            $_SESSION["user_id"]=$row["ID"];
            $_SESSION["user_email"] = $row["Email"];
            $_SESSION["user_name"]=$row["Name"];
            $_SESSION["user_address"]=$row["Address"];
            $_SESSION["user_phone"]=$row["Phone"];
            

            $_SESSION["logined_fail"] = "";   
            $alert_title="Notification";
            $alert = "Login successfully, welcome to AGURI!";
            $link_tieptuc="../views/index/home.php";
        }
        else
        {   
            $alert_title="Notification";
            $alert = "Your account has been locked";
            $link_tieptuc="../views/index/home.php";
        }
    }
    else
    {   
        if($rowcheckMail== null)
        {
            $alert_title="Notification";
            $alert = "This account wasn't registered, please try again";
            $link_tieptuc="../views/index/home.php";
        }else
        {
            $alert_title="Notification";
            $alert = "Username or Password is incorrect, please try again";
            $link_tieptuc="../views/index/home.php";
        }
        
             
    }
}    
require_once("../views/includes/alert.php")
?>