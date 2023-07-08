<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once("../../models/model_product.php");
if (isset($_REQUEST["id"])){
    $id = intval($_REQUEST["id"]);
    $product = new model_product();
    $product->GetProductByID($id);
    $rows = $product->data;
?>
    <!-- Product information will goes here -->
    <div class="table-product">
        <div class="row">
            <div class="col-6">
                <div class="tbl">
                    <div class="tb-title mb-3">Basic Information</div>
                    <div class="tb-row">
                        <div class="cell-sm">ID</div>
                        <div class="cell"><?php echo $rows["ID"] ?></div>
                    </div>
                    <div class="tb-row">
                        <div class="cell-sm">PRODUCT'S NAME</div>
                        <div class="cell"><?php echo $rows["Name"] ?></div>
                    </div>
                    <div class="tb-row">
                        <div class="cell-sm">PRICE</div>
                        <div class="cell"><?php echo $rows["Price"] ?></div>
                    </div>
                    <div class="tb-row tb-row2">
                        <div class="cell-sm">CATEGORY</div>
                        <div class="cell"><?php echo $rows["Category"] ?></div>
                    </div>
                    <div class="tb-row tb-row2">
                        <div class="cell-sm">SUB-CATEGORY</div>
                        <div class="cell"><?php echo $rows["Sub_category"] ?></div>
                    </div>
                    <div class="tb-row tb-row2">
                        <div class="cell-sm">QUANTITY/STOCK</div>
                        <div class="cell"><?php echo $rows["TotalStock"] ?></div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="tbl">
                    <div class="tb-title mb-3">Combination Information</div>
                    <div class="tb-row">
                        <div class="cell">JEWELRY TYPE</div>
                        <div class="cell"><?php echo $rows["Jewelry_type"] ?></div>
                    </div>
                    <div class="tb-row">
                        <div class="cell">MATERIAL</div>
                        <div class="cell"><?php echo $rows["Material"] ?></div>
                    </div>
                    <!-- <div class="tb-row">
                        <div class="cell">SIZE</div>
                        <div class="cell"></div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
<?php
}
