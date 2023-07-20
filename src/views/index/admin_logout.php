<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Đăng Xuất</title>
</head>
<body>
<?php
session_start();
//unset($_SESSION["logined"]);//hủy 1 biến $_SESSION["logined"]
session_destroy();//hủy toàn bộ SESSION

$alert_title="Notification";
$alert = "Log-out succes.Log-in again to come back";
$link_tieptuc="admin_login.php";
require_once("../includes/alert.php");
?>
</body>
</html>