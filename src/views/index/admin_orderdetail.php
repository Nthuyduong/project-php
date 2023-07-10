<?php define('URLROOT', 'http://localhost:8888/project-php'); ?>
<?php
session_start();
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
        <?php require_once '../includes/sidebar.php';?>
        
        <div id="main">
            <!-- THIS IS HEADER -->
            <?php require '../includes/ad-header.php'?>
            <!-- THIS IS ALL CONTENT -->
            <div>
                <!-- Order detail here -->
                <!-- Breadcrumb -->
                <div class="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Order</a></li>
                        <li class="breadcrumb-item"><a href="#">Order Detail</a></li>
                    </ol>
                </div>
                <!-- ORDER DETAIL CONTENT HERE -->
                <div class="db-title mt-4">ORDER DETAIL NO: #123456</div>
                <div class="mt-5">
                    <div>
                        <div class="row">
                            <div class="col-7">
                                <div class="detail-div mb-30">
                                    <div class="tb-title">Order Item</div>
                                    <div class="tbl mt-3">
                                        <div class="tb-row">
                                            <div class="cell">ITEM SUMMARY</div>
                                            <div class="cell">QUANTITY</div>
                                            <div class="cell">PRICE ($)</div>
                                            <div class="cell">TOTAL PRICE ($)</div>
                                        </div>
                                        <div class="tb-row">
                                            <div class="cell">
                                                Ameee Diamond Ring
                                            </div>
                                            <div class="cell">
                                                01
                                            </div>
                                            <div class="cell">
                                                30.000
                                            </div>
                                            <div class="cell">
                                                30.000
                                            </div>
                                        </div>
                                        <div class="tb-row">
                                            <div class="cell">
                                                Diamond Bracelet
                                            </div>
                                            <div class="cell">
                                                01
                                            </div>
                                            <div class="cell">
                                                20.000
                                            </div>
                                            <div class="cell">
                                                20.000
                                            </div>
                                        </div>
                                        <div class="tb-row tb-row2">
                                            <div class="cell">
                                                Diamond & Gold Necklace
                                            </div>
                                            <div class="cell">
                                                01
                                            </div>
                                            <div class="cell">
                                                20.000
                                            </div>
                                            <div class="cell">
                                                20.000
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="detail-div">
                                    <div class="tb-title">Customer & Order Information</div>
                                    <div class="tbl mt-3">
                                        <div class="tb-row">
                                            <div class="cell">
                                                Customer's Name
                                            </div>
                                            <div class="cell">
                                                Nguyen Thuy Duong
                                            </div>
                                        </div>
                                        <div class="tb-row">
                                            <div class="cell">
                                                Phone Number
                                            </div>
                                            <div class="cell">
                                                987654321
                                            </div>
                                        </div>
                                        <div class="tb-row">
                                            <div class="cell">
                                                Address
                                            </div>
                                            <div class="cell">
                                                So 1, Nguyen Trai, Thanh Xuan, Ha Noi
                                            </div>
                                        </div>
                                        <div class="tb-row">
                                            <div class="cell">
                                                Shipping Method
                                            </div>
                                            <div class="cell">
                                                Standard
                                            </div>
                                        </div>
                                        <div class="tb-row">
                                            <div class="cell">
                                                Payment Method
                                            </div>
                                            <div class="cell">
                                                Paypal
                                            </div>
                                        </div>
                                        <div class="tb-row tb-row2">
                                            <div class="cell">
                                                Order Note
                                            </div>
                                            <div class="cell">
                                                N/A
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="">
                                    <div class="detail-div mb-30">
                                    <div class="tb-title">Order Status</div>
                                        <div class="tbl mt-2">
                                            <div class="tb-row tb-row2">
                                                <div class="cell">
                                                    <select class="sl-box" name="ctg" id="ctg">
                                                        <option>Pending</option>
                                                        <option>Processing</option>
                                                        <option>Delivered</option>
                                                        <option>Cancel</option>
                                                    </select>
                                                </div>
                                                <div class="cell">
                                                    <button class="w-100 btn-lg-pr-admin" data-bs-toggle="modal" data-bs-target="#trackorder">Track Order</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="detail-div">
                                        <div class="tb-title">Order Summary</div>
                                        <div class="tbl mt-3">
                                            <div class="tb-row">
                                                <div class="cell">Order date</div>
                                                <div class="cell">16/04/2023</div>
                                            </div>
                                            <div class="tb-row">
                                                <div class="cell">Subtotal ($)</div>
                                                <div class="cell">80.000</div>
                                            </div>
                                            <div class="tb-row">
                                                <div class="cell">Shipping Fee</div>
                                                <div class="cell">Free</div>
                                            </div>
                                            <div class="tb-row tb-row2">
                                                <div class="cell">Total ($)</div>
                                                <div class="cell">80.000</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- Vertically centered modal -->
        <div class="modal fade" id="trackorder" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="db-title" id="exampleModalLabel">Track Order: #1234567</div>
                        <div type="button" class="" data-bs-dismiss="modal" aria-label="Close">
                            X
                        </div>
                    </div>
                    <div class="modal-body mt-5">
                        <div>
                            <ul class="progressbar">
                                <li class="active">Ordered<p class="smt">12/11/22</p></li>
                                <li class="active">Processing<p class="smt">12/11/22</p></li>
                                <li class="not-active">Shipped<p class="smt">EST: 12/11/22</p></li>
                                <li class="not-active">Delivered<p class="smt">EST: 12/11/22</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>