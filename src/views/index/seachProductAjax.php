<?php
    $keyword = isset($_REQUEST["keyword"])?$_REQUEST["keyword"]:"";
    require_once("../../models/model_product.php");
    $product=new model_product();
    $ketqua=$product->GetListProductsByKeyword($keyword);
    if($ketqua ==false){
        echo "<p>Lỗi kết nối CSDL<p>";
        die();
    }else{
        $rows=$product->data;
        
        if($rows ==null){
            ?>
            <h5 id="search-result" class="text-center">0 RESULT FOR "<?=$keyword?>" REVEALED THE FOLLOWING:</h5>
            <?php    
        }else{
        $countProduct=count($rows);
        ?>
        <h5 id="search-result" class="text-center"><?=$countProduct?> RESULTS FOR "<?=$keyword?>" REVEALED THE FOLLOWING:</h5>
        <?php
        foreach($rows as $row) {
        ?>
            <div class="product-result row">
                <div class="product-img col-4 ps-0">
                    <div class="card-prd">
                    <div class="img">
                        <a href="product-detail.php">
                        <img src="../../../public/images/thumb/<?=$row["Thumb"]?>">
                        </a>
                    </div>
                    <div class="compare card-prd-bt smt">
                        <a href="product-detail.php">View detail</a>
                    </div>
                    </div>
                </div>
                <div class="product-info col-8 pe-0">
                    <h6 class="mb-2"><?=$row["Name"]?></h6>
                    <p class="mdt mb-3"><?=$row["Price"]?></p>
                    <p class="smt"><?=$row["Description"]?></p>
                </div>
            </div>
        <?php    
        }}}
        ?>
        