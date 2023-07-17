<?php define('URLROOT', 'http://localhost:8888/project-php');
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c813cf59a3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/fonts.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/home.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style.css">
</head>

<body>
    <div>
        <?php error_reporting(E_ALL); ?>
        <?php require '../includes/header.php'; ?>
        <?php require("../../models/model_product_ex.php"); ?>
    </div>
    <div>
        <div class="ctg">
            <div class="row ctg-inner">
                <div class="ctg-left col-8">
                    <div class="ctg-left-top">
                        <div class="d-flex">
                            <div class="left-top">
                                <div class="ctg-img-inner">
                                    <div class="image-ctg">
                                        <a>
                                            <img src="../../../public/images/shop-all/ctg1.webp">
                                        </a>
                                        <div class="name-ctg text-center">
                                            <h6 class="mb-2">Beaufille Collection</h6>
                                            <a class="text-light" href="category.php?category=rings">Shop Rings Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="center-top">
                                <div class="ctg-img-inner">
                                    <div class="image-ctg">
                                        <a>
                                            <img src="../../../public/images/shop-all/ctg2.webp">
                                        </a>
                                        <div class="name-ctg text-center">
                                            <h6 class="mb-2">Beaufille Collection</h6>
                                            <a class="text-light" href="category.php?category=bracelets">Shop Bracelets Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ctg-left-btm">
                        <div class="d-flex">
                            <div class="left-btm">
                                <div class="ctg-img-inner">
                                    <a>
                                        <img src="../../../public/images/shop-all/ctg4.webp">
                                    </a>
                                </div>
                            </div>
                            <div class="center-btm">
                                <div class="ctg-img-inner">
                                    <div class="image-ctg">
                                        <a>
                                            <img src="../../../public/images/shop-all/ctg5.webp">
                                        </a>
                                        <div class="name-ctg text-center">
                                            <h6 class="mb-2">Beaufille Collection</h6>
                                            <a class="text-light" href="category.php?category=necklaces">Shop Necklaces Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ctg-right col-4">
                    <div class="right-top">
                        <div class="ctg-img-inner">
                            <div class="image-ctg">
                                <a>
                                    <img src="../../../public/images/shop-all/ctg3.webp">
                                </a>
                                <div class="name-ctg text-center">
                                    <h6 class="mb-2">Beaufille Collection</h6>
                                    <a class="text-light" href="category.php?category=earrings">Shop Earrings Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-btm">
                        <div class="ctg-img-inner">
                            <a>
                                <img src="../../../public/images/shop-all/ctg6.webp">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <!--New Arrivals-->
                <div class="simi-prod new-arrivals mbt-120">
                    <div class="row">
                        <div class="col-3">
                            <h5 class="mt-5">New Arrivals</h5>
                            <p class="mt-2 mb-4">We designs reinvent our iconic collection with bold profiles and powerful details.</p>
                            <!-- <a href="category.php"> -->
                            <p class="shop-all-new">Shop all new items</p>
                            <!-- </a> -->
                        </div>
                        <div class="col-9">
                            <div id="newarrival" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <?php
                                    $getNewArrivalsDB = new Product();
                                    $getNewArrivals = $getNewArrivalsDB->getNewArrivals();
                                    if ($getNewArrivals == false) {
                                        echo ("<p>Fail to connect database!!</p>");
                                        die();
                                    }
                                    $newArrivals = $getNewArrivalsDB->data;
                                    if ($newArrivals != null) {
                                        $newArrivals1 = array_slice($newArrivals, 0, 3);
                                        $newArrivals2 = array_slice($newArrivals, 3, 3);
                                        $newArrivals3 = array_slice($newArrivals, 6, 3);
                                    }
                                    ?>
                                    <div class="carousel-item active" data-bs-interval="1300">
                                        <div class="row">
                                            <?php foreach ($newArrivals1 as $new) {  ?>
                                                <div class="col-4">
                                                    <div class="item-card-info">
                                                        <div class="card-prd">
                                                            <div class="img">
                                                                <a href="product-detail.php?pid=<?= $new['ID'] ?>">
                                                                    <img src="../../../public/images/thumb/<?= $new['Thumb'] ?>">
                                                                </a>
                                                            </div>
                                                            <div  class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                                                                Quick view
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="carousel-item" data-bs-interval="1300">
                                        <div class="row">
                                            <?php
                                            if ($newArrivals2 != null)
                                                foreach ($newArrivals2 as $new) {
                                            ?>
                                                <div class="col-4">
                                                    <div class="item-card-info">
                                                        <div class="card-prd">
                                                            <div class="img">
                                                                <a href="product-detail.php?pid=<?= $new['ID'] ?>">
                                                                    <img src="../../../public/images/thumb/<?= $new['Thumb'] ?>">
                                                                </a>
                                                            </div>
                                                            <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                                                                Quick view
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="carousel-item" data-bs-interval="1300">
                                        <div class="row">
                                            <?php
                                            if ($newArrivals3 != null)
                                                foreach ($newArrivals3 as $new) {
                                            ?>
                                                <div class="col-4">
                                                    <div class="item-card-info">
                                                        <div class="card-prd">
                                                            <div class="img">
                                                                <a href="product-detail.php?pid=<?= $new['ID'] ?>">
                                                                    <img src="../../../public/images/thumb/<?= $new['Thumb'] ?>">
                                                                </a>
                                                            </div>
                                                            <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                                                                Quick view
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

                <!--All-jewellery-->
                <div class="all-jewelery mbt-120">
                    <div class="row mbt">
                        <div class="col-4 all-top">
                            <div class="top-content">
                                <h5 class="mb-1">Aguri's Jewellery</h5>
                                <p class="smt mb-3">Forward-thinking fine jewelry essentials for individuals of all.</p>
                            </div>
                            <div class="item-box-all">
                                <div class="item-box-img box-ring">
                                    <a href="category.php?category=rings">
                                        <img src="../../../public/images/home/all-j1.webp" />
                                    </a>
                                </div>
                                <div class="item-box-content text-center">
                                    <a href="category.php?category=rings">
                                        <h5>Rings</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="item-box-all">
                                <div class="item-box-img">
                                    <a href="category.php?category=necklaces">
                                        <img src="../../../public/images/home/all-j2.webp" />
                                    </a>
                                </div>
                                <div class="item-box-content text-center">
                                    <a href="category.php?category=necklaces">
                                        <h5>Necklaces</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row all-bottom">
                        <div class="col-4 bottom-content">
                            <div class="bottom-content-inner">
                                <p class="text-right decor-text mb-0">Forward-thinking fine jewelry essentials for individuals of all genders that breathe new life into classic silhouettes.</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="item-box-all">
                                <div class="item-box-img">
                                    <a href="category.php?category=earrings">
                                        <img src="../../../public/images/home/all-j3.webp" />
                                    </a>
                                </div>
                                <div class="item-box-content text-center">
                                    <a href="category.php?category=earrings">
                                        <h5>Earrings</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="item-box-all">
                                <div class="item-box-img">
                                    <a href="category.php?category=bracelets">
                                        <img src="../../../public/images/home/all-j4.webp" />
                                    </a>
                                </div>
                                <div class="item-box-content text-center">
                                    <a href="category.php?category=bracelets">
                                        <h5>Bracelets</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="change-bg">
                <!--BEST SELLERS-->
                <div class="also-like best-seller mbt-120">
                    <h5 class="text-center mb-4">Best Sellers</h5>
                    <div id="carouselalsolike" class="carousel slide carousel-dark carousel-also carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner container-fluid">
                            <div class="carousel-item active" data-bs-interval="4000">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="item-card-info">
                                            <div class="card-prd">
                                                <div class="img">
                                                    <a href="#">
                                                        <img src="../../../public/images/product-detail/also-like1.webp">
                                                    </a>
                                                </div>
                                                <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                                                    Quick view
                                                </div>
                                            </div>
                                            <div class="item-inf text-center mt-3">
                                                <p class="mdt mb-2">Lynn Ring</p>
                                                <p>$7,000</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="item-card-info">
                                            <div class="card-prd">
                                                <div class="img">
                                                    <a href="#">
                                                        <img src=".../../../public/images/product-detail/also-like2.webp">
                                                    </a>
                                                </div>
                                                <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                                                    Quick view
                                                </div>
                                            </div>
                                            <div class="item-inf text-center mt-3">
                                                <p class="mdt mb-2">Lynn Ring</p>
                                                <p>$7,000</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="item-card-info">
                                            <div class="card-prd">
                                                <div class="img">
                                                    <a href="#">
                                                        <img src="../../../public/images/product-detail/also-like3.webp">
                                                    </a>
                                                </div>
                                                <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                                                    Quick view
                                                </div>
                                            </div>
                                            <div class="item-inf text-center mt-3">
                                                <p class="mdt mb-2">Lynn Ring</p>
                                                <p>$7,000</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="item-card-info">
                                            <div class="card-prd">
                                                <div class="img">
                                                    <a href="#">
                                                        <img src="../../../public/images/product-detail/also-like4.webp">
                                                    </a>
                                                </div>
                                                <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                                                    Quick view
                                                </div>
                                            </div>
                                            <div class="item-inf text-center mt-3">
                                                <p class="mdt mb-2">Lynn Ring</p>
                                                <p>$7,000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="item-card-info">
                                            <div class="card-prd">
                                                <div class="img">
                                                    <a href="#">
                                                        <img src="../../../public/images/product-detail/also-like5.webp">
                                                    </a>
                                                </div>
                                                <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                                                    Quick view
                                                </div>
                                            </div>
                                            <div class="item-inf text-center mt-3">
                                                <p class="mdt mb-2">Lynn Ring</p>
                                                <p>$7,000</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="item-card-info">
                                            <div class="card-prd">
                                                <div class="img">
                                                    <a href="#">
                                                        <img src="../../../public/images/product-detail/also-like6.webp">
                                                    </a>
                                                </div>
                                                <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                                                    Quick view
                                                </div>
                                            </div>
                                            <div class="item-inf text-center mt-3">
                                                <p class="mdt mb-2">Lynn Ring</p>
                                                <p>$7,000</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="item-card-info">
                                            <div class="card-prd">
                                                <div class="img">
                                                    <a href="#">
                                                        <img src="../../../public/images/product-detail/also-like7.webp">
                                                    </a>
                                                </div>
                                                <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                                                    Quick view
                                                </div>
                                            </div>
                                            <div class="item-inf text-center mt-3">
                                                <p class="mdt mb-2">Lynn Ring</p>
                                                <p>$7,000</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="item-card-info">
                                            <div class="card-prd">
                                                <div class="img">
                                                    <a href="#">
                                                        <img src="../../../public/images/product-detail/also-like8.webp">
                                                    </a>
                                                </div>
                                                <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                                                    Quick view
                                                </div>
                                            </div>
                                            <div class="item-inf text-center mt-3">
                                                <p class="mdt mb-2">Lynn Ring</p>
                                                <p>$7,000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="item-card-info">
                                            <div class="card-prd">
                                                <div class="img">
                                                    <a href="#">
                                                        <img src="../../../public/images/product-detail/also-like5.webp">
                                                    </a>
                                                </div>
                                                <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                                                    Quick view
                                                </div>
                                            </div>
                                            <div class="item-inf text-center mt-3">
                                                <p class="mdt mb-2">Lynn Ring</p>
                                                <p class="smt">$7,000</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="item-card-info">
                                            <div class="card-prd">
                                                <div class="img">
                                                    <a href="#">
                                                        <img src="../../../public/images//product-detail/also-like6.webp">
                                                    </a>
                                                </div>
                                                <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                                                    Quick view
                                                </div>
                                            </div>
                                            <div class="item-inf text-center mt-3">
                                                <p class="mdt mb-2">Lynn Ring</p>
                                                <p class="smt">$7,000</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="item-card-info">
                                            <div class="card-prd">
                                                <div class="img">
                                                    <a href="#">
                                                        <img src="../../../public/images/product-detail/also-like7.webp">
                                                    </a>
                                                </div>
                                                <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                                                    Quick view
                                                </div>
                                            </div>
                                            <div class="item-inf text-center mt-3">
                                                <p class="mdt mb-2">Lynn Ring</p>
                                                <p class="smt">$7,000</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="item-card-info">
                                            <div class="card-prd">
                                                <div class="img">
                                                    <a href="#">
                                                        <img src="../../../public/images/product-detail/also-like8.webp">
                                                    </a>
                                                </div>
                                                <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                                                    Quick view
                                                </div>
                                            </div>
                                            <div class="item-inf text-center mt-3">
                                                <p class="mdt mb-2">Lynn Ring</p>
                                                <p class="smt">$7,000</p>
                                            </div>
                                        </div>
                                    </div>
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
                <!--All about us-->
                <div class="about row mbt-120">
                    <div class="col-2"></div>
                    <div class="col-8 text-center">
                        <h4 class="mb-3">We Are More Than Jewels</h4>
                        <p class="smt mt-40 mb-5">
                            Aguri is a fine jewelry destination for memorable pieces designed and crafted in New York City.
                            Our carefully considered selection of rings, necklaces, earrings and bracelets honors mindful production and genuine materials.
                        </p>
                        <button class="btn btnlg btn-pri" href="about-us.php">More about us</button>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
            <!--New collection-->
            <div class="aguri-collection">
                <div class=" new-collection mbt-120 container-fluid">
                    <div class="row">
                        <div class="col-5 new-collection-left ps-0">
                            <a href="#">
                                <img src="../../../public/images/home/feature1.png">
                            </a>
                        </div>
                        <div class="col"></div>
                        <div class="col-6 new-collection-right pe-0">
                            <div class="row new-collection-top">
                                <div class="col-6 feature-img2 ps-0 new-collection-img">
                                    <div class="collection-img">
                                        <a href="#">
                                            <img src="../../../public/images/home/feature2.png">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 pe-0 new-collection-img">
                                    <div class="collection-img">
                                        <a href="#">
                                            <img src="../../../public/images/home/feature3.png">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="new-collection-bottom">
                                <div class="text-center new-collection-content">
                                    <p class="mdt mb-1">Less is more</p>
                                    <h5 class="mb-2">Embody the beauty of impermanence</h5>
                                    <p class="smt mb-4">Forward-thinking fine jewelry essentials for individuals of all genders that breathe new life into classic
                                        silhouettes.</p>
                                    <button class="btn btnlg btn-pri" type="button">Shop now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Users Experiences-->
            <div class="experiences mbt-120">
                <div class="container-fluid">
                    <h4 class="text-center mb-5">The Aguri Experience</h4>
                    <div class="row">
                        <div class="col-4 text-center ps-0 experience-user">
                            <div class="px-4 experience-inner">
                                <i class="fas fa-truck fa-2xl"></i>
                                <p class="mdt mb-0 mt-3 mb-2">Complimentary Shipping & Returns</p>
                                <p class="smt">We offer complimentary shipping and returns on all AGURI's order</p>
                                <a class="decor-text">Learn more <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-4 text-center">
                            <div class="px-4">
                                <i class="fas fa-calendar fa-2xl"></i>
                                <p class="mdt mb-0 mt-3 mb-2">Complimentary Shipping & Returns</p>
                                <p class="smt">We offer complimentary shipping and returns on all AGURI's order</p>
                                <a class="decor-text">Book now <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-4 text-center pe-0">
                            <div class="px-4">
                                <i class="fas fa-gift fa-2xl"></i>
                                <p class="mdt mb-0 mt-3 mb-2">Complimentary Shipping & Returns</p>
                                <p class="smt">We offer complimentary shipping and returns on all AGURI's order</p>
                                <a class="decor-text">Explore gift <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Showroom-->
            <div class="container-fluid showroom mbt-120">
                <div class="row">
                    <div class="col-3 ps-0">
                        <h5 class="mb-3">Our Showrooms</h5>
                        <p class="smt mb-1"><i class="fas fa-map-marker-alt"></i> 6901 Hollywood Blvd, LA, CA 90028, US</p>
                        <p class="smt"><i class="fas fa-map-marker-alt"></i> 10 NorthumbeCartrland St, LD WC2N5DB, UK</p>
                        <p class="smt mt-3">Email info@AGURI&PIJ2022.com for appointment</p>
                    </div>
                    <div class="col-2 showroom bottom-content">
                        <div class="bottom-content-inner">
                            <p class="text-right decor-text mb-0">We're happy to help with in-store or virtual appointments</p>
                        </div>
                    </div>
                    <div class="col-7 pe-0">
                        <!--carousel showroom-->
                        <div id="carouselshowroom" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselshowroom" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselshowroom" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselshowroom" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="1000">
                                    <img src="../../../public/images/home/showroom1.webp" />
                                </div>
                                <div class="carousel-item" data-bs-interval="1000">
                                    <img src="../../../public/images/home/showroom2.webp" />
                                </div>
                                <div class="carousel-item" data-bs-interval="1000">
                                    <img src="../../../public/images/home/showroom3.webp" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--GET INSPIRATION-->
            <div class="inspiration mbt-120">
                <h5 class="mb-2 text-center">Get Inspiration</h5>
                <p class="smt mb-4 text-center">Tag us on your insta to get a chance for a feature</p>
                <div id="inspiration-carousel" class="carousel slide carousel-fade carousel-dark" data-bs-ride="carousel">
                    <div class="carousel-inner container-fluid">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <div class="row">
                                <div class="col-3 px-0">
                                    <img src="../../../public/images/home/follow1.webp" />
                                </div>
                                <div class="col-3 px-0">
                                    <img src="../../../public/images/home/follow2.webp" />
                                </div>
                                <div class="col-3 px-0">
                                    <img src="../../../public/images/home/follow3.webp" />
                                </div>
                                <div class="col-3 px-0">
                                    <img src="../../../public/images/home/follow4.webp" />
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <div class="row">
                                <div class="col-3 px-0">
                                    <img src="../../../public/images/home/follow5.webp" />
                                </div>
                                <div class="col-3 px-0">
                                    <img src="../../../public/images//home/follow6.webp" />
                                </div>
                                <div class="col-3 px-0">
                                    <img src="../../../public/images/home/follow7.webp" />
                                </div>
                                <div class="col-3 px-0">
                                    <img src="../../../public/images/home/follow8.webp" />
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <div class="row">
                                <div class="col-3 px-0">
                                    <img src="../../../public/images/home/follow9.webp" />
                                </div>
                                <div class="col-3 px-0">
                                    <img src="../../../public/images/home/follow10.webp" />
                                </div>
                                <div class="col-3 px-0">
                                    <img src="../../../public/images/home/follow11.webp" />
                                </div>
                                <div class="col-3 px-0">
                                    <img src="../../../public/images/home/follow12.webp" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <div>
            <?php require_once '../includes/footer.php'; ?>
        </div>
</body>

</html>