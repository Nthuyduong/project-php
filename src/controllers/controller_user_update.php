<?php
session_start();
require_once("../models/model_user.php");
if(isset($_REQUEST["b1"])==false)
{   
    $alert_title="Bạn chưa update tài khoàn thành công";
    $alert = "Quay về trang home";
    $link_tieptuc="../views/index/home.php";
    require_once("../views/includes/alert.php");
    die();
}
$email=$_SESSION["user_email"];
$name=$_REQUEST["username"];
$phone=$_REQUEST["userphone"];
$address=$_REQUEST["useraddress"];

$user=new model_user();
$ketqua=$user->UpdateUserAccount($name,$phone,$address,$email);
if($ketqua==false){
    $alert_title="Loi truy van CSDL";
    $alert = "Loi truy van CSDL";
}else{
    $alert_title="Update Thành công";
    $alert = "Quay lại trang user account";
    $link_tieptuc="../views/index/user-account.php";
    $_SESSION["user_name"]=$name;
    $_SESSION["user_phone"]=$phone;
    $_SESSION["user_address"]=$address;
}
include_once("../views/includes/alert.php");
?>