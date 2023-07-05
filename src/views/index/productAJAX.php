<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    $key = isset($_REQUEST["ctname"])?$_REQUEST["ctname"]:"";
    require_once("../../models/model_product.php");
    $product = new model_product();
    $ketqua = $product->GetSubByCategory($key);
    if($ketqua == false)
    {
        echo "ERROR!";
    }
    else
    {
        $rows = $product->data;
        if($rows != null)
            foreach($rows as $row)
            {
        ?>
            <option value="<?=$row["Name"]?>"><?=$row["Name"]?></option>
        <?php
       }
    }
?>