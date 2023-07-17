<?php
session_start();
require_once("../models/model_subcate.php");

$ann_title = "";
$ann_content = "";

//kiem tra xem form da duoc submit/nhap thong tin hay chua
if (isset($_REQUEST["b1"]) == false) {
    $ann_title = "CAN'T ADD NEW SUB-CATEGORY!";
    $ann_content = "You need to enter sub-category information before add new sub-category";
    require_once("../views/includes/announce.php");
    die();
}
$subname = $_REQUEST["subname"];
$category = $_POST["ctg"];
$desc = $_REQUEST["desc"];

$sub = new model_subcate();

$ketqua = $sub->AddSubcategory($subname, $category, $desc);
if ($ketqua == FALSE) {
    $_SESSION["add_cate"] = "";
    $ann_title = "ADD NEW SUB-CATEGORY ERROR!";
    $ann_content = "Please check the information again";
    include_once("../views/includes/announce.php");
} else
{
    $_SESSION["add_cate"] = "OK";
    $ann_title = "ADD NEW SUB-CATEGORY SUCCESS!";
    $ann_content = "A new sub-category is created!";
    include_once ("../views/includes/announce.php");
}
