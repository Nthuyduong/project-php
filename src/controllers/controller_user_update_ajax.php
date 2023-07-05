<?php
session_start();
require_once("../models/model_user.php");
$email = $_POST["email"];
$username = $_POST["username"];
$userphone = $_POST["userphone"];
$useraddress = $_POST["useraddress"];
$user=new model_user();
$ketqua=$user->UpdateUserAccount($username,$userphone,$useraddress,$email);
if($ketqua==false){
    echo "FAIL";
}else{
    echo "success";
    
    $_SESSION["user_name"]=$username;
    $_SESSION["user_phone"]=$userphone;
    $_SESSION["user_address"]=$useraddress;
}
?>