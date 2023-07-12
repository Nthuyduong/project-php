<?php
session_start();
require("../models/model_user.php");
if(isset($_REQUEST["b3"])==false){
    die("error");
}else{
    $newpass=md5($_REQUEST["newpass"]);
    $repass=md5($_REQUEST["repass"]);
    $email=$_SESSION["userMail_forgotmail"];

    $user=new model_user();

    if($repass != $newpass){
        $alert_title= "Notification";
        $alert="New password and confirm password do not match!";
        $link_tieptuc="../views/index/reset_password.php";

    }else{
        $ketqua=$user->UpdatePassUser($newpass,$email);
        if($ketqua==false){
            echo "ERROR CHANGE PASSWORD";
        }else{
            $alert_title= "Notification";
            $alert="Password changed successfully, please login again";
            $_SESSION["logined_fail"] = "Please login again";
            $_SESSION["user_email_fail"]=$email;
            $link_tieptuc="../views/index/home.php";
        }
    }
    require("../views/includes/alert.php");
}
?>