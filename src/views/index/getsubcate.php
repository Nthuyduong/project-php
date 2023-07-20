<?php
require_once("../../models/model_subcate.php");
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
                <div class="">Name</div>
                <input class="ad-input" type="text" name="name" value="<?php echo $row["Name"] ?>">
            </div>
            <div>
                <div class="">Category</div>
                <select class="sl-box" name="ctg2" id="ctg2">
                    <option value="" <?php if ($ctg2 === '') echo 'selected'; ?>>Category</option>
                    <?php
                    $cs = new model_product();
                    $cs->CateSelect("Sub_categories", "ID", "Category", $ctg2);
                    ?>
                </select>
            </div>
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