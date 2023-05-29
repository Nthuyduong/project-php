<!DOCTYPE html>
<html>
    <head>
        <title>Sub-Category</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/c813cf59a3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="../css/fonts.css">
        <Link rel="stylesheet" type="text/css" href="../css/sub-category.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <div class="">
            <?php include 'header.php';?>
        </div>
        <div>
            <!--category-top-->
            <div class="banner">
            <div class="container-fluid category-top-text">
                <div class="row">
                <div class="col-4">
                    <h4 class="mb-3">Eternity Rings</h4>
                    <p>Meticulously crafted with Tiffany’s renowned diamonds, these are rings to wear-and love-for eternity.
                    Wear one on its own or stacked with an engagement ring</p>
                </div>
                <div class="col-8"></div>
                </div>
            </div>
            </div>
            <div class="container-fluid body-main">
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
                        <li class="breadcrumb-item"><a href="#">Shop all</a></li>
                        <li class="breadcrumb-item"><a href="category.php">Rings</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a>Eternity</a></li>
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
                    <div class="col-3 card mb-9">
                        <div class="item-card-info">
                        <div class="card-prd">
                            <div class="img">
                            <a href="product-detail.php">
                                <img src="../images/rings/1.4.1.webp">
                            </a>
                            </div>
                            <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                            Quick view
                            </div>
                        </div>
                        <div class="item-inf text-center mt-2">
                            <p class="decor-text mb-1">Lynn Ring</p>
                            <p class="smt item-price">$8.700,00
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="col-3 card mb-9">
                        <div class="item-card-info">
                        <div class="card-prd">
                            <div class="img">
                            <a href="product-detail.php">
                                <img src="../images/rings/1.5.1.webp">
                            </a>
                            </div>
                            <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                            Quick view
                            </div>
                        </div>
                        <div class="item-inf text-center mt-2">
                            <p class="decor-text mb-1">Lynn Ring</p>
                            <p class="smt item-price">$8.700,00
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="col-3 card mb-9">
                        <div class="item-card-info">
                        <div class="card-prd">
                            <div class="img">
                            <a href="product-detail.php">
                                <img src="../images/rings/1.4.1.webp">
                            </a>
                            </div>
                            <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                            Quick view
                            </div>
                        </div>
                        <div class="item-inf text-center mt-2">
                            <p class="decor-text mb-1">Lynn Ring</p>
                            <p class="smt item-price">$8.700,00
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="col-3 card mb-9">
                        <div class="item-card-info">
                        <div class="card-prd">
                            <div class="img">
                            <a href="product-detail.php">
                                <img src="../images/rings/1.5.1.webp">
                            </a>
                            </div>
                            <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                            Quick view
                            </div>
                        </div>
                        <div class="item-inf text-center mt-2">
                            <p class="decor-text mb-1">Lynn Ring</p>
                            <p class="smt item-price">$8.700,00
                            </p>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="row cate-product">
                    <div class="col-3 card mb-9">
                        <div class="item-card-info">
                        <div class="card-prd">
                            <div class="img">
                            <a href="product-detail.php">
                                <img src="../images/rings/more-rings/26.webp">
                            </a>
                            </div>
                            <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                            Quick view
                            </div>
                        </div>
                        <div class="item-inf text-center mt-2">
                            <p class="decor-text mb-1">Lynn Ring</p>
                            <p class="smt item-price">$8.700,00
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="col-3 card mb-9">
                        <div class="item-card-info">
                        <div class="card-prd">
                            <div class="img">
                            <a href="product-detail.php">
                                <img src="../images/rings/more-rings/23.webp">
                            </a>
                            </div>
                            <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                            Quick view
                            </div>
                        </div>
                        <div class="item-inf text-center mt-2">
                            <p class="decor-text mb-1">Lynn Ring</p>
                            <p class="smt item-price">$8.700,00
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="col-3 card mb-9">
                        <div class="item-card-info">
                        <div class="card-prd">
                            <div class="img">
                            <a href="product-detail.php">
                                <img src="../images/rings/more-rings/25.webp">
                            </a>
                            </div>
                            <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                            Quick view
                            </div>
                        </div>
                        <div class="item-inf text-center mt-2">
                            <p class="decor-text mb-1">Lynn Ring</p>
                            <p class="smt item-price">$8.700,00
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="col-3 card mb-9">
                        <div class="item-card-info">
                        <div class="card-prd">
                            <div class="img">
                            <a href="product-detail.php">
                                <img src="../images/rings/more-rings/24.webp">
                            </a>
                            </div>
                            <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                            Quick view
                            </div>
                        </div>
                        <div class="item-inf text-center mt-2">
                            <p class="decor-text mb-1">Lynn Ring</p>
                            <p class="smt item-price">$8.700,00
                            </p>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="row cate-product">
                    <div class="col-3 card mb-9">
                        <div class="item-card-info">
                        <div class="card-prd">
                            <div class="img">
                            <a href="product-detail.php">
                                <img src="../images/rings/more-rings/27.webp">
                            </a>
                            </div>
                            <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                            Quick view
                            </div>
                        </div>
                        <div class="item-inf text-center mt-2">
                            <p class="decor-text mb-1">Lynn Ring</p>
                            <p class="smt item-price">$8.700,00
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="col-3 card mb-9">
                        <div class="item-card-info">
                        <div class="card-prd">
                            <div class="img">
                            <a href="product-detail.php">
                                <img src="../images/rings/more-rings/28.webp">
                            </a>
                            </div>
                            <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                            Quick view
                            </div>
                        </div>
                        <div class="item-inf text-center mt-2">
                            <p class="decor-text mb-1">Lynn Ring</p>
                            <p class="smt item-price">$8.700,00
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="col-3 card mb-9">
                        <div class="item-card-info">
                        <div class="card-prd">
                            <div class="img">
                            <a href="product-detail.php">
                                <img src="../images/rings/more-rings/29.webp">
                            </a>
                            </div>
                            <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                            Quick view
                            </div>
                        </div>
                        <div class="item-inf text-center mt-2">
                            <p class="decor-text mb-1">Lynn Ring</p>
                            <p class="smt item-price">$8.700,00
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="col-3 card mb-9">
                        <div class="item-card-info">
                        <div class="card-prd">
                            <div class="img">
                            <a href="product-detail.php">
                                <img src="../images/rings/more-rings/33.webp">
                            </a>
                            </div>
                            <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                            Quick view
                            </div>
                        </div>
                        <div class="item-inf text-center mt-2">
                            <p class="decor-text mb-1">Lynn Ring</p>
                            <p class="smt item-price">$8.700,00
                            </p>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="row cate-product">
                    <div class="col-3 card mb-9">
                        <div class="item-card-info">
                        <div class="card-prd">
                            <div class="img">
                            <a href="product-detail.php">
                                <img src="../images/rings/1.1.1.webp">
                            </a>
                            </div>
                            <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                            Quick view
                            </div>
                        </div>
                        <div class="item-inf text-center mt-2">
                            <p class="decor-text mb-1">Lynn Ring</p>
                            <p class="smt item-price">$8.700,00
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="col-3 card mb-9">
                        <div class="item-card-info">
                        <div class="card-prd">
                            <div class="img">
                            <a href="product-detail.php">
                                <img src="../images/rings/1.2.1.webp">
                            </a>
                            </div>
                            <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                            Quick view
                            </div>
                        </div>
                        <div class="item-inf text-center mt-2">
                            <p class="decor-text mb-1">Lynn Ring</p>
                            <p class="smt item-price">$8.700,00
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="col-3 card mb-9">
                        <div class="item-card-info">
                        <div class="card-prd">
                            <div class="img">
                            <a href="product-detail.php">
                                <img src="../images/rings/1.2.2.webp">
                            </a>
                            </div>
                            <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                            Quick view
                            </div>
                        </div>
                        <div class="item-inf text-center mt-2">
                            <p class="decor-text mb-1">Lynn Ring</p>
                            <p class="smt item-price">$8.700,00
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="col-3 card mb-9">
                        <div class="item-card-info">
                        <div class="card-prd">
                            <div class="img">
                            <a href="product-detail.php">
                                <img src="../images/rings/1.3.1.webp">
                            </a>
                            </div>
                            <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                            Quick view
                            </div>
                        </div>
                        <div class="item-inf text-center mt-2">
                            <p class="decor-text mb-1">Lynn Ring</p>
                            <p class="smt item-price">$8.700,00
                            </p>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="row cate-product">
                    <div class="col-3 card mb-9">
                        <div class="item-card-info">
                        <div class="card-prd">
                            <div class="img">
                            <a href="product-detail.php">
                                <img src="../images/rings/more-rings/16.webp">
                            </a>
                            </div>
                            <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                            Quick view
                            </div>
                        </div>
                        <div class="item-inf text-center mt-2">
                            <p class="decor-text mb-1">Lynn Ring</p>
                            <p class="smt item-price">$8.700,00
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="col-3 card mb-9">
                        <div class="item-card-info">
                        <div class="card-prd">
                            <div class="img">
                            <a href="product-detail.php">
                                <img src="../images/rings/more-rings/20.webp">
                            </a>
                            </div>
                            <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                            Quick view
                            </div>
                        </div>
                        <div class="item-inf text-center mt-2">
                            <p class="decor-text mb-1">Lynn Ring</p>
                            <p class="smt item-price">$8.700,00
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="col-3 card mb-9">
                        <div class="item-card-info">
                        <div class="card-prd">
                            <div class="img">
                            <a href="product-detail.php">
                                <img src="../images/rings/more-rings/21.webp">
                            </a>
                            </div>
                            <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                            Quick view
                            </div>
                        </div>
                        <div class="item-inf text-center mt-2">
                            <p class="decor-text mb-1">Lynn Ring</p>
                            <p class="smt item-price">$8.700,00
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="col-3 card mb-9">
                        <div class="item-card-info">
                        <div class="card-prd">
                            <div class="img">
                            <a href="product-detail.php">
                                <img src="../images/rings/more-rings/19.webp">
                            </a>
                            </div>
                            <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                            Quick view
                            </div>
                        </div>
                        <div class="item-inf text-center mt-2">
                            <p class="decor-text mb-1">Lynn Ring</p>
                            <p class="smt item-price">$8.700,00
                            </p>
                        </div>
                        </div>
                    </div>
                    </div>
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
        </div>
        <div class="">
            <?php include 'footer.php';?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>