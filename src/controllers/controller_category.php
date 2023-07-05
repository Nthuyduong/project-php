<?php
require_once("../models/model_product.php");

$category = isset($_REQUEST["category"]) ? $_REQUEST["category"] : "rings";
$product = new Product();
$result = $product -> getProductByCategory($category);
require("../views/index/category.php");
?>
