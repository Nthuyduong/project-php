<?php define('URLROOT', 'http://localhost:8888/project-php'); ?>
<?php
session_start();
require_once("../../models/model_product.php");
require("../../core/checklogin.php");
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
            <!-- Product here -->
            <div class="db-title">PRODUCTS</div>
            <p>Have a nice day!</p>
            <div>
                <div>
                    <div class="d-flex">
                        <a href="#addsubcate" class="ms-auto btn-lg-pr-admin" data-bs-toggle="offcanvas" role="button" data-bs-target="#addsubcate" aria-controls="addsubcate">Add new product</a>
                        <a class="ms-3 btn-lg-sc-admin">Delete product</a>
                    </div>
                    <div class="line my-3"></div>
                    <div class="row">
                        <div class="col-3">
                            <div className="search-bar d-flex">
                                <!-- <form action="" method="GET"> -->
                                <input id="findProduct" name="findProduct" class="search-input w-100" type="text" placeholder="<?php echo isset($_GET['findProduct']) ? $_GET['findProduct'] : 'Enter product name...'; ?>" />
                                <FontAwesomeIcon class="icon-search" icon={faSearch} />
                                <!-- </form> -->
                            </div>
                        </div>
                        <div class="col-3">
                            <form name="f1" id="f1" action="" method="GET">
                                <select class="sl-box" name="ctg" id="ctg">
                                    <option value="" selected>Category</option>
                                    <?php
                                    $cs = new model_product();
                                    $cs->CateSelect("Sub_categories", "ID", "Category", $ctg);
                                    ?>
                                </select>
                            </form>
                        </div>
                        <?php
                        $subct = 0;
                        if (isset($_REQUEST["subctg"]))
                            $subct = $_REQUEST["subctg"];
                        ?>
                        <div class="col-3">
                            <select class="sl-box" name="subctg" id="subctg">
                                <option value="">Sub-category</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <select class="sl-box" name="price" id="price">
                                <option value="">Price</option>
                                <option value="lowtohigh">Low to high</option>
                                <option value="hightolow">High to low</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- Product table -->

                <div class="tbl product-wrapper">
                    <div class="tb-row title-row">
                        <div class="cell-sm alg-center">
                            ID
                        </div>
                        <div class="cell">
                            PRODUCT'S NAME
                        </div>
                        <div class="cell-sm alg-center">
                            CATEGORY
                        </div>
                        <div class="cell alg-center">
                            SUB-CATEGORY
                        </div>
                        <div class="cell-sm alg-center">
                            MATERIAL
                        </div>
                        <div class="cell alg-center">
                            JEWELRY TYPE
                        </div>
                        <div class="cell-sm alg-center">
                            PRICE ($)
                        </div>
                        <div class="cell-sm alg-center">
                            STOCK
                        </div>
                        <div class="cell-sm alg-center">
                            UNIT
                        </div>
                        <!-- <div class="cell-sm alg-center">
                            STATUS
                        </div> -->
                        <div class="cell-sm">

                        </div>
                    </div>

                    <div id="subsort">
                        <!-- product list here -->
                    </div>

                </div>
            </div>
        </div>
        <!-- ADD PRODUCT -->
        <div class="offcanvas offcanvas-end offcavasmd" tabindex="-1" id="addsubcate" aria-labelledby="addsubcateLabel">
            <div class="offcanvas-header">
                <h4 class="db-title">ADD NEW PRODUCT<h4>
            </div>
            <div class="offcanvas-body canvasbody">
                <form name="form1" id="form1" method="POST" action="../../controllers/controller_add_product.php">
                    <div class="">
                        <div class="mdt mb-1">Product's Name</div>
                        <input class="" name="prdname" id="prdname" placeholder="Product's name/title" />
                    </div>
                    <div class="mt-3">
                        <div class="mdt mb-1">Product's Category</div>
                        <select class="sl-box" name="ctg2" id="ctg2">
                            <option value="" selected>Category</option>
                            <?php
                            $cs = new model_product();
                            $cs->CateSelect("Sub_categories", "ID", "Category", $ctg2);
                            ?>
                        </select>
                    </div>
                    <div class="my-3">
                        <?php
                        $subct2 = 0;
                        if (isset($_REQUEST["subctg2"]))
                            $subct2 = $_REQUEST["subctg2"];
                        ?>
                        <div class="mdt mb-1">Product's Sub-category</div>
                        <select class="sl-box" name="subctg2" id="subctg2">
                            <option value="">Sub-category</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <div class="mdt mb-1">Product's Unit</div>
                        <select class="sl-box" name="unit" id="unit">
                            <option value="" selected>Select unit</option>
                            <?php
                            $unit = new model_product();
                            $unit->ddName("Products", "Unit");
                            ?>
                        </select>
                    </div>
                    <div class="">
                        <div class="md mb-1">Product's Price ($)</div>
                        <input class="w-100" name="prdprice" id="prdprice" placeholder="Product's price" />
                    </div>
                    <div class="my-3">
                        <div class="mdt mb-1">Material</div>
                        <select class="sl-box" name="material" id="material">
                            <option value="" selected>Select material</option>
                            <?php
                            $mate = new model_product();
                            $mate->ddName("Products", "Material");
                            ?>
                        </select>
                    </div>
                    <div class="">
                        <div class="mdt mb-1">Jewelry Type</div>
                        <select class="sl-box" name="jewel" id="jewel">
                            <option value="" selected>Select Jewelry type</option>
                            <?php
                            $jw = new model_product();
                            $jw->ddName("Products", "Jewelry_type");
                            ?>
                        </select>
                    </div>
                    <div class="my-3">
                        <div class="mdt mb-1">Collection</div>
                        <input class="w-100" name="prdcollec" id="prdcollec" placeholder="Collection" />
                    </div>
                    <div class="">
                        <div class="mdt mb-1">Thumb</div>
                        <input class="w-100" name="prdimg" id="prdimg" placeholder="Product's image" />
                    </div>
                    <div class="mb-5">
                        <div class="mdt mb-1">Description</div>
                        <textarea class="w-100" name="desc" id="desc" placeholder="" ></textarea>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <button class="btn-lg-sc-admin w-100" type="button" name="b2" id="b2">Cancel</button>
                        </div>
                        <div class="col-6">
                            <button class="btn-lg-pr-admin w-100" type="submit" name="b1" id="b1" value="Add">Add new product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

        <script>
            function test(id) {
                let ctValue = document.getElementById(id).value;
                console.log(ctValue);
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


        <script>
            function subctsort() {
                let sort = $('#price').val()
                let sct = $('#subctg').val();
                let search = $('#findProduct').val();
                $.ajax({
                        url: 'SubcateAJAX.php',
                        type: 'POST',
                        data: {
                            subname: sct,
                            keyword: search,
                            sort: sort,
                        },
                        dataType: 'html',
                    })
                    .done(function(data) {
                        // console.log(data);
                        $("#subsort").html('');
                        $('#subsort').html(data);

                    })
                    .fail(function() {
                        $('#subsort'), html('<p>Something went wrong, please try again!</p>');
                    });
            }
            $(document).ready(function() {
                $("#subctg").ready(subctsort);
                $("#findProduct").change(subctsort);
                $("#subctg").on("change", subctsort);
                $("#price").on("change", subctsort);
                // $("#findProduct").on("keydown", subctsort);
            })
        </script>

</body>

</html>