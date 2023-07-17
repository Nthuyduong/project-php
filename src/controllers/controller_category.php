<?php
require_once("../models/model_category.php");

$ann_title = "";
$ann_content = "";

//kiem tra xem form da duoc submit/nhap thong tin hay chua
if (isset($_REQUEST["b1"]) == false) {
    $ann_title = "CAN'T ADD NEW CATEGORY!";
    $ann_content = "You need to enter category's information before click add new category";
    require_once("../views/includes/announce.php");
    die();
}
$name = $_REQUEST["catename"];
$desc = $_REQUEST["desc"];
$subct = null;

$cate = new model_category();

$ketqua = $cate->AddCategory($name, $desc, $sub);
if ($ketqua == FALSE) {
    $ann_title = "FAIL TO ADD NEW CATEGORY";
    $ann_content = "Please check the information again";
    include_once("../views/includes/announce.php");
}
else
{
    $ann_title = "ADD NEW SUB-CATEGORY SUCCESS!";
    $ann_content = "A new category is created!";
    include_once("../views/includes/announce.php");
}
