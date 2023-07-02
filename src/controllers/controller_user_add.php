<?php
session_start();
require_once("../models/model_user.php");
if(isset($_REQUEST["b2"])==false)
{   
    $alert_title="Bạn chưa đăng ký tài khoàn thành công";
    $alert = "Vui lòng đăng ký lại!";
    $link_tieptuc="../views/includes/sign-up.php";
    require_once("../views/includes/alert.php");
    die();
}
$name=$_REQUEST["txtname"];
$address=$_REQUEST["txtaddress"];
$phone=$_REQUEST["txtphone"];
$email=$_REQUEST["txtemail"];
$pass=$_REQUEST["txtpass"];
$repass=$_REQUEST["txt_repass"];

$_SESSION["sign_up_user_name_err"]=$name;
$_SESSION["sign_up_user_address_err"]=$address;
$_SESSION["sign_up_user_phone_err"]=$phone;
$_SESSION["sign_up_user_email_err"]=$email;
$_SESSION["sign_up_user_pass_err"]=$pass;
$_SESSION["sign_up_user_repass_err"]=$repass;

$user=new model_user();
$user2=new model_user();
$checkEmail= $user ->CheckUserAccountByEmail($email);
$checkPhone=$user2->CheckUserAccountByPhone($phone);

if($checkEmail==false || $checkPhone==false){
    $alert_title="Loi truy van CSDL";
    $alert = "Loi truy van CSDL";
    include_once("../views/includes/alert.php");
}else{
    $rowcheckMail=$user->data;
    $rowcheckPhone=$user2->data;
    //email,phone chua co trong csdl, repass ok
    if($rowcheckMail==null && $rowcheckPhone==null && $pass==$repass){
        
        $ketqua =$user->AddUserAccount($name,$address,$phone,$email,md5($pass));
        if($ketqua==true){
            $alert_title="Bạn đăng ký tài khoàn thành công";
            $alert = "Vui lòng đăng nhập lại";
            $link_tieptuc="../views/index/home.php";
            $_SESSION["logined_fail"]="Vui lòng đăng nhập tài khoản mới tạo";
            $_SESSION["user_email_fail"]=$email;
            $_SESSION["sign_up_user_fail"]="";
            require_once("../views/includes/alert.php");
        }else{
            $alert_title="Bạn Chưa đăng ký tài khoàn thành công";
            $alert = "Vui lòng đăng ký lại";
            $link_tieptuc="../views/includes/login.php";
            $_SESSION["sign_up_user_fail"]="error";

            // if(isset($_SESSION["sign_up_user_name_err"]))
            //     unset($_SESSION["sign_up_user_name_err"]);
            //  if(isset($_SESSION["sign_up_user_address_err"]))
            //     unset($_SESSION["sign_up_user_address_err"]);
            //  if(isset($_SESSION["sign_up_user_phone_err"]))
            //      unset($_SESSION["sign_up_user_phone_err"]);
            // if(isset($_SESSION["sign_up_user_email_err"]))
            //      unset($_SESSION["sign_up_user_email_err"]);
            // if(isset($_SESSION["sign_up_user_pass_err"]))
            //      unset($_SESSION["sign_up_user_pass_err"]);
            // if(isset($_SESSION["sign_up_user_repass_err"]))
            //      unset($_SESSION["sign_up_user_repass_err"]);
            require_once("../views/includes/alert.php");
        }    
        
    }else{
        $_SESSION["sign_up_user_fail"]="error";
        if($rowcheckMail!=null){
            $_SESSION["sign_up_user_email_fail"]="Email này đã tồn tại";
        }
        if($rowcheckPhone!=null){
            $_SESSION["sign_up_user_phone_fail"]="Phone đã được đăng ký";
        }
        if($pass!=$repass){
            $_SESSION["sign_up_user_repass_fail"]="Mật khẩu không khớp";
        }
        header("location:../views/index/home.php");
    }
}
?>