<?php define('URLROOT', 'http://localhost:8888/project-php');
session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c813cf59a3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/fonts.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/category.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/style.css">

</head>

<body>
    <?php error_reporting(E_ALL); ?>
    <?php require_once '../includes/header.php' ?>

    <?php
    require("../../models/model_product_ex.php");
    if (isset($_REQUEST["category"])) {
        $category = $_REQUEST["category"];
    } else {
        die("<p>Something wrong!!</p>");
    }
    ?>

    <div class="container-fluid">
        <!--category-top-->
        <div class="category-top row pb-5">
            <div class="col-3">
                <img src="../../../public/images/cate-deco/<?= $category ?>.webp" />
            </div>
            <?php
            $subCates = new Product();
            $getSubCategoryByCategory = $subCates->getSubCategoryByCategory($category);
            if ($getSubCategoryByCategory == false) {
                echo ("<p>Fail to connect database!!</p>");
                die();
            }
            $subCategories = $subCates->data;
            ?>
            <?php
            if ($subCategories != null)
                foreach ($subCategories as $subCategory) {
            ?>
                <div class="col-3">
                    <div class="sub-cate-box">
                        <div class="sub-cate-img">
                            <a href="sub-category.php?sid=<?= $subCategory['ID'] ?>">
                                <img src="../../../public/images/cate-deco/<?= $subCategory['ID'] ?>.webp" />
                            </a>
                        </div>
                        <div class="sub-name">
                            <p class="mdt mb-0"><?= ucfirst($subCategory['Name']) ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row">
            <!--category-side-->
            <div class="category-side-bar col-2">
                <div class="sticky ">
                    <div class="mb-1">
                        <p class="side-bar-title mb-3">Collection</p>
                        <div class="mb-1">
                            <input type="checkbox" class="check-box" id="collection-1" name="collection-1" value="Sping Collection">
                            <label for="collection-1">Spring Vibe</label><br>
                        </div>
                        <div class="mb-1">
                            <input type="checkbox" class="check-box" id="collection-2" name="collection-2" value="Aguri Minimalism">
                            <label for="collection-2">Minimalism</label><br>
                        </div>
                        <div class="mb-1">
                            <input type="checkbox" class="check-box" id="collection-3" name="collection-3" value="Aguri's Eternity Magic">
                            <label for="collection-3">Eternity Magic</label><br>
                        </div>
                        <div class="mb-1">
                            <input type="checkbox" class="check-box" id="collection-4" name="collection-4" value="End-Off-Year Collection">
                            <label for="collection-4">End-Off-Year</label>
                        </div>
                    </div>
                    <div class="mt-3 mb-1">
                        <p class="side-bar-title">Jewellery</p>
                        <div class="mb-1">
                            <input type="checkbox" class="check-box check-cate" id="jewellery-1" name="jewellery-1" value="Natural Jewellery">
                            <label for="jewellery-1">Natural</label><br>
                        </div>
                        <div class="mb-1">
                            <input type="checkbox" class="check-box check-cate" id="jewellery-2" name="jewellery-2" value="Lab-grown Jewellery">
                            <label for="jewellery-2">Lab-grown</label>
                        </div>
                    </div>
                    <div class="mt-3 mb-1">
                        <p class="side-bar-title">Materials</p>
                        <div class="mb-1">
                            <input type="checkbox" class="check-box check-cate" id="materials-1" name="materials-1" value="Gold">
                            <label for="materials-1">Gold</label><br>
                        </div>
                        <div class="mb-1">
                            <input type="checkbox" class="check-box check-cate" id="materials-2" name="materials-2" value="Rose Gold">
                            <label for="materials-2">Rose Gold</label><br>
                        </div>
                        <div class="mb-1">
                            <input type="checkbox" class="check-box check-cate" id="materials-3" name="materials-3" value="White Gold">
                            <label for="materials-3">White Gold</label><br>
                        </div>
                        <div class="mb-1">
                            <input type="checkbox" class="check-box check-cate" id="materials-4" name="materials-4" value="Sterling Silver">
                            <label for="materials-4">Sterling Silver</label>
                        </div>
                    </div>
                    <div class="mt-3 mb-1">
                        <p class="side-bar-title">Price</p>
                        <div class="mb-1">
                            <input type="checkbox" class="check-box check-cate" id="price-1" name="price-1" value="$500 & Under">
                            <label for="price-1">$0 - $500</label><br>
                        </div>
                        <div class="mb-1">
                            <input type="checkbox" class="check-box check-cate" id="price-2" name="price-2" value="$500 - $1,000">
                            <label for="price-2">$500 - $1,000</label><br>
                        </div>
                        <div class="mb-1">
                            <input type="checkbox" class="check-box check-cate" id="price-3" name="price-3" value="$1,000 - $2,000">
                            <label for="price-3">$1,000 - $2,000</label><br>
                        </div>
                        <div class="mb-1">
                            <input type="checkbox" class="check-box check-cate" id="price-4" name="price-4" value="$2,000 - $5,000">
                            <label for="price-4">$2,000 - $5,000</label><br>
                        </div>
                        <div class="mb-1">
                            <input type="checkbox" class="check-box check-cate" id="price-5" name="price-5" value="$5,000 & More">
                            <label for="price-5">$5,000 +</label><br><br>
                        </div>
                        <div>
                            <input type="text" placeholder="Min" class="col-5 price-box">
                            <span> ～ </span>
                            <input type="text" placeholder="Max" class="col-5 price-box">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-pri btnsm mt-3" onclick="alert('Loading...')">Apply</button>
                </div>
            </div>
            <!--category-main-->
            <div class="category-main px-0 col-10">
                <div class="d-flex">
                    <div>
                        <!--breadcrumb-->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a><?= ucfirst($category) ?></a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="filter-prd dropdown2">
                        <span>Sort by: Recommendations</span>
                        <div class="dropdown2-content">
                            <ul>
                                <li class="mb-2">New Arrivals</li>
                                <li class="mb-2">Best Selling</li>
                                <li class="mb-2">Alphabetically, A-Z</li>
                                <li class="mb-2">Alphabetically, Z-A</li>
                                <li class="mb-2">Date, New to Old</li>
                                <li class="mb-2">Date, Old to New</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--ALL PRODUCT HERE-->
                <div>
                    <?php
                    $productdb = new Product();
                    $getProductByCategory = $productdb->getProductByCategory($category);
                    if ($getProductByCategory == false) {
                        echo ("<p>Fail to connect database!!</p>");
                        die();
                    }
                    $products = $productdb->data;
                    if ($products != null) {
                        $products_line1 = array_slice($products, 0, 4);
                        $products_line2 = array_slice($products, 4, 6);
                        $products_line3 = array_slice($products, 6);
                    }
                    ?>
                    <div class="row cate-product">
                        <?php
                        if ($products_line1 != null)
                            foreach ($products_line1 as $product) {
                        ?>
                            <div class="col-3 card mb-9">
                                <div class="item-card-info">
                                    <div class="card-prd">
                                        <div class="img">
                                            <a href="product-detail.php?pid=<?=$product['pid']?>">
                                                <img src="../../../public/images/thumb/<?=$product['thumb']?>">
                                            </a>
                                        </div>
                                        <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" 
                                            data-bs-target="#quickview" onclick="quickview(<?=$product['pid']?>)">
                                                Quick view
                                        </div>
                                    </div>
                                    <div class="item-inf text-center mt-2">
                                        <p class="decor-text mb-1"><?= $product['pname'] ?></p>
                                        <p class="smt item-price">$<?= number_format($product['price']) ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="row cate-product">
                        <!-- featured product -->
                        <div class="col-6">
                            <div class="featured">
                                <div class="featured-img">
                                    <img src="../../../public/images/rings/feature.png" />
                                </div>
                                <div class="overlay text-left">
                                    <h5>Featured Product</h5>
                                    <a href="#" type="button" data-bs-toggle="offcanvas" data-bs-target="#ftr">Shop now</a>
                                </div>
                            </div>
                            <!--OFFCANVSS FEATURE PRODUCT-->
                            <div class="offcanvas offcanvas-end" id="ftr">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title mt-3">Featured Products</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="feature-pr">
                                                <a href="product-detail.php?pid=<?= $product['pid'] ?>">
                                                    <img src="../../../public/images/featured/ftr-01.webp">
                                                </a>
                                                <div class="mt-2">
                                                    <p class="decor-text mb-1">Lynn Ring</p>
                                                    <p class="smt item-price">$</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="feature-pr">
                                                <a href="product-detail.php?pid=<?= $product['pid'] ?>">
                                                    <img src="../../../public/images/featured/ftr-02.webp">
                                                </a>
                                                <div class="mt-2">
                                                    <p class="decor-text mb-1">Lynn Ring</p>
                                                    <p class="smt item-price">$</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="feature-pr">
                                                <a href="product-detail.php?pid=<?= $product['pid'] ?>">
                                                    <img src="../../../public/images/featured/ftr-03.webp">
                                                </a>
                                                <div class="mt-2">
                                                    <p class="decor-text mb-1">Lynn Ring</p>
                                                    <p class="smt item-price">$</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="feature-pr">
                                                <a href="product-detail.php?pid=<?= $product['pid'] ?>">
                                                    <img src="../../../public/images/featured/ftr4.webp">
                                                </a>
                                                <div class="mt-2">
                                                    <p class="decor-text mb-1">Lynn Ring</p>
                                                    <p class="smt item-price">$</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php foreach ($products_line2 as $product) {  ?>
                            <div class="col-3 card mb-9">
                                <div class="item-card-info">
                                    <div class="card-prd">
                                        <div class="img">
                                            <a href="product-detail.php?pid=<?=$product['pid']?>">
                                                <img src="../../../public/images/thumb/<?=$product['thumb']?>">
                                            </a>
                                        </div>
                                        <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" 
                                            data-bs-target="#quickview" onclick="quickview(<?=$product['pid']?>)">
                                                Quick view
                                        </div>
                                    </div>
                                    <div class="item-inf text-center mt-2">
                                        <p class="decor-text mb-1"><?= $product['pname'] ?></p>
                                        <p class="smt item-price">$<?= number_format($product['price']) ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <!-- Quickview modal will goes here -->
                    <div id="qview">

                    </div>

                    <div class="row cate-product">
                        <?php foreach ($products_line3 as $product) {  ?>
                            <div class="col-3 card mb-9">
                                <div class="item-card-info">
                                    <div class="card-prd">
                                        <div class="img">
                                            <a href="product-detail.php?pid=<?=$product['pid']?>">
                                                <img src="../../../public/images/thumb/<?=$product['thumb']?>">
                                            </a>
                                        </div>
                                        <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" 
                                            data-bs-target="#quickview" onclick="quickview(<?=$product['pid']?>)">
                                                Quick view
                                        </div>
                                    </div>
                                    <div class="item-inf text-center mt-2">
                                        <p class="decor-text mb-1"><?= $product['pname'] ?></p>
                                        <p class="smt item-price">$<?= number_format($product['price']) ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <!--category-bottom-->
                <div class="category-bottom pb-5 text-center">
                    <p class="smt mb-2">Showing 60 of 180</p>
                    <button class="btn-more">View more</button>
                    <div class="d-flex">
                        <a class="mx-auto back-to-top smt" onclick="topFunction()" id="myBtn" title="Go to top">Back to top <i class="ps-3 fa fa-chevron-up"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- modal quickview -->
        <?php require_once '../includes/quickview.php';?>

        <div>
            <?php require_once '../includes/footer.php';?>
        </div> 
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script>
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
    </body>
</html>