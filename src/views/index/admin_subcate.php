<?php

use App\Controllers\Controller_admin;

define('URLROOT', 'http://localhost:8888/project-php'); ?>
<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
session_start();
// require_once("../../controllers/controller_subcate.php");
require_once("../../core/checklogin.php");
require_once("../../models/model_subcate.php");
require_once("../../models/model_product.php")

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
        <!-- THIS IS HEADER -->
        <?php require '../includes/ad-header.php' ?>
        <!-- THIS IS ALL CONTENT -->
        <div>
            <?php
            if (isset($_GET['catename'])) {
                $catename = $_GET['catename'];
                $uppercaseCatename = strtoupper($catename);
            }
            ?>
            <!-- Product here -->
            <div class="db-title mt-4 mb-2"><?php echo $uppercaseCatename ?> SUB-CATEGORY</div>
            <p>Have a nice day!</p>
            <div class="my-4">
                <div>
                    <div class="row">
                        <div class="col-4">
                            <div className="search-bar d-flex">
                                <form action="" method="GET" class="">
                                    <input class="search-input w-100" type="text" id="findsubct" name="findsubct" placeholder="<?php echo isset($_GET['findsubct']) ? $_GET['findsubct'] : 'Enter sub-category name...'; ?>" />
                                    <FontAwesomeIcon class="icon-search" icon={faSearch} />
                                </form>
                            </div>
                        </div>
                        <div class="col-4">
                            <button class="w-100 btn-lg-pr-admin" data-bs-toggle="offcanvas" data-bs-target="#addsubcate" aria-controls="addsubcate">Add Sub-category</button>
                        </div>
                        <div class="col-4">
                            <button class="w-100 btn-lg-sc-admin">Delete Sub-category</button>
                        </div>
                    </div>
                    <div class="line my-4"></div>
                </div>
                <!-- Product table -->
                <?php
                $scategory = new model_subcate();
                $subcate = isset($_REQUEST["subcate"]) ? $_REQUEST["subcate"] : $_REQUEST[""];
                $scategory->DeleSubcategory($subcate);


                $searchct = new model_subcate();
                $keyword = $_REQUEST["findsubct"];
                if ($keyword != "") {
                    $searchct->SearchSubcate($keyword);
                    $rows = $searchct->data;
                } else {
                    $sublist = new model_subcate();
                    $cate = $_REQUEST["catename"];
                    $ketqua = $sublist->GetSubcate($cate);
                    if ($ketqua == false) {
                        $alert = "SQL ERROR";
                        $alert_title = "";
                        require_once("../includes/alert.php");
                    }
                    $rows = $sublist->data;
                }
                ?>
                <div class="tbl">
                    <div class="tb-row title-row">
                        <div class="cell-ssm">
                            <input type="checkbox" id="" name="" value="">
                        </div>
                        <div class="cell-sm">
                            ID
                        </div>
                        <div class="cell">
                            SUB-CATEGORY
                        </div>
                        <div class="cell alg-center">
                            CATEGORY
                        </div>
                        <div class="cell-md">
                            DESCRIPTION
                        </div>
                        <div class="cell stt-out">
                            ACTION
                        </div>
                    </div>
                    <?php
                    if ($rows != NULL)
                        foreach ($rows as $row) {
                    ?>
                        <div class="tb-row">
                            <div class="cell-ssm">
                                <input type="checkbox" id="" name="" value="value<?php $row["ID"] ?>">
                            </div>
                            <div class="cell-sm"><?= $row["ID"] ?></div>
                            <div class="cell"><?= $row["Name"] ?></div>
                            <div class="cell alg-center"><?= $row["Category"] ?></div>
                            <div class="cell-md">Description about sub-category goes here</div>
                            <div class="cell stt-out">
                                <a id="editScate" href="#" data-bs-toggle="modal" data-id="<?php echo $row["ID"]; ?>" data-bs-target="#cate-detail"><i class="me-3 fas fa-edit" style="color: #ffffff;"></i></a>
                                <a href="#" onclick="showConfirmationAndRedirect(<?= $row['ID'] ?>)"><i class="fas fa-trash" style="color: #ffffff;"></i></a>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                </div>
                <!-- <div class="d-flex pgn">
                    <div class="me-auto">Showing 8 of 100</div>
                    <div class="pagination">
                        <a href="#">&laquo;</a>
                        <a class="active" href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">&raquo;</a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- ADD SUB-CATEGORY -->
    <div class="offcanvas offcanvas-end offcavasmd" tabindex="-1" id="addsubcate" aria-labelledby="addsubcateLabel">
        <div class="offcanvas-header">
            <h4 class="db-title">ADD SUB-CATEGORY<h4>
        </div>
        <div class="offcanvas-body">
            <form name="form1" id="form1" method="POST" action="../../controllers/controller_subcate.php">
                <div class="">
                    <div class="mdt mb-1">Sub-category's Name</div>
                    <input class="w-100" name="subname" id="subname" placeholder="Sub-category's name" />
                </div>
                <div class="my-3">
                    <div class="mdt mb-1">Category</div>
                    <select class="sl-box" name="ctg" id="ctg">
                        <option value="" selected>Category</option>
                        <?php
                        $cs = new model_product();
                        $cs->CateSelect("Sub_categories", "ID", "Category", $ctg);
                        ?>
                    </select>
                </div>
                <div class="">
                    <div class="mdt mb-1">Sub-category's description</div>
                    <textarea class="w-100" name="desc" id="desc" rows="3"></textarea>
                </div>
                <!-- <div>
                            <form class="box" method="post" action="" enctype="multipart/form-data">
                                <div class="box__input">
                                    <input class="box__file" type="file" name="files[]" id="file" data-multiple-caption="{count} files selected" multiple />
                                    <label for="file"><strong>Choose a file</strong><span class="box__dragndrop"> or drag it here</span>.</label>
                                    <button class="box__button" type="submit">Upload</button>
                                </div>
                                <div class="box__uploading">Uploading…</div>
                                <div class="box__success">Done!</div>
                                <div class="box__error">Error! <span></span>.</div>
                            </form>
                        </div> -->
                <div class="row mt-5">
                    <div class="col-6">
                        <button type="button" name="b2" id="b2" class="btn-lg-sc-admin w-100">Cancel</button>
                    </div>
                    <div class="col-6">
                        <button type="submit" name="b1" id="b1" class="btn-lg-pr-admin w-100">Add Sub-category</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- EDIT SUB-CATEGORY -->
    <div class="modal fade" id="cate-detail" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="db-title" id="exampleModalLabel">Sub-category Detail</div>
                    <div type="button" class="" data-bs-dismiss="modal" aria-label="Close">
                        X
                    </div>
                </div>
                <div class="modal-body mb-3">
                    <!-- Content will be load here -->
                    <div id="dynamic-sub">

                    </div>
                    <div class="row">
                        <div class="col-6">

                        </div>
                        <div class="col-6">
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
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>
        function test() {
            let ctValue = document.getElementById("ctg").value;
            console.log(ctValue);
            $.ajax({
                    url: 'productAJAX.php',
                    type: 'POST',
                    data: {
                        ctname: ctValue
                    },
                    dataType: 'html',
                })
                .done(function(data) {
                    $("#subctg").empty().append(data);
                })
                .fail(function() {
                    console.error("AJAX request failed!");
                });
        }

        $(document).ready(function() {
            $("#ctg").on("change", test);
        });
    </script>

    <!-- EDIT PRODUCT -->
    <script>
        $(document).ready(function() {

            $(document).on('click', '#editScate', function(e) {

                e.preventDefault();
                // Get customer ID after click
                var uid = $(this).data('id');

                // leave modal blank before ajax call
                $('#dynamic-sub').html('');
                //load ajax loader
                $('#modal-loader').show();

                $.ajax({
                        url: 'getsubcate.php',
                        type: 'POST',
                        data: {
                            id: uid
                        },
                        dataType: 'html',
                    })
                    .done(function(data) {
                        console.log(data);
                        $('#dynamic-sub').html('');
                        // load response
                        $('#dynamic-sub').html(data);
                        // hide ajax loader
                        $('#modal-loader').hide();
                    })
                    .fail(function() {
                        $('#dynamic-sub').html('<p>Something went wrong, please try again!</p>');
                        $('#modal-loader').hide();
                    });
            });
        });
    </script>

    <!-- confirm delete product -->
    <script>
        function showConfirmationAndRedirect(productId) {
            // Display the confirmation dialog
            var confirmation = window.confirm("Are you sure you want to delete this sub-category?");
            // Check the user's response
            if (confirmation) {
                // If the user clicks "OK," proceed with the deletion action
                deleteProduct(productId);
            } else {
                // If the user clicks "Cancel," do nothing
            }
        }

        function deleteProduct(productId) {
            window.location.href = "?subcate=" + productId;
        }
    </script>


</body>

</html>