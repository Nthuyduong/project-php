<?php define('URLROOT', 'http://localhost:8888/project-php'); 
session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <title>Shopping cart</title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> -->
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/fonts.css">
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/cart.css">
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/style.css">
    </head>

    <body>
        <?php  error_reporting(E_ALL); ?>
        <?php require_once '../includes/header.php'?>
        <?php require("../../models/model_product_ex.php"); ?>
        <?php require("../../models/model_order_ex.php"); ?>

        <div class="container-fluid shopping-bag">
            <?php if (isset($_SESSION['uid'])==FALSE) { ?>
                <div class="my-4">
                    <h4>Please signin/ signup to see your shopping cart.</h4>
                    <a href="home.php">Back to homepage</a>
                </div>
            <?php } else { ?>
                <?php 
                    $uid = $_SESSION['uid']; 
                    // $uid = 25; // test with uid = 25
                    $OrderDB = new Order();
                    $getCartProducts = $OrderDB -> getCartProducts($uid);
                    if ($getCartProducts==false) {
                        echo("<p>Fail to connect database!!</p>");
                        die();
                    }
                    $cartProducts = $OrderDB -> data;
                ?>
                <h4 class="my-4">Shopping Bag</h4>
                    <?php if (count($cartProducts)==0) { ?>
                        <div class="my-4">
                            <h4>Your shopping cart is empty.</h4>
                            <a href="home.php">Back to homepage</a>
                        </div>
                    <?php } else { ?>
                        <div class="table-summary">
                            <div class="t-head row align-middle py-3 mb-3">
                                <div class="col-5">
                                    <p class="mb-0">Product</p>
                                </div>
                                <div class="col-2">
                                    <p class="mb-0">Size</p>
                                </div>
                                <div class="col-2">
                                    <p class="mb-0">Quantity</p>
                                </div>
                                <div class="col-2">
                                    <p class="mb-0">Price</p>
                                </div>
                                <div class="col">
                                    <p class="mb-0">Remove</p>
                                </div>
                            </div>

                            <?php foreach ($cartProducts as $cart) { ?>
                                <div class="t-row1 row">
                                    <div class="col-2">
                                        <img src="../../../public/images/thumb/<?=$cart['Thumb']?>">
                                    </div>
                                    <div class="col-3">
                                        <p><?=$cart['Name']?></p>
                                    </div>
                                    <div class="col-2"><?=$cart['Size']?></div>
                                    <div class="col-2">x <?=$cart['Quantity']?></div>
                                    <div class="col-2">
                                        <p>$<?=number_format($cart['Price']*$cart['Quantity'])?></p>
                                    </div>
                                    <div class="col">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </div>
                                </div>
                            <?php } ?>
                            
                        </div>
                        <div class="row">
                            <div class="col-3 ps-0">
                            <button class="btn btn-sec btnlg" type="button" data-bs-toggle="modal" data-bs-target="#personalnote">Send a personal note</button>
                            <!--Modal personal note-->
                            <div class="modal fade" id="personalnote">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <form ngNativeValidate onsubmit="alert('We have received your note.')">
                                        <h5 class="modal-title mb-4">Personal Note</h5>
                                        <p class="smt">Write below the message you want to include below. Your message will be printed in a cardboard
                                            that will be shipped with your order. Your personal note will be automatically saved when you click "SEND".</p>
                                        <div class="my-3">
                                            <label>Write your personal note here</label>
                                            <textarea name="standalone" class="inpu" rows="4" required></textarea>
                                        </div>
                                        <button type="submit" class="mt-2 btn btn-pri w-100" data-bs-dismiss="modal">Send</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4"></div>
                            <div class="col-5 pe-0">
                                <div class="d-flex mb-4">
                                    <h6 class="me-auto">Subtotal</h6>
                                    <h6>$<?=number_format($cart['Grand total'])?></h6>
                                </div>
                                <p class="smt">Receive it in Vietnam in 4 - 6 business day/s with Express Shipping.</p>
                                <button id="cartCheckoutBtn" class="btn btn-pri btnlg w-100">Check out</button>
                            </div>
                        </div>
                <?php } ?>
            <!-- </div> -->
            <?php } ?>

            <!--MAY YOU ALSO LIKE-->
            <div class="also-like">
            <h5 class="text-center">You May Also Like</h5>
            <div id="carouselalsolike" class="carousel slide carousel-dark carousel-also carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner container-fluid">
                    <?php
                        $getBestSellersDB = new Product();
                        $getBestSellers = $getBestSellersDB -> getBestSellers();
                        if ($getBestSellers==false) {
                            echo("<p>Fail to connect database!!</p>");
                            die();
                        }
                        $bestSellers = $getBestSellersDB -> data;
                        $bestSellers1 = array_slice($bestSellers, 0, 4);
                        $bestSellers2 = array_slice($bestSellers, 4, 4);
                        $bestSellers3 = array_slice($bestSellers, 8, 4);
                    ?>
                    <div class="carousel-item active" data-bs-interval="3000">
                        <div class="row">
                            <?php foreach ($bestSellers1 as $bestSeller) { ?>
                                <div class="col-3">
                                    <div class="item-card-info">
                                    <div class="card-prd">
                                        <div class="img">
                                        <a href="product-detail.php?pid=<?=$bestSeller['pid']?>">
                                            <img src="../../../public/images/thumb/<?=$bestSeller['thumb']?>">
                                        </a>
                                        </div>
                                        <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button"
                                            data-bs-target="#quickview"  onclick="quickview(<?=$bestSeller['pid']?>)">
                                                Quick view
                                        </div>
                                    </div>
                                    <div class="item-inf text-center mt-3">
                                        <p class="mdt mb-2"><?=$bestSeller['pname']?></p>
                                        <p>$<?=number_format($bestSeller['thumb'], 0, '.', '.')?></p>
                                    </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <div class="row">
                            <?php foreach ($bestSellers2 as $bestSeller) { ?>
                                <div class="col-3">
                                    <div class="item-card-info">
                                    <div class="card-prd">
                                        <div class="img">
                                        <a href="product-detail.php?pid=<?=$bestSeller['pid']?>">
                                            <img src="../../../public/images/thumb/<?=$bestSeller['thumb']?>">
                                        </a>
                                        </div>
                                        <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button"
                                            data-bs-target="#quickview"  onclick="quickview(<?=$bestSeller['pid']?>)">
                                                Quick view
                                        </div>
                                    </div>
                                    <div class="item-inf text-center mt-3">
                                        <p class="mdt mb-2"><?=$bestSeller['pname']?></p>
                                        <p>$<?=number_format($bestSeller['thumb'], 0, '.', '.')?></p>
                                    </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <div class="row">
                            <?php foreach ($bestSellers3 as $bestSeller) { ?>
                                <div class="col-3">
                                    <div class="item-card-info">
                                    <div class="card-prd">
                                        <div class="img">
                                        <a href="product-detail.php?pid=<?=$bestSeller['pid']?>">
                                            <img src="../../../public/images/thumb/<?=$bestSeller['thumb']?>">
                                        </a>
                                        </div>
                                        <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button"
                                            data-bs-target="#quickview"  onclick="quickview(<?=$bestSeller['pid']?>)">
                                                Quick view
                                        </div>
                                    </div>
                                    <div class="item-inf text-center mt-3">
                                        <p class="mdt mb-2"><?=$bestSeller['pname']?></p>
                                        <p>$<?=number_format($bestSeller['thumb'], 0, '.', '.')?></p>
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

        <!-- modal quickview -->
        <?php require_once '../includes/quickview.php';?>

        <div>
            <?php require_once '../includes/footer.php';?>
        </div>

        <script>
            $(document).ready(function() {
                $('#cartCheckoutBtn').click(function() {
                    // Navigate to another page when the button is clicked
                    window.location.href = 'check-out.php';
                });
            });
        </script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script> -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
    </body>
</html>