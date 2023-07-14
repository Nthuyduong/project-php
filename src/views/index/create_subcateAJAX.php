<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$catename = isset($_REQUEST["catename"]) ? $_REQUEST["catename"] : "";
$cate = isset($_REQUEST["cate"]) ? $_REQUEST["cate"] : "";
$desc = isset($_REQUEST["desc"]) ? $_REQUEST["desc"] : "";

require_once ("../../models/model_subcate.php");
$addsub = new model_subcate();

$ketqua = $addsub->AddSubcategory($catename, $cate, $desc);
if($ketqua == False)
{
    
}
else{

}
?>