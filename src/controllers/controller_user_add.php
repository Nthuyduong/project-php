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
$pass=md5($_REQUEST["txtpass"]);
$repass=md5($_REQUEST["txt_repass"]);

$_SESSION["sign_up_user_name_err"]=$name;
$_SESSION["sign_up_user_address_err"]=$address;
$_SESSION["sign_up_user_phone_err"]=$phone;
$_SESSION["sign_up_user_email_err"]=$email;

$user=new model_user();
$user2=new model_user();
$checkEmail= $user ->CheckUserAccountByEmail($email);
$checkPhone=$user2->CheckUserAccountByPhone($phone);

if($checkEmail==false || $checkPhone==false){
    $alert_title="NotificationL";
    $alert = "ERROR CONNECT DATABASE";
}else{
    $rowcheckMail=$user->data;
    $rowcheckPhone=$user2->data;
    if($rowcheckMail==null && $rowcheckPhone==null && $pass==$repass){
        
        $ketqua =$user->AddUserAccount($name,$address,$phone,$email,$pass);
        if($ketqua==true){
            $alert_title="Notification";
            $alert = "Successfully registere. Please log-in again";
            $link_tieptuc="../views/index/home.php";
            
        }else{
            $alert_title="Notification";
            $alert = "ERROR CONNECT DATABASE";
            $link_tieptuc="../views/index/home.php";
        }    
        
    }else{
        if($rowcheckMail!=null){
            $_SESSION["sign_up_user_email_fail"]="This email already exists. Please sign up for a new email";
        }
        if($rowcheckPhone!=null){
            $_SESSION["sign_up_user_phone_fail"]="This phone number already exists. Please register a new phone number";
        }
        if($pass!=$repass){
            $_SESSION["sign_up_user_repass_fail"]="The password and confirm password do not match!";
        }
            
        $alert_title="Notification";
        $alert = "Error registere. Please sign-in again!";
        $link_tieptuc="../views/index/home.php";
        
    }
}
require_once("../views/includes/alert.php");
?>