<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$keyword = isset($_REQUEST["keyword"])?$_REQUEST["keyword"]:"";
$sub = isset($_REQUEST["subname"])?$_REQUEST["subname"]:"";
require_once("../../models/model_product.php");
$list = new model_product();
if($sub == "")
    $sub = "%%";
if($keyword == "")
    $keyword = "%%";
else
    $keyword = "%$keyword%";
    // echo "$keyword";
    // echo "$sub";
$ketqua = $list->GetListBySub($sub,$keyword);

if ($ketqua == false) {
    echo "ERROR!";
} else {
    $rows = $list->data;
    if ($rows != null)
        foreach ($rows as $row)
        {
?>
        <div class="tb-row">
            <div class="cell-ssm">
                <input type="checkbox" id="" name="" value="">
            </div>
            <div class="cell-sm">img</div>
            <div class="cell"><?= $row["Name"] ?></div>
            <div class="cell alg-center"><?= $row["Category"] ?></div>
            <div class="cell alg-center"><?= $row["Sub_category"] ?></div>
            <div class="cell-sm alg-center"><?= $row["Price"] ?></div>
            <div class="cell-sm alg-center"><?= $row["TotalStock"] ?></div>
            <div class="cell-sm stt-out">
                <div class="stt-sm stt3">Status</div>
            </div>
            <div class="cell-sm togglebtn stt-out">
                <label class="switch">
                    <input type="checkbox" checked>
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="cell-sm stt-out">
                <!-- Chuc nang sua san pham -->
                <a href=""><i class="me-3 fas fa-edit" style="color: #ffffff;"></i></a>
                <!-- Chuc nang xoa san pham -->
                <a href="?did=<?= $row["ID"] ?>"><i class="fas fa-trash" style="color: #ffffff;"></i></a>
            </div>
        </div>
<?php
    }
}
?>