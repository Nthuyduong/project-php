<?php define('URLROOT', 'http://localhost:8888/project-php'); ?>
<?php
session_start();
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
            <!-- THIS IS HEADER -->
            <?php require '../includes/ad-header.php'?>
            <!-- THIS IS ALL CONTENT -->
            <div>
                <!-- Order here -->
                <div class="db-title mt-4">ORDERS</div>
                <p>Have a nice day!</p>
                <div>
                    <div class="row mb-4">
                        <div class="col-3">
                            <div className="search-bar d-flex">
                                <form action="" method="get">
                                    <input name="findOrder" id="findOrder" class="search-input w-100" type="text" placeholder="Enter Order ID..." />
                                    <FontAwesomeIcon class="icon-search" icon={faSearch}/>
                                </form>
                            </div>
                        </div>
                        <div class="col-3">
                            <select class="sl-box" name="status" id="status">
                                <option value="">choose status</option>
                                <option value="Pending">Pending</option>
                                <option value="Processing">Processing</option>
                                <option value="Delivered">Delivered</option>
                                <option value="Cancel">Cancel</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <input name="" id="" placeholder="Start order (dd/mm/yyyy)"/>
                        </div>
                        <div class="col-3">
                            <input name="" id="" placeholder="End order (dd/mm/yyyy)"/>
                        </div>
                    </div>
                    <!-- them chuc nang chon theo phuong thuc thanh toan -->
                    <div class="row">
                        <div class="col-3">
                            <select class="sl-box" name="payment" id="payment">
                                <option value="">Payment method</option>
                                <option value="Visa">Visa</option>
                                <option value="Paypal">Paypal</option>
                                <option value="Master">Master Card</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <button class="btn-lg-pr-admin w-100">Download all order</button>
                        </div>
                        <div class="col-3"></div>
                        <div class="col-3"></div>
                    </div>
                    <?php
                    $order = new model_order();
                    $keyword = isset($_REQUEST["findOrder"])?$_REQUEST["findOrder"]:"";
                    if($keyword!="" && is_numeric($keyword)==false)
                        $keyword="";
                    $ketqua = $order->FindOrder($keyword);
                    if($ketqua === false)
                    {
                        $alert_title = "SQL ERROR";
                        $alert = "Please check again!";
                        require_once("../../views/includes/alert.php");
                        die();
                    }
                    $rows = $order->data;

                    // $gt = new model_order();
                    // $ketqua = $gt->GrandTotal();
                    // print_r($ketqua);
                    ?>
                    <div class="tbl">
                        <div class="tb-row title-row">
                            <div class="cell">
                                ORDER ID
                            </div>
                            <div class="cell-md">
                                ORDER DATE
                            </div>
                            <div class="cell-md">
                                CUSTOMER'S NAME
                            </div>
                            <div class="cell">
                                METHOD
                            </div>
                            <div class="cell">
                                GRAND TOTAL
                            </div>
                            <div class="cell">
                                STATUS
                            </div>
                            <div class="cell">
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
                            <div class="cell"><?=$row["Code"]?></div>
                            <div class="cell-md"><?=date("d-m-Y", strtotime($row["Created_at"]))?></div>
                            <div class="cell-md"><?=$row["Customer_name"]?></div>
                            <div class="cell"><?=$row["Payment_method"]?></div>
                            <div class="cell"><?=$row["grandtotal"]?></div>
                            <div class="cell stt-out">
                                <div class="stt stt1"><?=$row["Status"]?></div>
                            </div>
                            <div class="cell">
                                <select class="w-100">
                                    <option>Pending</option>
                                    <option>Processing</option>
                                    <option>Delivered</option>
                                    <option>Cancel</option>
                                </select>
                            </div>
                            <div class="cell action-icon">
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
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>