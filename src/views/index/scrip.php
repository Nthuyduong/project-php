<?php
require_once("../../models/model_product.php");
if(isset($POST['Category']))
{
    $category = $POST['Category'];
    if($category == "")
    {
        $pd = new model_product();
        $product = $pd->GetListProducts();
    }
    else{
        $product = $pd->GetProductByCategory($category);
    }
    echo json_encode($product)
}
?>