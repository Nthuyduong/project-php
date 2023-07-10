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
                        <a href="#offcanvasRight" class="ms-auto btn-lg-pr-admin" role="button" data-bs-toggle="offcanvas" aria-controls="offcanvasRight">Add new product</a>
                        <a class="ms-3 btn-lg-sc-admin">Delete product</a>
                    </div>
                    <div class="line my-3"></div>
                    <div class="row">
                        <div class="col-3">
                            <div className="search-bar d-flex">
                                <!-- <form action="" method="GET"> -->
                                <input id="findProduct" name="findProduct" class="black search-input w-100" type="text" placeholder="Enter prodcut name..." />
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
                <?php
                // $products = new model_product();
                // $did = $_REQUEST["did"];
                // if ($did != NULL)
                //     $products->DeleteProduct($did);
                // $keyword = $_REQUEST["findProduct"];
                // if ($ketqua == FALSE) {
                //     $alert_title = "SQL ERROR!";
                //     $alert = "Please check again the database";
                //     require_once("../../views/includes/alert.php");
                //     die();
                // }
                ?>
                <div class="tbl product-wrapper">
                    <div class="tb-row title-row">
                        <div class="cell-ssm">
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        </div>
                        <div class="cell-sm">
                            IMAGE
                        </div>
                        <div class="cell">
                            PRODUCT'S NAME
                        </div>
                        <div class="cell alg-center">
                            CATEGORY
                        </div>
                        <div class="cell alg-center">
                            SUB-CATEGORY
                        </div>
                        <div class="cell-sm alg-center">
                            PRICE
                        </div>
                        <div class="cell-sm alg-center">
                            STOCK
                        </div>
                        <div class="cell-sm alg-center">
                            STATUS
                        </div>
                        <div class="cell-sm">
                            PUBLISHED
                        </div>
                        <div class="cell-sm">

                        </div>
                    </div>

                    <div id="subsort"></div>
                    <!-- Dong vong lap for each -->

                </div>
            </div>
        </div>
        <!-- ADD NEW PRODUCT HERE -->
        <div class="offcanvas offcanvas-end offcanvasfull" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <div>
                    <div class="db-title mt-4">ADD NEW PRODUCT</div>
                    <p>Upload Product's Information Here!</p>
                </div>
                <div type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="fa-solid fa-circle-x fa-xl text-light"></i>
                </div>
            </div>
            <div class="offcanvas-body">
                <div class="nav nav-tabs mb-5" id="myTab" role="tablist">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="basis-tab" data-bs-toggle="tab" data-bs-target="#basis" type="button" role="tab" aria-controls="basis" aria-selected="true">
                                Basis Information
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="combination-tab" data-bs-toggle="tab" data-bs-target="#combination" type="button" role="tab" aria-controls="combination" aria-selected="false">
                                Combination
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="basis" role="tabpanel" aria-labelledby="basis-tab">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <div class="mdt mb-1">Product's Name</div>
                                    <input class="" name="prdname" id="prdname" placeholder="Product's name/title" />
                                </div>
                                <div>
                                    <div class="mdt mb-1">Product's Unit</div>
                                    <input class="" name="prdunit" id="prdunit" placeholder="Product's name/title" />
                                </div>
                                <div class="my-3">
                                    <div class="md mb-1">Product's Price</div>
                                    <input class="w-100" name="prdprice" id="prdprice" placeholder="Product's price" />
                                </div>
                                <div>
                                    <div class="mdt mb-1">Product's Description</div>
                                    <textarea class="w-100" name="prddesc" id="prddesc" rows="4">
                                    Enter product's description here
                                    </textarea>
                                </div>
                                <div class="my-3">
                                    <div class="mdt mb-1">Product's Quantity</div>
                                    <input class="w-100" name="prdquan" id="prdquan" placeholder="Product's quantity" />
                                </div>
                                <div class="mt-3">
                                    <div class="mdt mb-1">Product's Category</div>
                                    <input class="w-100" name="prdcate" id="prdcate" placeholder="Product's category" />
                                </div>
                                <div>
                                    <div class="mdt mb-1">Product's SKU</div>
                                    <input class="w-100" name="prdsku" id="prdsku" placeholder="Product's SKU" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mdt mb-1">Product's Image</div>
                                <div class="drag-drop">
                                    <input type="file" id="file-input" />
                                    <div class="drag-drop-text">
                                        <p class="alg-center">Drag and drop an image file here</p>
                                        <p class="alg-center">Only *.png, *,webp, *.jpeg will be accepted</p>
                                    </div>
                                </div>
                                <!-- image drag will goes here -->
                                <div class="row">
                                    <div class="col-3">
                                        <div>
                                            <img src="#">
                                        </div>
                                        <div>Default image</div>
                                    </div>
                                    <div class="col-3">
                                        <div>
                                            <img src="#">
                                        </div>
                                        <div></div>
                                    </div>
                                    <div class="col-3">
                                        <div>
                                            <img src="#">
                                        </div>
                                        <div></div>
                                    </div>
                                    <div class="col-3">
                                        <div>
                                            <img src="#">
                                        </div>
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="combination" role="tabpanel" aria-labelledby="combination-tab">
                        <div class="row">
                            <div class="col-3">
                                <select class="sl-box" name="ctg" id="ctg">
                                    <option value="" disabled selected>Choose Combination</option>
                                    <option>Jewelry Type</option>
                                    <option>Material</option>
                                    <option>Size</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <select class="sl-box" name="ctg" id="ctg">
                                    <option value="" disabled selected>Jewelry Type</option>
                                    <option>Natural Diamond</option>
                                    <option>Lab-grown Diamond</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <select class="sl-box" name="ctg" id="ctg">
                                    <option value="" disabled selected>Material</option>
                                    <option>Gold</option>
                                    <option>Rose Gold</option>
                                    <option>White Gold</option>
                                    <option>Sterling Silver</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <select class="sl-box" name="ctg" id="ctg">
                                    <option value="" disabled selected>Size</option>
                                    <option></option>
                                    <option>Earring</option>
                                    <option>Necklace</option>
                                    <option>Bracelet</option>
                                </select>
                            </div>
                        </div>
                        <div class="line my-3"></div>
                        <div class="d-flex">
                            <button class="ms-auto btn-lg-pr-admin">Generate</button>
                            <button class="ms-3 btn-lg-sc-admin">Clear</button>
                        </div>
                        <div class="tbl">
                            <div class="tb-row title-row">
                                <div class="cell-ssm">
                                    IMAGE
                                </div>
                                <div class="cell">
                                    PRODUCT'S NAME
                                </div>
                                <div class="cell-sm">
                                    MATERIAL
                                </div>
                                <div class="cell">
                                    JEWELRY TYPE
                                </div>
                                <div class="cell-sm">
                                    SKU
                                </div>
                                <div class="cell-sm">
                                    PRICE ($)
                                </div>
                                <div class="cell-sm">
                                    QUANTITY
                                </div>
                                <div class="cell-sm">
                                    ACTION
                                </div>
                            </div>
                            <div class="tb-row">
                                <div class="cell-ssm">

                                </div>
                                <div class="cell">Amee Diamnond Ring</div>
                                <div class="cell-sm">Gold</div>
                                <div class="cell">Natural Diamond</div>
                                <div class="cell-sm">123</div>
                                <div class="cell-sm">$20.000</div>
                                <div class="cell-sm">5</div>
                                <div class="cell-sm">
                                    <i class="fas fa-trash" style="color: #ffffff;"></i>
                                </div>
                            </div>
                            <div class="tb-row">
                                <div class="cell-ssm">

                                </div>
                                <div class="cell">Amee Diamnond Ring</div>
                                <div class="cell-sm">Gold</div>
                                <div class="cell">Natural Diamond</div>
                                <div class="cell-sm">123</div>
                                <div class="cell-sm">$20.000</div>
                                <div class="cell-sm">5</div>
                                <div class="cell-sm">
                                    <i class="fas fa-trash" style="color: #ffffff;"></i>
                                </div>
                            </div>
                            <div class="tb-row">
                                <div class="cell-ssm">

                                </div>
                                <div class="cell">Amee Diamnond Ring</div>
                                <div class="cell-sm">Gold</div>
                                <div class="cell">Natural Diamond</div>
                                <div class="cell-sm">123</div>
                                <div class="cell-sm">$20.000</div>
                                <div class="cell-sm">5</div>
                                <div class="cell-sm">
                                    <i class="fas fa-trash" style="color: #ffffff;"></i>
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
        <!-- <script>
            $(document).ready(function() {
            // Hide all options in the second dropdown
            $("#subctg option").hide();

            // Handle change event on the first dropdown
            $("#ctg").change(function() {
                var selectedOption = $(this).val();
                console.log(selectedOption);
                // Hide all options in the second dropdown
                $("#subctg option").hide();
                
                // Show only the options that match the selected category
                $("#subctg option[data-category='" + selectedOption + "']").show();
                
                // Reset the selected option in the second dropdown
                $("#subctg").val("");
                });
            });
        </script> -->
        <script>
            function test() {
                let ct = this.value;
                console.log(ct);
                $.ajax({
                        url: 'productAJAX.php',
                        type: 'POST',
                        data: {
                            ctname: ct
                        },
                        dataType: 'html',
                    })
                    .done(function(data) {
                        // console.log(data);
                        $("#subctg").empty().append(data);

                    })
                    .fail(function() {});
            }
            $(document).ready(function() {

                $("#ctg").on("change", test);

                // $(document).onchange('onchange', '#ctg', function(e) {

                //     e.preventDefault();
                //     // Get customer ID after click
                //     var uid = $(this).val;
                //     console.log(uid);

                //     // // leave modal blank before ajax call
                //     // $('#dynamic-content').html('');
                //     // //load ajax loader
                //     // $('#modal-loader').show();

                //     // $.ajax({
                //     //         url: 'getcustomer.php',
                //     //         type: 'POST',
                //     //         data: {
                //     //             id: uid
                //     //         },
                //     //         dataType: 'html',
                //     //     })
                //     //     .done(function(data) {
                //     //         console.log(data);
                //     //         $('#dynamic-content').html('');
                //     //         // load response
                //     //         $('#dynamic-content').html(data);
                //     //         // hide ajax loader
                //     //         $('#modal-loader').hide();
                //     //     })
                //     //     .fail(function() {
                //     //         $('#dynamic-content'), html('<p>Something went wrong, please try again!</p>');
                //     //         $('#modal-loader').hide();
                //     //     });
                // });
            });
        </script>

        <!-- selected attribute appear automatically -->
        <!-- <script>
            let sortValue;
        
            $(document).ready(function() {
                $("#price").change(function() {
                    // Remove 'selected' attribute from all options
                    $("#price option").removeAttr("selected");

                    // Add 'selected' attribute to the chosen option
                    $("#price option:selected").attr("selected", "selected");
                    sortValue = $(this).val();
                    console.log(sortValue);
                });
            });
        </script> -->

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