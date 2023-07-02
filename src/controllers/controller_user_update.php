<?php
session_start();
require_once("../models/model_user.php");
if(isset($_REQUEST["b1"])==false)
{   
    $alert_title="Bạn chưa update tài khoàn thành công";
    $alert = "Quay về trang home";
    $link_tieptuc="../views/index/home";
    require_once("../views/includes/alert.php");
    die();
}
