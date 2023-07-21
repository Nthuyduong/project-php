<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once("../../models/model_product.php");
if (isset($_REQUEST["id"])) {
    $id = intval($_REQUEST["id"]);
    $product = new model_product();
    $product->GetProductByID($id);
    $rows = $product->data;
?>
    <!-- EDIT PRODUCT INFORMATION -->
    <div class="table-product">
        <form name="" id="" method="POST" action="../../controllers/controller_edit_product.php">
            <div class="row">
                <div class="col-6">
                    <!-- <div class="tbl"> -->
                    <div class="tb-title mb-3">Basic Information</div>
                    <div class="tb-row">
                        <div class="cell-sm">ID</div>
                        <div class="cell">
                            <input class="ad-input" name="prid" id="prid" value="<?php echo $rows["ID"] ?>">
                        </div>
                    </div>
                    <div class="tb-row">
                        <div class="cell-sm">PRODUCT'S NAME</div>
                        <div class="cell">
                            <input class="ad-input" name="prname" id="prname" value="<?php echo $rows["Name"] ?>">
                        </div>
                    </div>
                    <div class="tb-row">
                        <div class="cell-sm">DESCRIPTION</div>
                        <div class="cell">
                            <input class="ad-input" name="prdes" id="prdes" value="<?php echo $rows["Description"] ?>">
                        </div>
                    </div>
                    <div class="tb-row">
                        <div class="cell-sm">PRICE ($)</div>
                        <div class="cell">
                            <input class="ad-input" name="prprice" id="prprice" value="<?php echo ($rows["Price"]) ?>">
                        </div>
                    </div>
                    <div class="tb-row">
                        <div class="cell-sm">CATEGORY</div>
                        <div class="cell">
                            <select class="sl-box" name="ctg2" id="ctg2">
                                <option value="0">Category</option>
                                <?php
                                $cs = new model_product();
                                $cs->TaoSelect("Sub_categories", "Category", $rows["Category"]);
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="tb-row">
                        <div class="cell-sm">SUB-CATEGORY</div>
                        <div class="cell">
                            <?php
                            $subct2 = 0;
                            if (isset($_REQUEST["subctg2"]))
                                $subct2 = $_REQUEST["subctg2"];
                            ?>
                            <select class="sl-box" name="subctg2" id="subctg2">
                                <option value="">Sub-category</option>
                                <?php
                                $sc = new model_product();
                                $sc->TaoSelect("Sub_categories", "Name", $rows["Sub_category"]);
                                ?>
                            </select>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>
                <div class="col-6">
                    <!-- <div class="tbl"> -->
                    <div class="tb-title mb-3">Combination Information</div>
                    <div class="tb-row">
                        <div class="cell-sm">JEWELRY TYPE</div>
                        <div class="cell">
                            <select class="sl-box" name="jewelelry_type" id="jewelry_type">
                                <option value="0">Jewelry type</option>
                                <?php
                                $jewel = new model_product();
                                $jewel->TaoSelect("Products", "Jewelry_type", $rows["Jewelry_type"]);
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="tb-row">
                        <div class="cell-sm">MATERIAL</div>
                        <div class="cell">
                            <select class="sl-box" name="Material" id="Material">
                                <option value="0">Material</option>
                                <?php
                                $mate = new model_product();
                                $mate->TaoSelect("Products", "Material", $rows["Material"]);
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="tb-row">
                        <div class="cell-sm">UNIT</div>
                        <div class="cell">
                            <select class="sl-box" name="Unit" id="Unit">
                                <option value="0">Select Unit</option>
                                <?php
                                $unit = new model_product();
                                $unit->TaoSelect("Products", "Unit", $rows["Unit"]);
                                ?>
                            </select>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-6">

                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-6">
                            <button class="btn-lg-sc-admin w-100">Cancel</button>
                        </div>
                        <div class="col-6">
                            <button class="btn-lg-pr-admin w-100" type="submit" name="b1" id="b1" value="Add">Save edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        function test(id) {
            let ctValue = document.getElementById(id).value;
            // console.log(ctValue);
            $.ajax({
                    url: 'productAJAX.php',
                    type: 'POST',
                    data: {
                        ctname: ctValue,
                        elementId: id // Send the element's ID as a parameter
                    },
                    dataType: 'html',
                })
                .done(function(data) {
                    // console.log(data);
                    if (data !== "ERROR!") {
                        $("#sub" + id).empty().append(data);
                    } else {
                        console.error("An error occurred!");
                    }
                })
                .fail(function() {
                    console.error("AJAX request failed!");
                });
        }

        $(document).ready(function() {
            $("#ctg").on("change", function() {
                test("ctg");
            });

            $("#ctg2").on("change", function() {
                test("ctg2");
            });
        });
    </script>
<?php
}
