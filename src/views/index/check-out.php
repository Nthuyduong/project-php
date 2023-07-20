<?php define('URLROOT', 'http://localhost:8888/project-php'); 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Check-out</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/c813cf59a3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/fonts.css">
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/check-out.css">
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/style.css">
    </head>
    <body>
        <div>
            <?php  error_reporting(E_ALL); ?>
            <?php require_once '../includes/header.php'?>
            <?php require("../../models/model_order_ex.php"); ?>
        </div> 
        <div class="container-fluid checkout-all">
            <?php if (isset($_SESSION["user_id"])==FALSE) { ?>
                <div class="my-4">
                    <h4>Please signin/ signup to see your shopping cart.</h4>
                    <a href="home.php">Back to homepage</a>
                </div>
            <?php } else { ?>
                <?php 
                    $uid = $_SESSION["user_id"]; 
                    $OrderDB = new Order();
                    $getCartProducts = $OrderDB -> getCartProducts($uid);
                    if ($getCartProducts==false) {
                        echo("<p>Fail to connect database!!</p>");
                        die();
                    }
                    $cartProducts = $OrderDB -> data;
                ?>
                <?php if (count($cartProducts)==0) { ?>
                    <div class="my-4">
                        <h4>Your shopping bag is empty.</h4>
                        <a href="home.php">Back to homepage</a>
                    </div>
                <?php } else { ?>
                    <form id="checkoutForm">
                        <div class="row">
                        <div class="col-6 ps-0 checkout-left">
                            <!--billing address-->
                            <div class="bill-address mb-4">
                            <div class="t-head row align-middle py-3 mb-4">
                                <p class="mb-0">Shipping Address</p>
                            </div>
                            <div class="ps-0 firstname user-input">
                            <label for="first">Fullname</label>
                            <input class="inpu" type="text" name="txtfirstname" id="txtfirstname" value="<?=$_SESSION['user_name']?>" required><br>
                            </div>
                            <div class="px-0 email-user user-input">
                                <label>Email address (*)</label>
                                <input class="inpu" type="text" name="txtmail" value="<?=$_SESSION['user_email']?>" required><br>
                            </div>
                            <div class="px-0 phone-user user-input">
                                <label>Phone (*)</label>
                                <input class="inpu" type="tel" name="txtphone" value="<?=$_SESSION['user_phone']?>" required><br>
                            </div>
                            <div class="px-0 address-user user-input">
                                <label>Address (*)</label>
                                <input class="inpu" type="text" value="<?=$_SESSION['user_address']?>" required><br>
                            </div>
                            <div class="form-check my-4 ps-0">
                                <input type="radio" class="check-box" id="dedau" name="address-check" checked>
                                <label class="" for="dedau">Default (Same as billing address)</label>
                            </div>
                            <div class="form-check my-4 ps-0">
                                <input type="radio" class="check-box" id="alter" name="address-check">
                                <label class="" for="alter">Add an alternative delivery address</label>
                            </div>
                            </div>
                            <!--shipping method-->
                            <div class="shipping-method mb-4">
                            <div class="t-head row align-middle py-3 mb-4">
                                <p class="mb-0">Shipping Method</p>
                            </div>
                            <div class="row">
                                <div class="ps-0 col-4">
                                <input type="radio" class="check-box" name="shipfee" checked>
                                <label class="">Standard</label>
                                </div>
                                <div class="col-8">
                                <p class="mb-0">Free ship</p>
                                </div>
                                <div class="ps-0 mt-4 col-4">
                                <input type="radio" class="check-box" name="shipfee">
                                <label class="">Express</label>
                                </div>
                                <div class="mt-4 col-8">
                                <p class="mb-0">Flat rate ($100)</p>
                                </div>
                            </div>
                            </div>
                            <!--payment method-->
                            <div class="payment-method mb-4">
                            <div class="t-head row align-middle py-3 mb-4">
                                <p class="mb-0">Payment Method</p>
                            </div>
                            <p class="mdt">Please choose the payment method</p>
                            <ul class="pay d-flex mb-4">
                                <li class="col-2 px-0" tabindex="0"><img src="../../../public/images/check-out/Mastercard.webp"/></li>
                                <li class="col-2 px-0" tabindex="0"><img src="../../../public/images/check-out/PayPal.webp"/></li>
                                <li class="col-2 px-0" tabindex="0"><img src="../../../public/images/check-out/Visa.webp"/></li>
                            </ul>
                            <div class="px-0 user-input mb-4">
                                <label>Card number (*)</label>
                                <input class="inpu" type="text" required>
                            </div>

                            <div class="row">
                                <div class="col-6 ps-0">
                                <label>Expire date</label>
                                <input class="inpu" type="text" required pattern="\d{2}/\d{4}" placeholder="MM/YYYY">

                                </div>
                                <div class="col-6 pe-0">
                                <label>CVV</label>
                                <input class="inpu" type="text" required>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-6 pe-0 checkout-right">
                            <!--billing summary here-->
                            <div class="sticky">
                            <div class="billing-summary">
                                <h5 class="text-center mb-3">BILLING SUMMARY</h5>
                                <?php $subTotal = 0; ?>
                                <?php foreach ($cartProducts as $cart) { ?>
                                    <div class="row">
                                        <div class="col-10 ps-0">
                                            <p><?=$cart['Name']?></p>
                                        </div>
                                        <div class="col-2 pe-0">
                                            <p>$<?=number_format($cart['Price']*$cart['Quantity'])?></p>
                                        </div>
                                    </div>
                                    <p>$<?=number_format($cart['Price'])?></p>
                                    <p>x <?=$cart['Quantity']?></p>
                                    <?php $subTotal += $cart['Price'] * $cart['Quantity']; ?>
                                <?php } ?>
                                <div class="line my-3"></div>
                                <div class="row total-itm">
                                <div class="col-10 ps-0">
                                    <p>Sub-total</p>
                                </div>
                                <div class="col-2 pe-0">
                                    <p>$<?=number_format($subTotal)?></p>
                                </div>
                                </div>
                                <div class="row ship-fee">
                                <div class="col-10 ps-0">
                                    <p>Shipping Fee</p>
                                </div>
                                <div class="col-2 pe-0">
                                    <p>$0</p>
                                </div>
                                </div>
                                <div class="line mb-3"></div>
                                <div class="total-itm row">
                                <div class="col-10 ps-0">
                                    <p class="mdt">Order Total</p>
                                </div>
                                <div class="col-2 p2-0">
                                    <p class="mdt">$<?=number_format($cart['Grand_total'])?></p>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <!--Place-order-->
                        <div class="row place-order">
                        <div class="col"></div>
                        <div class="col-10">
                            <p class="text-center my-5">By clicking Pay and Place Order, you agree to purchase your item(s) from
                            Global-e as merchant of record for this transaction, on Global-e's Terms and Conditions and Pivacy Policy
                            Global-e is an international fulfilment service provider to AGURI.</p>
                        </div>
                        <div class="col"></div>
                        <div class="row">
                            <div class="col-4"></div>
                            <div class="col-4">
                                <button class="btn btn-pri btnlg w-100" onclick="placeOrder(<?=$uid?>, <?=$cartProducts[0]['Code']?>)">Place order</button>
                            </div>
                            <div class="col-4"></div>
                        </div>
                        </div>
                    </form>
                <?php } ?>
            <?php } ?>
        </div>
        <div>
            <?php require_once '../includes/footer.php';?>
        </div> 
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script>
            function placeOrder(uid, code) {
                var bagData = {
                    uid: uid,
                    code: code
                };

                // Send AJAX request to placeOrder.php
                $.ajax({
                    url: '../includes/placeOrder.php',
                    type: 'POST',
                    data: bagData,
                    success: function(response) {
                        // Handle the response from the server
                        // Perform any other desired actions
                        console.log('Place order response: ', response);
                        // Reload the page or navigate to the checkout page
                        window.location.href = 'thank-you.php'; // Example: Navigating to the checkout page
                    },
                    error: function(xhr, status, error) {
                        // Handle any error that occurred during the AJAX request
                        alert('Failed to place order!');
                        console.error('Place order error: ', xhr.responseText);
                    }
                });
            }
        </script>
    </body>
</html>