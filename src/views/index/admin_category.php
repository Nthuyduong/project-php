<?php define('URLROOT', 'http://localhost:8888/project-php'); ?>
<?php

session_start();

require_once("../../core/checklogin.php");
require_once("../../models/model_category.php");
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c813cf59a3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/fonts.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/admin-style.css">
</head>

<body>
    <?php require_once '../includes/sidebar.php'; ?>

    <div id="main">
        <?php require '../includes/ad-header.php' ?>
        <!-- THIS IS ALL CONTENT -->
        <div>
            <!-- Product here -->
            <div class="db-title mt-4">CATEGORY</div>
            <p>Have a nice day!</p>
            <div class="mb-3">
                <div>
                    <div class="row">
                        <div class="col-4">
                            <div class="search-bar d-flex">
                                <form action="" method="GET" class="w-100">
                                    <input class="search-input w-100" type="text" id="findcate" name="findcate" placeholder="<?php echo isset($_GET['findcate']) ? $_GET['findcate'] : 'Enter category name...'; ?>" />
                                </form>
                            </div>
                        </div>
                        <div class="col-4">
                            <button class="w-100 btn-lg-pr-admin" data-bs-toggle="offcanvas" data-bs-target="#addcate" aria-controls="addcate">Add Category</button>
                        </div>
                        <div class="col-4">
                            <button class="w-100 btn-lg-sc-admin">Change Status</button>
                        </div>
                    </div>
                    <div class="line my-4"></div>
                </div>
                <!-- Product table -->
                <?php
                $deletecate = new model_category();
                $cate = isset($_REQUEST["cate"]) ? $_REQUEST["cate"] : "";
                if (!($cate == null || $cate == ""))
                    $deletecate->DeleteCategory($cate);

                $keyword = $_REQUEST["findcate"];
                $searchcate = new model_category();
                $ketqua = $searchcate->SearchCategory($keyword);
                // $category = new model_category();
                // $ketqua = $category->GetCategories();
                if ($ketqua == FALSE) {
                    $alert_title = "Can't Connect Database";
                    $alert = "Please check again the database";
                    require_once("../../views/includes/alert.php");
                    die();
                }
                $rows = $searchcate->data;
                ?>
                <div class="tbl">
                    <div class="tb-row title-row">
                        <div class="cell-ssm">
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        </div>
                        <!-- <div class="cell-sm">
                                ID
                            </div> -->
                        <div class="cell-sm">
                            CATEGORY
                        </div>
                        <div class="cell-md alg-center">
                            SUB-CATEGORY
                        </div>
                        <div class="cell alg-center">
                            STATUS
                        </div>
                        <div class="cell-sm stt-out">
                            ACTION
                        </div>
                    </div>
                    <?php
                    if ($rows != NULL)
                        foreach ($rows as $row) {
                    ?>
                        <div class="tb-row">
                            <div class="cell-ssm">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="">
                            </div>
                            <div class="cell-sm">
                                <a href="admin_subcate.php?catename=<?= $row["U_Category"] ?>"><?= $row["U_Category"] ?></a>
                            </div>
                            <div class="cell-md alg-center">
                                <?= $row["Sub_Count"]?>
                            </div>
                            <div class="cell alg-center stt-out">
                                <div class="stt stt1">Active</div>
                            </div>
                            <div class="cell-sm stt-out">
                                <!-- <a ><i class="me-3 fas fa-edit" style="color: #ffffff;"></i></a> -->
                                <a href="?cate=<?= $row["U_Category"] ?>"><i class="fas fa-trash" style="color: #ffffff;"></i></a>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Add new category -->
    <div class="offcanvas offcanvas-end offcavasmd" tabindex="-1" id="addcate" aria-labelledby="addcateLabel">
        <div class="offcanvas-header">
            <h4 class="db-title">ADD NEW CATEGORY</h4>
            <div type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">X</div>
        </div>
        <div class="offcanvas-body">
            <form name="" id="" method="POST" action="../../controllers/controller_category.php">
                <div class="">
                    <div class="mdt mb-1">Category's Name</div>
                    <input class="w-100" name="catename" id="catename" placeholder="Category's name" />
                </div>
                <div class="my-4">
                    <div class="mdt mb-1">Sub-category</div>
                    <div class="row">
                        <form action="" method="POST" onsubmit="return validateInput()">
                            <div class="col-8">
                                <input type="number" id="quantity" name="quantity" min="0" max="5">
                            </div>
                            <div class="col-4">
                                <button class="w-100 btn-lg-pr-admin" onclick="generateInputs()">Generate</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Sub-category -->
                <div id="generatedInputsContainer">

                </div>
                <!-- <form class="box" method="post" action="" enctype="multipart/form-data">
                    <div class="box__input">
                        <input class="box__file" type="file" name="files[]" id="file" data-multiple-caption="{count} files selected" multiple />
                        <label for="file"><strong>Choose a file</strong><span class="box__dragndrop"> or drag it here</span>.</label>
                        <button class="box__button" type="submit">Upload</button>
                    </div>
                    <div class="box__uploading">Uploading…</div>
                    <div class="box__success">Done!</div>
                    <div class="box__error">Error! <span></span>.</div>
                </form> -->
                <div class=row>
                    <div class="col-6">
                        <button type="button" name="b2" id="b2" class="btn-lg-sc-admin w-100">Cancel</button>
                    </div>
                    <div class="col-6">
                        <button type="submit" name="b1" id="b1" class="btn-lg-pr-admin w-100">Add Category</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Category detail -->
    <div class="modal fade" id="cate-detail" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="db-title" id="exampleModalLabel">Category Detail</div>
                    <div type="button" class="" data-bs-dismiss="modal" aria-label="Close">
                        X
                    </div>
                </div>
                <div class="modal-body mb-3">
                    <!-- Content will be load here -->
                    <div id="dynamic-category">

                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="btn-lg-sc-admin w-100">Cancel</div>
                        </div>
                        <div class="col-6">
                            <div class="btn-lg-pr-admin w-100">Save edit</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script>
        function generateInputs() {
            var quantityValue = document.getElementById('quantity').value;
            var numInputs = parseInt(quantityValue);

            if (numInputs >= 0 && numInputs <= 5) {
                document.getElementById('generatedInputsContainer').innerHTML = '';

                for (var i = 1; i <= numInputs; i++) {
                    var inputTag = document.createElement('input');
                    inputTag.type = 'text';
                    inputTag.name = 'dynamic_input_' + i;
                    inputTag.placeholder = 'Enter Sub-category name no' + i;

                    // Add an event listener to capture the user input and update both the attribute and visible value
                    inputTag.addEventListener('input', function() {
                        this.value = this.value; // Setting the input field's value to itself
                    });

                    // Append the newly generated input tag to the container
                    document.getElementById('generatedInputsContainer').appendChild(inputTag);
                }
            } else {
                alert('Please enter a value between 0 and 5.');
            }
        }
    </script>
    <!-- Set value =0 when the user leaves the field blank -->
    <script>
        function validateInput() {
            var quantityValue = parseInt(document.getElementById('quantity').value);

            if (isNaN(quantityValue) || quantityValue < 0 || quantityValue > 5) {
                alert('Please enter a valid value between 0 and 5.');
                return false; // Prevent form submission
            }

            return true; // Allow form submission if validation passes
        }
    </script>


</body>

</html>