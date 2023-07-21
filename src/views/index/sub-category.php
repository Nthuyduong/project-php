<?php 
define('URLROOT', 'http://localhost:8888/project-php');
session_start(); 
$uid = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;
require("../../models/model_library.php");

?>
<!DOCTYPE html>
<html>

<head>
    <title>Sub-Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c813cf59a3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/fonts.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/sub-category.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style.css">
</head>

<body>
    <?php error_reporting(E_ALL); ?>
    <?php require_once '../includes/header.php' ?>

    <?php
    require("../../models/model_product_ex.php");
    if (isset($_REQUEST["sid"])) {
        $sid = $_REQUEST["sid"];
    } else {
        die("<p>Something wrong!!</p>");
    }
    ?>

    <div>
        <?php
        $subCates = new Product();
        $getProductsBySid = $subCates->getProductsBySid($sid);
        if ($getProductsBySid == false) {
            echo ("<p>Fail to connect database!!</p>");
            die();
        }
        $products = $subCates->data;
        ?>
        <!--category-top-->
        <div class="banner">
            <div class="overlay-image">
                <img src="../../../public/images/subcate-deco/<?=$sid?>.png" class="d-block w-100">
            </div>
            <div class="container-fluid category-top-text">
                <div class="row">
                    <div class="col-4">
                        <h4 class="mb-3"><?= ucwords($products[0]['subCategory'] . ' ' . $products[0]['category']) ?></h4>
                        <p><?=$products[0]['subDescription']?></p>
                    </div>
                    <div class="col-8"></div>
                </div>
            </div>
        </div>
        <div class="container-fluid body-main">
            <div class="row">
                <!--category-side-->
                <?php
                $library=new model_library();
                ?>
                <div class="category-side-bar col-2">
                    <form name="sortProInSubcate" id="sortProInSubcate" action="" method="post">
                        <div class="sticky ">
                            <div class="mb-1">
                                <p class="side-bar-title mb-3">Collection</p>
                                <?php
                                $colname="Collection";
                                $rows1=$library->createSelect("Products",$colname);
                                if($rows1!=null){
                                    foreach($rows1 as $row)
                                    {
                                        $value = $row[$colname];
                                        ?>
                                        <div class="mb-1">
                                            <input type="checkbox" class="check-box" name="<?=$colname?>[]" value="<?=$value?>">
                                            <label><?=$value?></label><br>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                            <div class="mt-3 mb-1">
                                <p class="side-bar-title">Jewellery</p>
                                <!--  -->
                                <?php
                                $colname="Jewelry_type";
                                $rows2=$library->createSelect("Products",$colname);
                                if($rows2!=null){
                                    foreach($rows2 as $row)
                                    {
                                        $value = $row[$colname];
                                        ?>
                                        <div class="mb-1">
                                            <input type="checkbox" class="check-box" name="<?=$colname?>[]" value="<?=$value?>">
                                            <label><?=$value?></label><br>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                                <!--  -->
                            </div>
                            <div class="mt-3 mb-1">
                                <p class="side-bar-title">Materials</p>
                                <!--  -->
                                <?php
                                $colname="Material";
                                $rows3=$library->createSelect("Products",$colname);
                                if($rows3!=null){
                                    foreach($rows3 as $row)
                                    {
                                        $value = $row[$colname];
                                        ?>
                                        <div class="mb-1">
                                            <input type="checkbox" class="check-box" name="<?=$colname?>[]" value="<?=$value?>">
                                            <label><?=$value?></label><br>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                                <!--  -->
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
                                    <input type="number" placeholder="Min" class="col-5 price-box">
                                    <span> ～ </span>
                                    <input type="text" placeholder="Max" class="col-5 price-box">
                                </div>
                            </div>
                            <input type="hidden" name="sid" value="<?=$sid?>">
                            <button type="submit" name ="b1" id="b1" class="btn btn-pri btnsm mt-3">Apply</button>
                        </div>
                    </form>
                </div>
                <!--category-main-->
                <div class="category-main px-0 col-10">
                    <div class="d-flex">
                        <div>
                            <!--breadcrumb-->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                                    <li class="breadcrumb-item"><a href="category.php?category=<?= $products[0]['category'] ?>">
                                            <?= ucfirst($products[0]['category']) ?>
                                        </a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a>
                                            <?= ucfirst($products[0]['subCategory']) ?>
                                        </a></li>
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
                    <div class="row cate-product">
                        <?php
                        if($products != null)
                        foreach ($products as $product) { ?>
                            <div class="col-3 card mb-9">
                                <div class="item-card-info">
                                    <div class="card-prd">
                                        <div class="img">
                                            <a href="product-detail.php?pid=<?=$product['pid']?>">
                                                <img src="../../../public/images/thumb/<?=$product['thumb']?>">
                                            </a>
                                        </div>
                                        <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" 
                                            data-bs-target="#quickview" onclick="quickview(<?=$uid?>, <?=$product['pid']?>)">
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
                    <!--category-bottom-->
                    <div class="category-bottom pb-5 text-center">
                        <p class="smt mb-2">Showing 60 of 180</p>
                        <button class="btn-more">View more</button>
                        <div class="d-flex mt-3">
                            <a class="mx-auto back-to-top smt" onclick="topFunction()" id="myBtn" title="Go to top">Back to top <i class="ps-3 fa-solid fa-chevron-up"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal quickview -->
        <?php require_once '../includes/quickviewAJAX.php';?>
        <?php require_once '../includes/addBagAJAX.php';?>

        <div>
            <?php require_once '../includes/footer.php';?>
        </div> 
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>