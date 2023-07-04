<?php
session_start();
require_once("../models/model_login.php");
require_once("../models/model_user.php");

if(isset($_REQUEST["b1"])==false)
{   
    $alert_title="Ban chua dang nhap";
    $alert = "Moi dang nhap lai";
    $link_tieptuc="../views/includes/login.php";
    require_once("../views/includes/alert.php");
    die();
} 
$user = $_REQUEST["temail"];
$pass = $_REQUEST["tpass"];
$passmd5 = md5($pass);
$login = new model_login();
$customer= new model_user();
//kiem tra tai khoan xem da login hay chua? Ham kiem tra?
$ketqua = $login->CheckLoginUser($user,$passmd5);
$checkMail=$customer->CheckUserAccountByEmail($user);
if($ketqua == false || $checkMail==false)
{   
    $alert_title="Loi truy van CSDL";
    $alert = "Loi truy van CSDL";
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
            // if(isset($_SESSION["user_email_fail"]))
            //     unset($_SESSION["user_email_fail"]);
            // if(isset($_SESSION["user_pass_fail"]))
            //     unset($_SESSION["user_pass_fail"]);    
        }
        else
        {   
            $_SESSION["logined_fail"] = "Tên tài khoản của bạn đã bị khoá, vui lòng liên hệ 1900**** để được hỗ trợ";
            $_SESSION["user_email_fail"]=$user;
            $_SESSION["user_pass_fail"]=$pass;
        }
    }
    else
    {   
        if($rowcheckMail== null)
        {
            $_SESSION["logined_fail"] = "Tài khoản này chưa được đăng ký, vui lòng thử lại";
            $_SESSION["user_email_fail"]=$user;
            $_SESSION["user_pass_fail"]=$pass;
        }else
        {
            $_SESSION["logined_fail"] = "Tên tài khoản của bạn hoặc Mật khẩu không đúng, vui lòng thử lại";
            $_SESSION["user_email_fail"]=$user;
            $_SESSION["user_pass_fail"]=$pass;
        }
        
             
    }
}    
header("location:../views/index/home.php");
?>