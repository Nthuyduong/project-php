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
$id = $_REQUEST["prid"];
$name = $_REQUEST["prname"];
$description = $_REQUEST["prdes"];
$price = $_REQUEST["prprice"];
$sub = $_REQUEST["subctg2"];

$subid = new model_product();
$sid = intval($subid->GetIDbySub($sub));

$type = $_REQUEST["jewelelry_type"];
$material = $_REQUEST["Material"];
$unit = $_REQUEST["Unit"];

// echo ($name);
// echo ($id);
// echo ($unit);
// echo ($price);
// echo ($material);
// echo ($type);
// echo ($sid);
// echo ($description);

$prd = new model_product();

$ketqua = $prd->UpdateProduct($id, $name, $description, $price, $sid, $type, $material, $unit);
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
