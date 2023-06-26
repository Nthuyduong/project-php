<?php
session_start();
require_once("../models/model_user.php");
if(isset($_REQUEST["b1"])==false)
{   
    $alert_title="Bạn chưa đăng ký thành công";
    $alert = "Vui lòng đăng ký lại";
    $link_tieptuc="../views/includes/sign-up.php";
    require_once("../views/includes/alert.php");
    die();
} 
?>