<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <div>
            <?php require_once '../includes/sidebar.php';?>
        </div>
        <div id="main">
            <!-- THIS IS HEADER -->
            <div class="admin-nav d-flex">
                <div class="nav-admin-start me-auto">
                    <span style="cursor:pointer" onclick="openNav()">
                        <i class="fas fa-bars"></i>
                    </span>
                </div>
                <div class="nav-admin-end d-flex">
                    <div>
                        <a class="wt-color" style="cursor:pointer" href="#">
                            <i class="fas fa-bell"></i>
                        </a>
                    </div>
                    <div class="ms-3">
                        <a class="wt-color" style="cursor:pointer" href="#">
                            <i class="fas fa-user"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- THIS IS ALL CONTENT -->
            <div>
                <!-- Dashboard here -->
                <div class="db-title mt-4">DASHBOARD</div>
                <p>Have a nice day!</p>
                <div class="mt-4">
                    <h6 class="mb-2">Overview</h3>
                    <div class="row">
                        <div class="col-4 overview-card">
                            <div class="card-1">
                                <div class="overview-inner">
                                    <div class="mb-3">
                                        <h4>Today order</h4>
                                        <h2>$0.000</h2>
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
                                        <h4>Today order</h4>
                                        <h2>$0.000</h2>
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
                                        <h4>Today order</h4>
                                        <h2>$0.000</h2>
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
                                    <h4 class="mb-0">30</h5>
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
                                    <h4 class="mb-0">5</h5>
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
                                    <h4 class="mb-0">5</h5>
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
                                    <h4 class="mb-0">20</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h6>Recently Orders</h6>
                <div class="tbl">
                    <div class="tb-row title-row">
                        <div class="cell">
                            ORDER ID
                        </div>
                        <div class="cell-md">
                            ORDER TiME
                        </div>
                        <div class="cell-md">
                            CUSTOMER'S NAME
                        </div>
                        <div class="cell">
                            METHOD
                        </div>
                        <div class="cell">
                            AMOUNT
                        </div>
                        <div class="cell">
                            STATUS
                        </div>
                        <div class="cell">
                            ACTION
                        </div>
                        <div class="cell"></div>
                    </div>
                    <div class="tb-row">
                        <div class="cell">10123</div>
                        <div class="cell-md">12/04/2023</div>
                        <div class="cell-md">Nguyen Thuy Duong</div>
                        <div class="cell">Paypal</div>
                        <div class="cell">$30.000</div>
                        <div class="cell">
                            <div class="stt stt3">Cancel</div>
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
                    <div class="tb-row">
                        <div class="cell">10124</div>
                        <div class="cell-md">14/05/2023</div>
                        <div class="cell-md">Vu Thi Hue</div>
                        <div class="cell">Master Card</div>
                        <div class="cell">$40.000</div>
                        <div class="cell">
                            <div class="stt stt2">Processing</div>
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
                    <div class="tb-row">
                        <div class="cell">10123</div>
                        <div class="cell-md">10/04/2023</div>
                        <div class="cell-md">Nguyen Thanh Thuy</div>
                        <div class="cell">Visa</div>
                        <div class="cell">$35.000</div>
                        <div class="cell">
                            <div class="stt stt1">Pending</div>
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
                    <div class="tb-row">
                        <div class="cell">10123</div>
                        <div class="cell-md">10/04/2023</div>
                        <div class="cell-md">Nguyen Thanh Thuy</div>
                        <div class="cell">Visa</div>
                        <div class="cell">$35.000</div>
                        <div class="cell">
                            <div class="stt stt1">Pending</div>
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
                    <div class="tb-row">
                        <div class="cell">10123</div>
                        <div class="cell-md">10/04/2023</div>
                        <div class="cell-md">Nguyen Thanh Thuy</div>
                        <div class="cell">Visa</div>
                        <div class="cell">$35.000</div>
                        <div class="cell">
                            <div class="stt stt3">Cancel</div>
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
                    <div class="tb-row">
                        <div class="cell">10123</div>
                        <div class="cell-md">10/04/2023</div>
                        <div class="cell-md">Nguyen Thanh Thuy</div>
                        <div class="cell">Visa</div>
                        <div class="cell">$35.000</div>
                        <div class="cell">
                            <div class="stt stt4">Delivered</div>
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
                    <div class="tb-row">
                        <div class="cell">10123</div>
                        <div class="cell-md">10/04/2023</div>
                        <div class="cell-md">Nguyen Thanh Thuy</div>
                        <div class="cell">Paypal</div>
                        <div class="cell">$35.000</div>
                        <div class="cell">
                            <div class="stt stt1">Pending</div>
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
                    <div class="tb-row">
                        <div class="cell">10123</div>
                        <div class="cell-md">10/04/2023</div>
                        <div class="cell-md">Nguyen Thanh Thuy</div>
                        <div class="cell">Master Card</div>
                        <div class="cell">$35.000</div>
                        <div class="cell">
                            <div class="stt stt1">Pending</div>
                        </div>
                        <div class="cell action-icon">
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
                    <div class="tb-row">
                        <div class="cell">10123</div>
                        <div class="cell-md">10/04/2023</div>
                        <div class="cell-md">Nguyen Thanh Thuy</div>
                        <div class="cell">Paypal</div>
                        <div class="cell">$35.000</div>
                        <div class="cell">
                            <div class="stt stt1">Pending</div>
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
    </body>
</html>