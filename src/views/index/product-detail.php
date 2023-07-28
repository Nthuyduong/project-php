<?php define('URLROOT', 'http://localhost:8888/project-php'); 
session_start();
$uid = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <script src="https://kit.fontawesome.com/c813cf59a3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php echo URLROOT?>/public/css/fonts.css">
        <link rel="stylesheet" href="<?php echo URLROOT?>/public/css/product-detail.css">
        <link rel="stylesheet" href="<?php echo URLROOT?>/public/css/style.css">
       
    </head>
    <body> 
        <?php  error_reporting(E_ALL); ?>
        <?php require_once '../includes/header.php'?>

        <?php
        require("../../models/model_product_ex.php");
        if (isset($_REQUEST["pid"])) {
            $pid = $_REQUEST["pid"];
        } else {
            die("<p>Something wrong!!</p>");
        }
        ?>
        <div>
            <!--Product detail-->
            <div class="container-fluid">
                <!--DETAIL-->
                <div class="prod-detail">
                    <div class="row">
                        <div class="col-2">
                            <?php
                                $productMedias = new Product();
                                $getMediasById = $productMedias -> getMediasById($pid);
                                if ($getMediasById==false) {
                                    echo("<p>Fail to connect database!!</p>");
                                    die();
                                }
                                $medias = $productMedias -> data;
                                ?>
                                <?php foreach ($medias as $media) { 
                                    ?>
                                    <div class="mbt">
                                        <a href="#">
                                            <img src="../../../public/images<?=$media['Url']?>" onclick="zoomIn('<?= $media['Url'] ?>')">
                                        </a>
                                    </div>
                                <?php } ?>
                        </div>
                        <div class="col-6">
                            <a href="#">
                                <img src="../../../public/images<?=$medias[0]['Url']?>" id="clickedImage">
                            </a>
                        </div>
                        <div class="col-4">
                            <?php
                                $products = new Product();
                                $getProductInfoById = $products -> getProductInfoById($pid);
                                if ($getProductInfoById==false) {
                                    echo("<p>Fail to connect database!!</p>");
                                    die();
                                }
                                $productInfo = $products -> data;
                            ?>
                            <!--Breadcrumb-->
                            <nav aria-label="breadcrumb">
                            <ol class="breadcrumb crumb">
                                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="category.php?category=<?=$productInfo['category']?>"><?=ucfirst($productInfo['category'])?></a></li>
                                <li class="breadcrumb-item"><a href="sub-category.php?sid=<?=$productInfo['sid']?>"><?=ucfirst($productInfo['subCategory'])?></a></li>
                            </ol>
                            </nav>
                            <p class="mdt product-name"><?=$productInfo['pname']?></p>
                            <p><?=$productInfo['description']?></p>
                            <h5 class="mt-2 mb-4 price">$<?=number_format($productInfo['price'])?></h5>
                            <div class="d-flex">
                                <a class="me-auto">
                                    <p class="mdt me-auto">Complimentary Shipping & Returns</p>
                                </a>
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                            <div class="line mb-3"></div>
                            <div class=d-flex>
                                <p class="mdt me-auto">Quantity</p>
                                <div class="quantity">
                                    <!-- <form id='myform' method='POST' class='quantity' action='#'>
                                    <i class="fa-solid fa-minus"></i> -->
                                    <input type='number' name='quantity' value='1' class='qty' />
                                    <!-- <i class="fa-solid fa-plus"></i>
                                    </form> -->
                                </div>
                            </div>
                            <div class="line mb-3"></div>
                            <div class=d-flex>
                                <p class="mdt me-auto mb-0 mt-1">Size</p>
                                <select class="form-select smt w-50 size">
                                    <option selected value="0">Select size</option>
                                    <option value="3">3</option>
                                    <option value="3.5">3 1/2</option>
                                    <option value="4">4</option>
                                    <option value="4.5">4 1/2</option>
                                    <option value="5">5</option>
                                    <option value="5.5">5 1/2</option>
                                </select>
                            </div>
                            <div class="line my-3"></div>
                            <div class="find-size">
                            <div class="d-flex" data-bs-toggle="offcanvas" data-bs-target="#findsize">
                                <p class="mdt me-auto mb-2">※ Find your size</p>
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>

                            <!--OFFCANVAS FIND SIZE-->
                            <div class="offcanvas offcanvas-end" id="findsize">
                                <div class="offcanvas-header">
                                <h5 class="offcanvas-title mt-3">Find Your Ring Size</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                <table class="ring-size">
                                    <thead class="size-title pb-3">
                                    <tr>
                                    <th class="">AGURI (US) size</th>
                                    <th class="mx12">Circumference (mm)</th>
                                    <th class="select-trans">
                                        <select class="form-select smt">
                                        <option selected>UK</option>
                                        <option value="1">Japan</option>
                                        <option value="2">Italy</option>
                                        <option value="3">Germany</option>
                                        </select>
                                    </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="ring-size text-center">
                                    <td>
                                        <button class="btn btn-sec btnsm w-100" type="button">3</button>
                                    </td>
                                    <td>14.1 / 44.2</td>
                                    <td>F</td>
                                    </tr>
                                    <tr class="ring-cir text-center mx12">
                                    <td>
                                        <button class="btn btn-sec btnsm w-100" type="button">3 1/2</button>
                                    </td>
                                    <td>14.5 / 45.5</td>
                                    <td>G 1/2</td>
                                    </tr>
                                    <tr class="trans-size text-center">
                                    <td>
                                        <button class="btn btn-sec btnsm w-100" type="button">4</button>
                                    </td>
                                    <td>14.9 / 46.8</td>
                                    <td>H 1/2</td>
                                    </tr>
                                    <tr class="text-center ">
                                    <td>
                                        <button class="btn btn-sec btnsm w-100" type="button">4 1/2</button>
                                    </td>
                                    <td>15.3 / 48.0</td>
                                    <td>I 1/2</td>
                                    </tr>
                                    <tr class="text-center ">
                                    <td>
                                        <button class="btn btn-sec btnsm w-100" type="button">5</button>
                                    </td>
                                    <td>15.7 / 49.3</td>
                                    <td>J 1/2</td>
                                    </tr>
                                    <tr class="text-center ">
                                    <td>
                                        <button class="btn btn-sec btnsm w-100" type="button">5 1/2</button>
                                    </td>
                                    <td>15.7 / 49.3</td>
                                    <td>J 1/2</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p class="text-center mt-4 mb-0 mdt">HOW TO MEASURE</p>
                                <div class="row mt-4">
                                    <div class="col-4 px-0"></div>
                                    <div class="col-4 px-0">
                                    <img src="../../../images/product-detail/measure.png">
                                    </div>
                                    <div class="col-4 px-0"></div>
                                </div>
                                <div class="measure-content">
                                    <p>1. Grab a tape measure, length of string or strip of paper.</p>
                                    <p>2. Wrap it around the finger you’ll wear your ring on—if you’re creating a ring stack, consider where
                                    on your finger the ring will sit—and mark the place where it joins.</p>
                                    <p>3. Lay your string or paper strip on a flat surface and use a ruler to measure the length up to the mark.
                                    Use the chart above to match the measurement to the closest Tiffany ring size.</p>
                                </div>
                                <!--Collapse How To Measure-->
                                </div>
                            </div>
                            </div>
                            <div class="bag">
                            <!-- <button class="add-bag btn btnlg btn-pri w-100" type="submit" data-bs-toggle="offcanvas" 
                                data-bs-target="#addToBag" onclick="addToBag(pid)">
                                    Add to bag
                            </button> -->
                            <button class="add-bag btn btnlg btn-pri w-100" type="submit" onclick="addToBag(<?=$uid?>, <?=$pid?>)">
                                    Add to bag
                            </button>
                        
                            <!--OFFCANVAS ADD BAG-->
                            <!-- <div class="offcanvas offcanvas-end" id="addToBag">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title mt-3">Shopping Bag</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body" id="bag-body">
                                
                                </div>
                            </div> -->
                            </div>

                            <div class="ask-advisor">
                            <button class="btn btn-sec btnlg w-100" type="button" data-bs-toggle="offcanvas" data-bs-target="#askadvisor">Ask A Client Advisor</button>
                            <!-- OFFCANVSS ASK ADVISOR -->
                            <div class="offcanvas offcanvas-end" id="askadvisor">
                                <div class="offcanvas-header">
                                <h5 class="offcanvas-title mt-3">Aguri At Your Service</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                <p class="pb-3">From finding the perfect Tiffany gift to jewelry styling advice, our Client Advisors are always here to help.</p>
                                <div class="d-flex">
                                    <a class="me-auto" href="#">
                                    <p class="mdt">Chat Online</p>
                                    </a>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                                <div class="line mb-3"></div>
                                <div class="d-flex">
                                    <a class="me-auto" href="#">
                                    <p class="mdt">Call</p>
                                    </a>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                                <div class="line mb-3"></div>
                                <div class="d-flex">
                                    <a class="me-auto" href="#">
                                    <p class="mdt">Book A Appointment</p>
                                    </a>
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!--DESCRIPTIONS & DETAIL-->
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <a class="accordion-header" id="flush-headingOne">
                                <p class="mdt accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne">
                                    Descriptions & Details
                                </p>
                                </a>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p class="smt">Tiffany T1 designs reinvent our iconic Tiffany T collection with bold profiles and powerful details.
                                    These hoop earrings are precisely crafted in 18k rose gold and feature a beveled edge traced with round brilliant diamonds.
                                    Wear on their own as a striking statement or style with a mix of stud earrings for an unexpected look.
                                    </p>
                                    <ul>
                                    <li class="smt">18k rose gold with round brilliant diamonds</li>
                                    <li class="smt">Size extra small</li>
                                    <li class="smt">Carat total weight .40</li>
                                    <li class="smt">Product number:69782981</li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--SIMILAR-PRODUCT-->
                <div class="simi-prod">
                    <div class="row">
                        <div class="col-3">
                            <h5>Similar Products</h5>
                            <p class="smt">AGURI designs reinvent our iconic AGURI collection with bold profiles and powerful details.</p>
                        </div>
                        <div class="col-9">
                            <div id="simi" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <?php
                                    $similarsDB = new Product();
                                    $getSimilarProducts = $similarsDB -> getSimilarProducts($productInfo['sid'], $pid);
                                    if ($getSimilarProducts==false) {
                                        echo("<p>Fail to connect database!!</p>");
                                        die();
                                    }
                                    $similarProducts = $similarsDB -> data;
                                    $similarProducts1 = array_slice($similarProducts, 0, 3);
                                    $similarProducts2 = array_slice($similarProducts, 3, 6);
                                    ?>
                                    <div class="carousel-item active" data-bs-interval="3000">
                                        <div class="row">
                                            <?php foreach ($similarProducts1 as $similar) { ?>
                                                <div class="col-4">
                                                    <div class="item-card-info">
                                                        <div class="card-prd">
                                                            <div class="img">
                                                                <a href="product-detail.php?pid=<?=$similar['pid']?>">
                                                                    <img src="../../../public/images/thumb/<?=$similar['thumb']?>">
                                                                </a>
                                                            </div>
                                                            <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button"
                                                                data-bs-target="#compare" onclick="compare(<?=$uid?>, <?=$similar['pid']?>)">
                                                                    Quick Compare
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="carousel-item" data-bs-interval="3000">
                                        <div class="row">
                                            <?php foreach ($similarProducts2 as $similar) { ?>
                                                <div class="col-4">
                                                    <div class="item-card-info">
                                                        <div class="card-prd">
                                                            <div class="img">
                                                                <a href="product-detail.php?pid=<?=$similar['pid']?>">
                                                                    <img src="../../../public/images/thumb/<?=$similar['thumb']?>">
                                                                </a>
                                                            </div>
                                                            <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" 
                                                                data-bs-target="#compare" onclick="compare(<?=$similar['pid']?>)">
                                                                    Quick Compare
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Compare-->
                <div class="modal fade" id="compare">
                    <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <h5 class="modal-title" id="exampleModalLabel">Compare Products</h5>
                        <div class="row">
                        <div class="col-6 simi-left">
                            <div class="itm">
                            <a href="#">
                                <img src="../../../public/images/thumb/<?=$productInfo['thumb']?>">
                            </a>
                            <div class="item-inf text-center">
                                <p class="mdt my-2"><?=$productInfo['pname']?></p>
                                <p class="mdt">$<?=number_format($productInfo['price'])?></p>
                            </div>
                            </div>
                            <div class="jewel">
                            <p class="compare-title mb-2">JEWELLERY</p>
                            <p class="smt my-1"><?=$productInfo['jewelry']?></p>
                            <p class="smt mb-0">Round brilliant diamonds</p>
                            <p class="smt my-1">4mm width</p>
                            <p class="smt">Carat total weight .48</p>
                            </div>
                            <div class="line mb-2"></div>
                            <div class="mater">
                            <p class="compare-title mb-2">MATERIAL</p>
                            <p class="smt"><?=$productInfo['material']?></p>
                            </div>
                            <!-- <button type="button" class="btn btn-pri btnsm w-100" onclick="addToBag()">Add to bag</button> -->
                        </div>
                        <div class="col-6 simi-right" id="comparedProduct">
                            <!-- compare product info here -->
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <!--MAY YOU ALSO LIKE-->
                <div class="also-like">
                <h5 class="text-center">You May Also Like</h5>
                <div id="carouselalsolike" class="carousel slide carousel-dark carousel-also carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner container-fluid">
                        <?php
                        $newArrivals = new Product();
                        $getNewArrivals = $newArrivals -> getNewArrivals($productInfo['sid']);
                        if ($getNewArrivals==false) {
                            echo("<p>Fail to connect database!!</p>");
                            die();
                        }
                        $newArrivals = $newArrivals -> data;
                        $newArrivals1 = array_slice($newArrivals, 0, 4);
                        $newArrivals2 = array_slice($newArrivals, 4, 4);
                        $newArrivals3 = array_slice($newArrivals, 8, 4);
                        ?>
                        <div class="carousel-item active" data-bs-interval="4000">
                            <div class="row">
                                <?php foreach ($newArrivals1 as $new) { ?>
                                    <div class="col-3">
                                        <div class="item-card-info">
                                            <div class="card-prd">
                                                <div class="img">
                                                <a href="product-detail.php?pid=<?=$new['ID']?>">
                                                    <img src="../../../public/images/thumb/<?=$new['Thumb']?>">
                                                </a>
                                                </div>
                                                <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" 
                                                    data-bs-target="#quickview" onclick="quickview(<?=$uid?>, <?=$new['ID']?>)">
                                                        Quick view
                                                </div>
                                            </div>
                                            <div class="item-inf text-center mt-3">
                                                <p class="mdt mb-2"><?=$new['Name']?></p>
                                                <p>$<?=number_format($new['Price'])?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <div class="row">
                                <?php foreach ($newArrivals2 as $new) { ?>
                                    <div class="col-3">
                                        <div class="item-card-info">
                                            <div class="card-prd">
                                                <div class="img">
                                                <a href="product-detail.php?pid=<?=$new['ID']?>">
                                                    <img src="../../../public/images/thumb/<?=$new['Thumb']?>">
                                                </a>
                                                </div>
                                                <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" 
                                                    data-bs-target="#quickview" onclick="quickview(<?=$uid?>, <?=$new['ID']?>)">
                                                        Quick view
                                                </div>
                                            </div>
                                            <div class="item-inf text-center mt-3">
                                                <p class="mdt mb-2"><?=$new['Name']?></p>
                                                <p>$<?=number_format($new['Price'])?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <div class="row">
                                <?php foreach ($newArrivals3 as $new) { ?>
                                    <div class="col-3">
                                        <div class="item-card-info">
                                            <div class="card-prd">
                                                <div class="img">
                                                <a href="product-detail.php?pid=<?=$new['ID']?>">
                                                    <img src="../../../public/images/thumb/<?=$new['Thumb']?>">
                                                </a>
                                                </div>
                                                <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" 
                                                    data-bs-target="#quickview" onclick="quickview(<?=$uid?>, <?=$new['ID']?>)">
                                                        Quick view
                                                </div>
                                            </div>
                                            <div class="item-inf text-center mt-3">
                                                <p class="mdt mb-2"><?=$new['Name']?></p>
                                                <p>$<?=number_format($new['Price'])?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselalsolike" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselalsolike" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>
                </div>
                <!--REVIEW-->
                <?php
                require_once("../../models/model_review.php");
                $review=new model_review();
                $kq=$review->getReviewProductById($pid);
                if($kq==false){
                    die("<p>ERROR CONNECT DB</p>");
                }
                $rows=$review->data;
                if($rows!=null) 
                {
                    $countReview=count($rows);
                    $sumRate=0;
                    foreach($rows as $row){
                        $sumRate+=$row["Star_rate"];
                    }
                    $average=$sumRate/$countReview;
                    $averageFormat = number_format($average, 2);
                ?>
                <div class="review container-fluid">
                <div class="d-flex review-start">
                    <h3><?=$averageFormat?> /5</h3>
                    <div class="d-flex mx-3 my-auto">
                    <i class="fa fa-star fa-xl pr-1"></i>
                    <i class="fa fa-star fa-xl pr-1"></i>
                    <i class="fa fa-star fa-xl pr-1"></i>
                    <i class="fa fa-star fa-xl pr-1"></i>
                    <i class="fa fa-star fa-xl"></i>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="me-auto">
                        <h5><?=$countReview?> Reviews</h5>
                    </div>
                    <div class="">
                    <?php
                        if(isset($_SESSION["logined_user"])==false || $_SESSION["logined_user"]==""){
                            echo "<h6> Sign in to write a review</h6>";
                        }else{
                        ?>
                        <button class="advisor btn btnlg btn-pri w-100" data-bs-toggle="modal" type="button" data-bs-target="#review">Write a review</button>
                        <?php
                        }
                        ?>
                    </div>
                    
                </div>
                <div class="line my-3"></div>
                <div class="d-flex select-review">
                    <div class="">
                        <select class="form-select smt w-100">
                            <option selected>Sort by: Newest</option>
                            <option value="1">Highest Rating</option>
                            <option value="2">Lowest Rating</option>
                            <option value="3">Most Votes</option>
                            <option value="3">Least Votes</option>
                        </select>
                    </div>
                </div>
                <div class="review-box">
                <?php
                foreach($rows as $row){
                ?>
                    <div class="d-flex review-inner">
                        <div class="review-ava">
                            <img src="../../../public/images/product-detail/user1.png">
                        </div>
                        <div class="review-content w-100 ms-3">
                            <div class="d-flex">
                                <p class="me-auto mb10 user-name mdt"><?=$row["Name"]?></p>
                                <span class="smt"><?=($row["Updated_at"]==null)?$row["Created_at"]:$row["Updated_at"]?></span>
                            </div>
                            <div>
                                <div class="d-flex rate-start">
                                    <?php 
                                    $star_rate=$row["Star_rate"];
                                    for($i=0;$i<$star_rate;$i++)
                                    {
                                    ?>
                                        <i class="fa-star fa"></i>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="d-flex">
                                <p class="user-cmt smt me-auto"><?=$row["Comments"]?></p>
                            </div>
                        </div>
                    </div>
                    <div class="line mb-3"></div>
                <?php
                }
                ?>
                </div>
                <?php
                }else{
                ?>
                    <div class="d-flex review-start">
                    <h5>There are no reviews yet</h5>
                    </div>
                    <!-- OPEN Modal ADD REVIEW - css lại -->
                    <div style ="text-align: center;">
                        <?php
                        if(isset($_SESSION["logined_user"])==false || $_SESSION["logined_user"]==""){
                            echo "<p> Sign in to write a review</p>";
                        }else{
                        ?>
                        <button class="advisor btn btnlg btn-pri w-100" data-bs-toggle="modal" type="button" data-bs-target="#review">Write a review</button>
                        <?php
                        }
                        ?>
                    </div>
                    <!-- END  Modal ADD REVIEW -->
                <?php    
                }
                ?>
                <!-- Modal review -->
                <div class="modal fade" id="review">
                    <form method="post" name="frmAddReview" id="frmAddReview" action="../../controllers/controller_add_review.php">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <h5 class="modal-title mb-4">Write A Review</h5>
                                <p class="mdt">Select your rating</p>
                                <div class="rating-stars mb-3">
                                    <input type="radio" name="rating" id="star-5" value="5">
                                    <label for="star-5">&#9733;</label>
                                    <input type="radio" name="rating" id="star-4" value="4">
                                    <label for="star-4">&#9733;</label>
                                    <input type="radio" name="rating" id="star-3" value="3">
                                    <label for="star-3">&#9733;</label>
                                    <input type="radio" name="rating" id="star-2" value="2">
                                    <label for="star-2">&#9733;</label>
                                    <input type="radio" name="rating" id="star-1" value="1">
                                    <label for="star-1">&#9733;</label>
                                </div>
                                <label>Message (*)</label>
                                <textarea name="message" class="inpu" rows="4" required></textarea>
                                <div class="email-user">
                                    <label>Email address</label>
                                    <input class="inpu" type="email" value="<?=$_SESSION["user_email"]?>" required disabled><br>
                                </div>
                                <div class="review-name">
                                    <label>Your name</label>
                                    <input class="inpu" type="text" value="<?=$_SESSION["user_name"]?>" required disabled>
                                </div>
                                <div>
                                    <input type="hidden" name="pid" id="pid" value="<?=$pid?>">
                                    <input type="hidden" name="cid" id="cid" value="<?=$_SESSION["user_id"]?>">

                                </div>
                                <button name="b1" type="submit" class="btn btn-pri btnReview">Send</button>
    
                                </div>
                        </div>
                    </form>
                </div>
       
        <!-- modal quickview -->
        <?php require_once '../includes/quickviewAJAX.php';?>
        <?php require_once '../includes/addBagAJAX.php';?>


        <div>
            <?php require_once '../includes/footer.php';?>
        </div> 

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

        <script>
            // zoom in image
            function zoomIn(url) {
                var clickedImage = document.getElementById('clickedImage');
                clickedImage.src = "../../../public/images" + url;
            }

            // compare product
            function compare(uid, pid) {
                // Make an AJAX request to fetch the similarInfo using pid
                $.ajax({
                    url: 'compareAJAX.php',
                    type: 'GET',
                    data: { 
                        uid: uid,
                        pid: pid 
                    },
                    success: function(response) {
                        console.log('similarInfo:', response); // Log the value of similarInfo received from the server
                        // Update the comparedProduct element with the received data
                        var compare = document.getElementById('comparedProduct');
                        compare.innerHTML = `
                            <div class="itm">
                                <a href="product-detail.php?pid=${response.ID}">
                                    <img src="../../../public/images/thumb/${response.Thumb}">
                                </a>
                                <div class="item-inf text-center">
                                    <p class="mdt my-2">${response.Name}</p>
                                    <p class="mdt">$${response.Price.replace(/\B(?=(\d{3})+(?!\d))/g, ".")}</p>
                                </div>
                            </div>
                            <div class="jewel">
                                <p class="compare-title mb-2">JEWELLERY</p>
                                <p class="smt my-1">${response.Jewelry_type}</p>
                                <p class="smt mb-0">Pear brilliant diamonds</p>
                                <p class="smt my-1">2.5mm width x2</p>
                                <p class="smt">Carat total weight .50</p>
                            </div>
                            <div class="line mb-2"></div>
                            <div class="mater">
                                <p class="compare-title mb-2">MATERIAL</p>
                                <p class="smt">${response.Material}</p>
                            </div>
                        `;
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText); // Log any errors
                    }
                });

                // Return true or perform any other desired operations
                return true;
            }
        </script>

    </body>
</html>