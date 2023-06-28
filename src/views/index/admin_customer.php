<?php define('URLROOT', 'http://localhost:8888/project-php'); ?>
<?php
session_start();
require_once("../../models/model_customer.php");
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
                <div class="db-title">CUSTOMER</div>
                <p>Have a nice day!</p>
                <div>
                    <div class="row">
                        <div class="col-3">
                            
                        </div>
                        <div class="col-6">
                            <div className="search-bar d-flex">
                                <form action="" method="GET">
                                    <input name="findcustomer" id="findcustomer" class="search-input w-100" type="text" placeholder="Enter customer's name..." />
                                    <FontAwesomeIcon class="icon-search" icon={faSearch}/>
                                </form>
                            </div>
                        </div>
                        <div class="col-3">
                            
                        </div>
                    </div>
                    <?php
                    $customer = new model_customer();
                    $cid = $_REQUEST["cid"];
                    if($cid != NULL)
                        $customer->DeleteCustomer($cid);
                    $keyword = $_REQUEST["findcustomer"];
                    $ketqua = $customer->FindCustomer($keyword);
                    if($ketqua ==FALSE)
                    {
                        $alert_title = "Can't Connect Database!";
                        $alert = "Please check database again";
                        require_once("../../views/includes/alert.php");
                        die();
                    }
                    $rows = $customer->data;
                    ?>
                    <div class="tbl">
                        <div class="tb-row title-row">
                            <div class="cell-sm alg-center">
                                ID
                            </div>
                            <div class="cell">
                                NAME
                            </div>
                            <div class="cell">
                                EMAIL
                            </div>
                            <div class="cell-sm alg-center">
                                PHONE
                            </div>
                            <div class="cell-md">
                                ADDRESS
                            </div>
                            <div class="cell-sm">
                                ACTION
                            </div>
                        </div>
                        <?php
                        if($rows != null)
                            foreach($rows as $row)
                        {
                        ?>
                        <div class="tb-row">
                            <div class="cell-sm alg-center"><?=$row["ID"]?></div>
                            <div class="cell">
                                <a href="#" class="" data-bs-toggle="modal" data-bs-target="#customer-detail"><?=$row["Name"]?></a>
                            </div>
                            <div class="cell"><?=$row["Email"]?></div>
                            <div class="cell-sm"><?=$row["Phone"]?></div>
                            <div class="cell-md"><?=$row["Address"]?></div>
                            <div class="cell-sm action-icon alg-center">
                                <i class="fas fa-search-plus" style="color: #ffffff;"></i>                                                                       
                                <i class="mx-3 fas fa-edit" style="color: #ffffff;"></i>                      
                                <a href="?cid=<?=$row["ID"]?>"><i class="fas fa-trash"></i></a>
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
        <!-- CUSTOMER INFORMATION -->
        <div class="modal fade" id="customer-detail" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="db-title" id="exampleModalLabel">Customer Detail</div>
                        <div type="button" class="" data-bs-dismiss="modal" aria-label="Close">
                            X
                        </div>
                    </div>
                    <div class="modal-body mb-3">
                        <div class="row">
                            <div class="col-6">
                                <div class="tbl">
                                    <div class="tb-title mb-3">Customer information</div>
                                    <div class="tb-row">
                                        <div class="cell-sm">NAME</div>
                                        <div class="cell">Nguyen Thuy Duong</div>
                                    </div>
                                    <div class="tb-row">
                                        <div class="cell-sm">PHONE</div>
                                        <div class="cell">12345678</div>
                                    </div>
                                    <div class="tb-row">
                                        <div class="cell-sm">EMAIL</div>
                                        <div class="cell">nthduong@gmail.com</div>
                                    </div>
                                    <div class="tb-row tb-row2">
                                        <div class="cell-sm">ADDRESS</div>
                                        <div class="cell">So 1, Nguyen Trai, Thanh Xuan, Ha Noi</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="tbl">
                                    <div class="tb-title mb-3">Order History</div>
                                    <div class="tb-row">
                                        <div class="cell-sm">ID</div>
                                        <div class="cell">DATE</div>
                                        <div class="cell">TOTAL($)</div>
                                        <div class="cell">STATUS</div>
                                    </div>
                                    <div class="tb-row">
                                        <div class="cell-sm">12345</div>
                                        <div class="cell">12/02/23</div>
                                        <div class="cell">40.000</div>
                                        <div class="cell">
                                            <div class="stt stt2">Processing</div>
                                        </div>
                                    </div>
                                    <div class="tb-row">
                                        <div class="cell-sm">15678</div>
                                        <div class="cell">15/03/23</div>
                                        <div class="cell">30.000</div>
                                        <div class="cell">
                                            <div class="stt stt2">Processing</div>
                                        </div>
                                    </div>
                                    <div class="tb-row tb-row2">
                                        <div class="cell-sm">14456</div>
                                        <div class="cell">16/06/23</div>
                                        <div class="cell">40.000</div>
                                        <div class="cell">
                                            <div class="stt stt2">Processing</div>
                                        </div>
                                    </div>
                                </div>
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