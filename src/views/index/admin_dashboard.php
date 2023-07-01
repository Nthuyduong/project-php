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
        <?php require_once '../includes/sidebar.php';?>
        
        <div id="main">
            <?php require '../includes/ad-header.php'?>
            <!-- THIS IS ALL CONTENT -->
            <div>
                <!-- Dashboard here -->
                <div class="db-title mt-4">DASHBOARD</div>
                <p>Have a nice day!</p>
                <div class="mt-4">
                    <?php
                    $gtd = new model_dashboard();
                    $ketqua = $gtd->GrandTotalDay();
                    $gtm = new model_dashboard();
                    $ketqua = $gtm->GrandTotalMonth();
                    $gty = new model_dashboard();
                    $ketqua = $gty->GrandTotalYear();

                    //print_r($gtd->data);
                    if($ketqua == false)
                    {
                        $alert_title = "SQL ERROR!";
                        require_once("../../views/includes/alert.php");
                        die();
                    }
                    ?>
                    <h6 class="mb-2">Overview</h3>
                    <div class="row">
                        <div class="col-4 overview-card">
                            <div class="card-1">
                                <div class="overview-inner">
                                    <div class="mb-3">
                                        <h4>Today order</h4>
                                        <h2>$<?=$gtd->data["Day_total"]?></h2>
                                    </div>
                                    <div class="d-flex">
                                        <div class="cell">
                                            <p class="mb-2">Paypal</p>
                                            <p class="mb-0">$0.000</p>
                                        </div>
                                        <div class="cell">
                                            <p class="mb-2">Visa</p>
                                            <p class="mb-0">$0.000</p>
                                        </div>
                                        <div class="cell">
                                            <p class="mb-2">Master Card</p>
                                            <p class="mb-0">$0.000</p>
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
                                        <h2>$<?=$gtm->data["Month_total"]?></h2>
                                    </div>
                                    <div class="d-flex">
                                        <div class="cell">
                                            <p class="mb-2">Paypal</p>
                                            <p class="mb-0">$0.000</p>
                                        </div>
                                        <div class="cell">
                                            <p class="mb-2">Visa</p>
                                            <p class="mb-0">$0.000</p>
                                        </div>
                                        <div class="cell">
                                            <p class="mb-2">Master Card</p>
                                            <p class="mb-0">$0.000</p>
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
                                        <h2>$<?=$gty->data["Year_total"]?></h2>
                                    </div>
                                    <div class="d-flex">
                                        <div class="cell">
                                            <p class="mb-2">Paypal</p>
                                            <p class="mb-0">$0.000</p>
                                        </div>
                                        <div class="cell">
                                            <p class="mb-2">Visa</p>
                                            <p class="mb-0">$0.000</p>
                                        </div>
                                        <div class="cell">
                                            <p class="mb-2">Master Card</p>
                                            <p class="mb-0">$0.000</p>
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
            }
            else {
                $counts = $order->data;
                
                $totalOrderCount = $counts['total_order'];
                $pendingOrderCount = $counts['pending_order'];
                $processingOrderCount = $counts['processing_order'];
                $deliveredOrderCount = $counts['delivered_order'];
            }
            ?>
            <div class="my-5">
                <h6 class="mb-2">Order View</h3>
                <div class="row">
                    <div class="col-3">
                        <div class="order-div">
                            <div class="d-flex order-inner">
                                <div class="order-icon ic1">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                                <div class="w-100">
                                    <p>Order total</p>
                                    <h4 class="mb-0"><?=$totalOrderCount["total_order"]?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="order-div">
                            <div class="d-flex order-inner">
                                <div class="order-icon ic2">
                                    <i class="fas fa-sync-alt"></i>
                                </div>
                                <div class="w-100">
                                    <p>Order Pending</p>
                                    <h4 class="mb-0"><?=$pendingOrderCount["pending_order"]?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="order-div">
                            <div class="d-flex order-inner">
                                <div class="order-icon ic3">
                                    <i class="far fa-truck" style="color: #ffffff;"></i>
                                </div>
                                <div class="w-100">
                                    <p>Order Processing</p>
                                    <h4 class="mb-0"><?=$processingOrderCount["processing_order"]?></h5>
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
                                    <h4 class="mb-0"><?=$deliveredOrderCount["delivered_order"]?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Product -->
            <div>
                <h6>Featured Items</h6>
                <div></div>
            </div>
            <div>
                <h6>Recently Orders</h6>
                <?php
                $dashb = new model_order();
                $ketqua = $dashb->GetOrder();
                if($ketqua == false)
                {
                    $alert_title = "SQL ERROR";
                    $alert = "Please check the database again!";
                    require_once("../../views/includes/alert.php");
                    die();
                }
                $rows = $dashb->data;
                ?>
                <div class="tbl">
                    <div class="tb-row title-row">
                        <div class="cell alg-center">
                            ORDER ID
                        </div>
                        <div class="cell-md alg-center">
                            ORDER TiME
                        </div>
                        <div class="cell-md">
                            CUSTOMER'S NAME
                        </div>
                        <div class="cell alg-center">
                            METHOD
                        </div>
                        <div class="cell alg-center">
                            AMOUNT
                        </div>
                        <div class="cell alg-center">
                            STATUS
                        </div>
                        <div class="cell alg-center">
                            ACTION
                        </div>
                        <div class="cell"></div>
                    </div>
                    <?php
                    if($rows != NULL)
                        foreach($rows as $row)
                        {
                    ?>
                    <div class="tb-row">
                        <div class="cell alg-center"><?=$row["Code"]?></div>
                        <div class="cell-md alg-center"><?=date("d-m-Y", strtotime($row["Created_at"]))?></div>
                        <div class="cell-md"><?=$row["Customer_name"]?></div>
                        <div class="cell alg-center"><?=$row["Payment_method"]?></div>
                        <div class="cell alg-center"><?=$row["grandtotal"]?></div>
                        <div class="cell stt-out">
                            <div class="stt stt3"><?=$row["Status"]?></div>
                        </div>
                        <div class="cell">
                            <select class="w-100">
                                <option>Pending</option>
                                <option>Processing</option>
                                <option>Delivered</option>
                                <option>Cancel</option>
                            </select>
                        </div>
                        <div class="cell alg-center">
                            <i class="fas fa-print" style="color: #ffffff;"></i>
                            <i class="fas fa-search-plus ms-3" style="color: #ffffff;"></i>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
                <div class="d-flex pgn">
                        <div class="me-auto">Showing 8 of 100</div>
                        <div class="pagination">
                            <a href="#">&laquo;</a>
                            <a class="active" href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">&raquo;</a>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
    </body>
</html>