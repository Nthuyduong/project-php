<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once("../../models/model_subcate.php");
require_once("../../models/model_product.php");
if (isset($_REQUEST["id"])) {
    $id = intval($_REQUEST["id"]);
    $subcategory = new model_subcate();
    $subcategory->GetSubbyID($id);
    $row = $subcategory->data;
?>
    <div class="table-sub">
        <div>Sub-category information</div>
        <div class="sub-inner">
            <div>
                
            </div>
            <div>
                <div class="">Name</div>
                <input class="ad-input" type="text" name="name" value="<?php echo $row["Name"] ?>">
            </div>
            <!-- <div>
                <div class="my-3">Category</div>
                <select class="sl-box" name="ctg2" id="ctg2">
                    <option value="" selected>>Category</option>
                    <?php
                    $cs = new model_product();
                    $cs->CateSelect("Sub_categories", "ID", "Category", $ctg2);
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <?php
                $subct2 = 0;
                if (isset($_REQUEST["subctg2"]))
                    $subct2 = $_REQUEST["subctg2"];
                ?>
                <div class="mdt mb-1">Product's Sub-category</div>
                <select class="sl-box" name="subctg2" id="subctg2">
                    <option value="">Sub-category</option>
                </select>
            </div> -->
            <div>
                <div class="">Description</div>
                <input class="ad-input" type="text" name="name" value="<?php echo $row["Description"] ?>">
            </div>
            <div class="row">
                <div class="col-6"></div>
                <div class="col-6"></div>
            </div>
        </div>
    </div>
<?php
}
?>