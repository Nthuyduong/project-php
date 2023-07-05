<?php
require_once('../../models/model_product.php');
if (isset($_REQUEST["pid"])) {
    $pid = $_REQUEST["pid"];
    $products = new Product();
    $getProductInfoById = $products -> getProductInfoById($pid);
    if ($getProductInfoById==false) {
        echo("<p>Fail to connect database!!</p>");
        die();
    }
    $productInfo = $products -> data;
} else {

}
    
?>

<div class="row product-add1 mb-3">
    <div class="col-4 ps-0">
    <a href="product-detail.php?pid=<?=$pid?>">
        <img src="../../../public/images/product-detail/<?=$productInfo['thumb']?>">
    </a>
    </div>
    <div class="col-8">
    <div class="d-flex prd-title">
        <p class="prd-name"><?=$productInfo['pname']?></p>
        <i class="fa-solid fa-xmark mb-auto"></i>
    </div>
    <div class="pe-0 prd-prc">
        <p>$<?=number_format($productInfo['price'], 0, '.', '.')?></p>
    </div>
    </div>
</div>
<div class="line mb-3"></div>

<div class="d-flex mb-3">
    <p class="mdt me-auto">Total</p>
    <p class="mdt">$<?=number_format($total, 0, '.', '.')?></p>
</div>

<div class="row offcanvas-btn">
    <div class="col-6 offcanvas-checkbox">
    <button class="btn btn-sec btnlg mt-3 w-100" type="button" hrefk="check-out.php">Checkout</button>
    </div>
    <div class="col-6 offcanvas-cart">
    <button class="btn btn-pri btnlg mt-3 w-100" type="button" href="cart.php">View Cart</button>
    </div>
</div>