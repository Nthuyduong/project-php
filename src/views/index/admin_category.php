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
            <p class="mb-4">Have a nice day!</p>
            <div class="mb-3">
                <div>
                    <div class="row">
                        <div class="col-3">

                        </div>
                        <div class="col-6">
                            <div class="search-bar d-flex">
                                <form action="" method="GET" class="w-100">
                                    <input class="search-input w-100" type="text" id="findcate" name="findcate" placeholder="<?php echo isset($_GET['findcate']) ? $_GET['findcate'] : 'Enter category name...'; ?>" />
                                </form>
                            </div>
                        </div>
                        <div class="col-3">

                        </div>
                    </div>

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
                        <div class="cell-sm alg-center">
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
                            <div class="cell-sm alg-center">
                                <a href="admin_subcate.php?catename=<?= $row["U_Category"] ?>"><?= $row["U_Category"] ?></a>
                            </div>
                            <div class="cell-md alg-center">
                                <?= $row["Sub_Count"] ?>
                            </div>
                            <div class="cell alg-center stt-out">
                                <div class="stt stt1">Active</div>
                            </div>
                            <div class="cell-sm stt-out">
                                <!-- <a ><i class="me-3 fas fa-edit" style="color: #ffffff;"></i></a> -->
                                <a href="?cate=<?= $row["U_Category"] ?>" onclick="return confirmDelete()"><i class="fas fa-trash" style="color: #ffffff;"></i></a>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
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

    <script>
        function confirmDelete() {
            var confirmation = confirm("Are you sure you want to delete this category?");
            return confirmation; // Return true if the user confirms, and false if canceled
        }
    </script>



</body>

</html>