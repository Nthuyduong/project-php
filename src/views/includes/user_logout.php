<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Đăng Xuất</title>
</head>
<body>
<?php
session_start();
unset($_SESSION["logined_user"]);
unset($_SESSION["user_email"]);
unset($_SESSION["logined_user"]);
unset($_SESSION["user_email"]);
unset($_SESSION["user_id"]);
unset($_SESSION["user_name"]);
unset($_SESSION["user_address"]);
unset($_SESSION["user_phone"]);

//session_destroy();//hủy toàn bộ SESSION

$alert_title="Notification";
$alert = "Log-out succes.Back to Home";
$link_tieptuc="../index/home.php";
require_once("../includes/alert.php");
?>
</body>
</html>