<?php define('URLROOT', 'http://localhost:8888/project-php'); ?>
<?php
session_start();
require_once("../../models/model_dashboard.php");
require_once("../../models/model_order.php");
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
        <?php require '../includes/ad-header.php' ?>
        <!-- THIS IS ALL CONTENT -->
        <div>
            <!-- Dashboard here -->
            <div class="db-title mt-4">DASHBOARD</div>
            <div class="mt-2">Have a nice day!</div>
            <div class="mt-5">
                <?php
                $gtd = new model_dashboard();
                $ketqua = $gtd->GrandTotalDay();
                $gtm = new model_dashboard();
                $ketqua = $gtm->GrandTotalMonth();
                $gty = new model_dashboard();
                $ketqua = $gty->GrandTotalYear();

                $ptd = new model_dashboard();
                $ketqua = $ptd->PaypalDay();
                $vtd = new model_dashboard();
                $ketqua = $vtd->VisaDay();
                $mtd = new model_dashboard();
                $ketqua = $mtd->MasterDay();

                $ptm = new model_dashboard();
                $ketqua = $ptm->PaypayMonth();
                $vtm = new model_dashboard();
                $ketqua = $vtm->VisaMonth();
                $mtm = new model_dashboard();
                $ketqua = $mtm->MasterMonth();

                $pty = new model_dashboard();
                $ketqua = $pty->PaypalYear();
                $vty = new model_dashboard();
                $ketqua = $vty->VisaYear();
                $mty = new model_dashboard();
                $ketqua = $mty->MasterYear();

                // $forDay = new model_dashboard();
                // $paypalTotal = $forDay->getPaymentDayTotal('Paypal');
                // $visaTotal = $forDay->getPaymentDayTotal('Visa');
                // $masterTotal = $forDay->getPaymentDayTotal('Master Card');
                //print_r($gtd->data);
                if ($ketqua == false) {
                    $alert_title = "SQL ERROR!";
                    require_once("../../views/includes/alert.php");
                    die();
                }
                ?>
                <h4 class="mb-3">Overview</h4>
                <div class="row">
                    <div class="col-4 overview-card">
                        <div class="card-1">
                            <div class="overview-inner">
                                <div class="mb-3">
                                    <h4>Today order</h4>
                                    <h2>$<?= number_format($gtd->data["Day_total"]) ?></h2>
                                </div>
                                <div class="d-flex">
                                    <div class="cell">
                                        <p class="mb-2">Paypal</p>
                                        <p class="mb-0">$ <?= number_format($ptd->data["PaypalDay_total"]) ?></p>
                                    </div>
                                    <div class="cell">
                                        <p class="mb-2">Visa</p>
                                        <p class="mb-0">$ <?= number_format($vtd->data["VisaDay_total"]) ?></p>
                                    </div>
                                    <div class="cell">
                                        <p class="mb-2">Master Card</p>
                                        <p class="mb-0">$<?= number_format($mtd->data["MasterDay_total"]) ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 overview-card">
                        <div class="card-2">
                            <div class="overview-inner">
                                <div class="mb-3">
                                    <h4>This Month Order</h4>
                                    <h2>$<?= number_format($gtm->data["Month_total"]) ?></h2>
                                </div>
                                <div class="d-flex">
                                    <div class="cell">
                                        <p class="mb-2">Paypal</p>
                                        <p class="mb-0">$ <?= number_format($ptm->data["PaypalMonth_total"]) ?></p>
                                    </div>
                                    <div class="cell">
                                        <p class="mb-2">Visa</p>
                                        <p class="mb-0">$ <?= number_format($vtm->data["VisaMonth_total"]) ?></p>
                                    </div>
                                    <div class="cell">
                                        <p class="mb-2">Master Card</p>
                                        <p class="mb-0">$ <?= number_format($mtm->data["MasterMonth_total"]) ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 overview-card">
                        <div class="card-3">
                            <div class="overview-inner">
                                <div class="mb-3">
                                    <h4>This Year Order</h4>
                                    <h2>$<?= number_format($gty->data["Year_total"]) ?></h2>
                                </div>
                                <div class="d-flex">
                                    <div class="cell">
                                        <p class="mb-2">Paypal</p>
                                        <p class="mb-0">$ <?= number_format($pty->data["PaypalYear_total"]) ?></p>
                                    </div>
                                    <div class="cell">
                                        <p class="mb-2">Visa</p>
                                        <p class="mb-0">$ <?= number_format($vty->data["VisaYear_total"]) ?></p>
                                    </div>
                                    <div class="cell">
                                        <p class="mb-2">Master Card</p>
                                        <p class="mb-0">$ <?= number_format($mty->data["MasterYear_total"]) ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $order = new model_dashboard();
        $ketqua = $order->getOrderCounts();

        if ($ketqua === false) {
            $alert_title = "SQL ERROR!";
            require_once("../../views/includes/alert.php");
            die();
        } else {
            $counts = $order->data;

            // $totalOrderCount = $counts['total_order'];
            $pendingOrderCount = $counts['pending_order'];
            $processingOrderCount = $counts['processing_order'];
            $deliveredOrderCount = $counts['delivered_order'];
            $cancelOrderCount = $counts['cancel_order'];
        }
        ?>
        <div class="my-5">
            <h4 class="mb-3">Order View</h4>
            <div class="row">
                <div class="col-3">
                    <div class="order-div">
                        <div class="d-flex order-inner">
                            <div class="order-icon ic2">
                                <i class="fas fa-sync-alt"></i>
                            </div>
                            <div class="w-100">
                                <p>Order Pending</p>
                                <h4 class="mb-0"><?= $pendingOrderCount["pending_order"] ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="order-div">
                        <div class="d-flex order-inner">
                            <div class="order-icon ic3">
                                <i class="fa fa-truck" style="color: #ffffff;"></i>
                            </div>
                            <div class="w-100">
                                <p>Order Processing</p>
                                <h4 class="mb-0"><?= $processingOrderCount["processing_order"] ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="order-div">
                        <div class="d-flex order-inner">
                            <div class="order-icon ic4">
                                <i class="far fa-check-circle"></i>
                            </div>
                            <div class="w-100">
                                <p>Order Delivered</p>
                                <h4 class="mb-0"><?= $deliveredOrderCount["delivered_order"] ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="order-div">
                        <div class="d-flex order-inner">
                            <div class="order-icon ic1">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <div class="w-100">
                                <p>Order Cancel</p>
                                <h4 class="mb-0"><?= $cancelOrderCount["cancel_order"] ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Product -->
        <?php
        $top = new model_dashboard();
        $ketqua = $top->TopProduct();
        if ($ketqua == false) {
            $alert_title = "SQL ERROR";
            $alert = "Please check the database again!";
            require_once("../../views/includes/alert.php");
            die();
        }
        $rows = $top->data;
        ?>
        <div class="my-5">
            <h4 class="mb-3">Top 4 featured Items</h4>
            <div class="row">
                <?php
                if ($rows != NULL)
                    foreach ($rows as $row) {
                ?>
                    <div class="col-3">
                        <div class="featured_item">
                            <div class="featured-img">
                                <img class="w-100" src="../../../public/images/thumb/<?= $row["Thumb"] ?>" />
                            </div>
                            <div class="featured-info">
                                <h6 class="my-2"><?= $row["Product_Name"] ?></h6>
                                <div>$ <?= number_format($row["Price"]) ?></div>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
            </div>
        </div>
        <div>
            <h4>Recently Orders</h4>
            <?php
            $dashb = new model_dashboard();
            $ketqua = $dashb->RecentlyOrder();
            if ($ketqua == false) {
                $alert_title = "SQL ERROR";
                $alert = "Please check the database again!";
                require_once("../../views/includes/alert.php");
                die();
            }
            $rows = $dashb->data;
            ?>
            <div class="tbl">
                <div class="tb-row title-row">
                    <div class="cell-sm alg-center">
                        ID
                    </div>
                    <div class="cell-md alg-center">
                        ORDER DATE
                    </div>
                    <div class="cell-md">
                        CUSTOMER'S NAME
                    </div>
                    <div class="cell alg-center">
                        METHOD
                    </div>
                    <div class="cell alg-center">
                        GRAND TOTAL
                    </div>
                    <div class="cell alg-center">
                        STATUS
                    </div>
                    <!-- <div class="cell alg-center">
                        ACTION
                    </div> -->
                    <div class="cell"></div>
                </div>
                <!-- 5 recently order here -->
                <?php
                if ($rows != NULL)
                    foreach ($rows as $row) {
                ?>
                    <div class="tb-row">
                        <div class="cell-sm alg-center"><?= $row["Code"] ?></div>
                        <div class="cell-md alg-center"><?= date("d-m-Y", strtotime($row["Created_at"])) ?></div>
                        <div class="cell-md"><?= $row["Customer_name"] ?></div>
                        <div class="cell alg-center"><?= $row["Payment_method"] ?></div>
                        <div class="cell alg-center"><?= $row["grandtotal"] ?></div>
                        <div class="cell stt-out">
                            <?php
                            // Define the color mapping for each status value
                            $color = array(
                                1 => "red",
                                2 => "green",
                                3 => "blue",
                                4 => "orange",
                                // Add more status-value/color pairs as needed
                            );

                            // Assume $row["Status"] contains the status value
                            if (isset($row["Status"])) {
                                $status = $row["Status"];
                                $statusText = "";

                                switch ($status) {
                                    case 1:
                                        $statusText = "Pending";
                                        break;
                                    case 2:
                                        $statusText = "Processing";
                                        break;
                                    case 3:
                                        $statusText = "Delivered";
                                        break;
                                    case 4:
                                        $statusText = "Cancel";
                                        break;
                                    default:
                                        $statusText = "Unknown Status";
                                        break;
                                }

                                // Set the appropriate class based on the status value
                                $statusColor = isset($color[$status]) ? $color[$status] : "unknown";
                            } else {
                                // Default values if $row["Status"] is not set
                                $statusText = "Unknown Status";
                                $statusColor = "unknown";
                            }
                            ?>

                            <div class="stt stt3 <?= $statusColor ?>">
                                <?= $statusText ?>
                            </div>
                        </div>
                        <!-- <div class="cell">
                            <select class="w-100" id="paymentMethod" name="paymentMethod">
                                <option value="">Payment method</option>
                                <?php
                                // $pm = new model_order();
                                // $pm->dropdownName("Orders", "Status");
                                ?>
                            </select>
                        </div> -->
                        <div class="cell alg-center">
                            <i class="fas fa-print" style="color: #ffffff;" onclick="printPage()"></i>
                            <a href="#" id="getorder2" data-bs-toggle="modal" data-id="<?php echo $row["Code"]; ?>" data-bs-target="#order-detail"><i class="fas fa-search-plus ms-3" style="color: #ffffff;"></i></a>
                        </div>
                    </div>
                <?php
                    }
                ?>
            </div>
            <!-- <div class="d-flex pgn">
                <div class="me-auto">Showing 8 of 100</div>
                <div class="pagination">
                    <a href="#">&laquo;</a>
                    <a class="active" href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">&raquo;</a>
                </div>
            </div> -->
        </div>
    </div>
    <!-- ORDER INFORMATION -->
    <div class="modal fade" id="order-detail" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="db-title" id="exampleModalLabel">Order Information</div>
                    <div type="button" class="" data-bs-dismiss="modal" aria-label="Close">
                        X
                    </div>
                </div>
                <div class="modal-body mb-3">
                    <!-- <div id="modal-loader">
                            <img src="../../../public/images/ajax-loader.gif"/>
                        </div> -->
                    <!-- Content will be load here -->
                    <div id="dynamic-order2">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>
        $(document).ready(function() {

            $(document).on('click', '#getorder2', function(e) {

                e.preventDefault();
                // Get order ID after click
                var uid = $(this).data('id');

                // leave modal blank before ajax call
                $('#dynamic-order2').html('');
                //load ajax loader
                $('#modal-loader').show();

                $.ajax({
                        url: 'orderdetailAJAX.php',
                        type: 'POST',
                        data: {
                            id: uid
                        },
                        dataType: 'html',
                    })
                    .done(function(data) {
                        console.log(data);
                        $('#dynamic-order2').html('');
                        // load response
                        $('#dynamic-order2').html(data);
                        // hide ajax loader
                        $('#modal-loader').hide();
                    })
                    .fail(function() {
                        $('#dynamic-order2').html('<p>Something went wrong, please try again!</p>');
                        // $('#modal-loader').hide();
                    });
            });
        });
    </script>

    <script>
        function printPage() {
            window.print();
        }
    </script>


</body>
</body>

</html>