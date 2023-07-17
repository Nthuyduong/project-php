<?php
require_once("../models/model_subcate.php");

if(isset($_REQUEST["b1"]) == false)
{
    
}
$name = $_REQUEST["prdname"];
// Material
// Jewelry type
// Collection
$stock = $_REQUEST["prdunit"];
$price = $_REQUEST["prdprice"];
$description = $_REQUEST["prddesc"];
$qtt = $_REQUEST["prdquan"];
$cate = $_REQUEST["prdcate"];
$sub = $_REQUEST["prdsub"];


?>
