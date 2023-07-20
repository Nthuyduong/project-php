<?php
session_start();
require_once("../models/model_product.php");
$ann_title = "";
$ann_content = "";

if(isset($_REQUEST["b1"]) == false)
{
    $ann_title = "CAN'T ADD NEW PRODUCT!";
    $ann_content = "You need to enter sub-category information before add new sub-category";
    require_once("../views/includes/announce.php");
    die();
}
$name = $_REQUEST["prdname"];
$cate = $_REQUEST["ctg2"];

$sub = $_REQUEST["subctg2"];
$unit = $_REQUEST["unit"];
$price = $_REQUEST["prdprice"];
$material = $_REQUEST["material"];
$type = $_REQUEST["jewel"];
$collection = $_REQUEST["prdcollec"];
$thumb = $_REQUEST["prdimg"];
$description = $_REQUEST["desc"];

$prd = new model_product();

$ketqua = $sub->AddProduct($name, $unit, $price, $description, $material, $type, $sub, $collection, $thumb);
if ($ketqua == FALSE) {
    $_SESSION["add_cate"] = "";
    $ann_title = "ADD NEW PRODUCT ERROR!";
    $ann_content = "Please check the information again";
    include_once("../views/includes/announce.php");
} else
{
    $_SESSION["add_cate"] = "OK";
    $ann_title = "ADD NEW PRODUCT SUCCESS!";
    $ann_content = "A new product is created!";
    include_once ("../views/includes/announce.php");
    header("location:../views/index/admin_product.php");
}

?>
