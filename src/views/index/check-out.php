<?php define('URLROOT', 'http://localhost:8888/project-php'); 
session_start();?>
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
            <?php require_once '../includes/header.php';?>
        </div> 
        <div class="container-fluid checkout-all">
            <form ngNativeValidate (submit)="placeOrder()">
                <div class="row">
                <div class="col-6 ps-0 checkout-left">
                    <!--billing address-->
                    <div class="bill-address mb-4">
                    <div class="t-head row align-middle py-3 mb-4">
                        <p class="mb-0">Billing Address</p>
                    </div>
                    <div class="row">
                        <div class="col-6 ps-0 firstname user-input">
                        <label for="first">First name</label>
                        <input class="inpu" type="text" name="txtfirstname" id="txtfirstname" required><br>
                        </div>
                        <div class="col-6 pe-0 lastname user-input">
                        <label>Last name</label>
                        <input class="inpu" type="text" name="txtlastname" id="txtlastname" required><br>
                        </div>
                    </div>
                    <div class="px-0 email-user user-input">
                        <label>Email address (*)</label>
                        <input class="inpu" type="text" name="txtmail" required><br>
                    </div>
                    <div class="px-0 phone-user user-input">
                        <label>Phone (*)</label>
                        <input class="inpu" type="tel" name="txtphone" required><br>
                    </div>
                    <div class="px-0 address-user user-input">
                        <label>Address line1 (*)</label>
                        <input class="inpu" type="text" required><br>
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
                        <p class="mb-0">Flat rate (domestic: $30/ oversea: $100)</p>
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
                        <input class="inpu" type="date" name="expiredate" required>
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
                        <div class="row">
                        <div class="col-10 ps-0">
                            <p>Amel Earring</p>
                        </div>
                        <div class="col-2 pe-0">
                            <p>$6,700</p>
                        </div>
                        </div>
                        <p>x1</p>
                        <div class="row">
                        <div class="col-10 ps-0">
                            <p>Lavie Ring</p>
                        </div>
                        <div class="col-2 pe-0">
                            <p>$5,000</p>
                        </div>
                        </div>
                        <p>x1</p>
                        <div class="line my-3"></div>
                        <div class="row total-itm">
                        <div class="col-10 ps-0">
                            <p>Items Total</p>
                        </div>
                        <div class="col-2 pe-0">
                            <p>$11,700</p>
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
                            <p class="mdt">$11,700</p>
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
                        <a href="thank-you.php">
                            <input type="submit" class="btn btn-pri btnlg w-100" value="Place order"/>
                        </a>
                    </div>
                    <div class="col-4"></div>
                </div>
                </div>
            </form>
        </div>
        <div>
            <?php require_once '../includes/footer.php';?>
        </div> 
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>