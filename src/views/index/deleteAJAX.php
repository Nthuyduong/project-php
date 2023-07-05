<?php
$delete = isset($_REQUEST["prdname"])?$_REQUEST["prdname"]:"";
require_once("../../models/model_product.php");
$product = new model_product();
$ketqua = $product->DeleteProduct($delete);
if($ketqua == FALSE)
{
    echo "<p>ERROR</p>";
}
else{
    echo "<p>DELETED!</p>";
}

?>