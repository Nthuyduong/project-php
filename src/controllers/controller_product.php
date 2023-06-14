<?php
require_once("models/model_database.php");
//tao bien chua noi dung tong bao
$alert = "";
//tao bien chuwa tieu de thong bao
$alert_title = "Tieu de thong bao";
$act = isset($_REQUEST["act"])?$_REQUEST["act"]:"";
if($act == "them")
{
    //hien thi form them san pham
    require("views/");
}
else if($act = "sua")
{
}

?>