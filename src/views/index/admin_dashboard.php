<?php define('URLROOT', 'http://localhost:8888/project-php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/c813cf59a3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/fonts.css">
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/admin-style.css">
    </head>
    <body>
        <div id="mySidenav" class="sidenav">
            <div class="">
                <div class="nav-close d-flex">
                    <h5 class="text-light">AGURI ADMIN</h3>
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                </div>
            </div>
            <ul class="sideNav-content">
                <li>
                    <a href="#">
                        <i class="fas fa-th-large pe-2"></i>Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-slack pe-2"></i><span>Catalog</span>
                    </a>
                </li>
                    <ul class="catalog-dropdown">
                        <li>
                            <a>Products</a>
                        </li>
                        <li>
                            <a>Category</a>
                        </li>
                        <li>
                            <a>Sub-category</a>
                        </li>
                    </ul>
                <li>
                    <a href="#">
                        <i class="fas fa-shopping-cart pe-2"></i><span>Order</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-user-friend pe-2"></i><span>Customer</span>
                    </a>
                <li>
            </ul>
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
                        <a style="cursor:pointer" href="#">
                            <i class="fas fa-bell"></i>
                        </a>
                    </div>
                    <div class="ms-3">
                        <a style="cursor:pointer" href="#">
                            <i class="fas fa-user"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- THIS IS ALL CONTENT -->
            <div>
                <!-- Dashboard here -->
                <div class="db-title">DASHBOARD</div>
                <p>Have a nice day!</p>
                <div>
                    <h6>Overview</h3>
                    <div class="row">
                        <div class="col-4 overview-card">
                            <div class="card-1">
                                <div class="overview-inner">
                                    <h4>Today order</h4>
                                    <h2>$0.000</h2>
                                    <div class="d-flex">
                                        <div class="cell">
                                            <p>Paypal</p>
                                            <p>$0.000</p>
                                        </div>
                                        <div class="cell">
                                            <p>Visa</p>
                                            <p>$0.000</p>
                                        </div>
                                        <div class="cell">
                                            <p>Master Card</p>
                                            <p>$0.000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 overview-card">
                            <div class="card-2">
                                <div class="overview-inner">
                                    <h4>Today order</h4>
                                    <h2>$0.000</h2>
                                    <div class="d-flex">
                                        <div class="cell">
                                            <p>Paypal</p>
                                            <p>$0.000</p>
                                        </div>
                                        <div class="cell">
                                            <p>Visa</p>
                                            <p>$0.000</p>
                                        </div>
                                        <div class="cell">
                                            <p>Master Card</p>
                                            <p>$0.000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 overview-card">
                            <div class="card-3">
                                <div class="overview-inner">
                                    <h4>Today order</h4>
                                    <h2>$0.000</h2>
                                    <div class="d-flex">
                                        <div class="cell">
                                            <p>Paypal</p>
                                            <p>$0.000</p>
                                        </div>
                                        <div class="cell">
                                            <p>Visa</p>
                                            <p>$0.000</p>
                                        </div>
                                        <div class="cell">
                                            <p>Master Card</p>
                                            <p>$0.000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-3">
                <h6>Order View</h3>
                <div class="row">
                    <div class="col-3">
                        <div class="order-div">
                            <div class="d-flex order-inner">
                                <div class="order-icon ic1">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                                <div class="w-100">
                                    <p>Order total</p>
                                    <h5>25</h5>
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
                                    <p>Order total</p>
                                    <h5>25</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="order-div">
                            <div class="d-flex order-inner">
                                <div class="order-icon ic3">
                                    <i class="far fa-truck"></i>
                                </div>
                                <div class="w-100">
                                    <p>Order total</p>
                                    <h5>25</h5>
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
                                    <p>Order total</p>
                                    <h5>25</h5>
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
                        <div class="cell">Pending</div>
                        <div class="cell">
                            <select>
                                <option>Pending</option>
                                <option>Processing</option>
                                <option>Delivered</option>
                                <option>Cancel</option>
                            </select>
                        </div>
                        <div class="cell"></div>
                    </div>
                    <div class="tb-row">
                        <div class="cell">10124</div>
                        <div class="cell-md">14/05/2023</div>
                        <div class="cell-md">Vu Thi Hue</div>
                        <div class="cell">Master Card</div>
                        <div class="cell">$40.000</div>
                        <div class="cell">Processing</div>
                        <div class="cell">
                            <select>
                                <option>Pending</option>
                                <option>Processing</option>
                                <option>Delivered</option>
                                <option>Cancel</option>
                            </select>
                        </div>
                        <div class="cell"></div>
                    </div>
                    <div class="tb-row">
                        <div class="cell">10123</div>
                        <div class="cell-md">10/04/2023</div>
                        <div class="cell-md">Nguyen Thanh Thuy</div>
                        <div class="cell">Visa</div>
                        <div class="cell">$35.000</div>
                        <div class="cell">Pending</div>
                        <div class="cell">
                            <select>
                                <option>Pending</option>
                                <option>Processing</option>
                                <option>Delivered</option>
                                <option>Cancel</option>
                            </select>
                        </div>
                        <div class="cell"></div>
                    </div>
                    <div class="tb-row">
                        <div class="cell">10123</div>
                        <div class="cell-md">10/04/2023</div>
                        <div class="cell-md">Nguyen Thanh Thuy</div>
                        <div class="cell">Visa</div>
                        <div class="cell">$35.000</div>
                        <div class="cell">Pending</div>
                        <div class="cell">
                            <select>
                                <option>Pending</option>
                                <option>Processing</option>
                                <option>Delivered</option>
                                <option>Cancel</option>
                            </select>
                        </div>
                        <div class="cell"></div>
                    </div>
                    <div class="tb-row">
                        <div class="cell">10123</div>
                        <div class="cell-md">10/04/2023</div>
                        <div class="cell-md">Nguyen Thanh Thuy</div>
                        <div class="cell">Visa</div>
                        <div class="cell">$35.000</div>
                        <div class="cell">Pending</div>
                        <div class="cell">
                            <select>
                                <option>Pending</option>
                                <option>Processing</option>
                                <option>Delivered</option>
                                <option>Cancel</option>
                            </select>
                        </div>
                        <div class="cell"></div>
                    </div>
                    <div class="tb-row">
                        <div class="cell">10123</div>
                        <div class="cell-md">10/04/2023</div>
                        <div class="cell-md">Nguyen Thanh Thuy</div>
                        <div class="cell">Visa</div>
                        <div class="cell">$35.000</div>
                        <div class="cell">Pending</div>
                        <div class="cell">
                            <select>
                                <option>Pending</option>
                                <option>Processing</option>
                                <option>Delivered</option>
                                <option>Cancel</option>
                            </select>
                        </div>
                        <div class="cell"></div>
                    </div>
                    <div class="tb-row">
                        <div class="cell">10123</div>
                        <div class="cell-md">10/04/2023</div>
                        <div class="cell-md">Nguyen Thanh Thuy</div>
                        <div class="cell">Visa</div>
                        <div class="cell">$35.000</div>
                        <div class="cell">Pending</div>
                        <div class="cell">
                            <select>
                                <option>Pending</option>
                                <option>Processing</option>
                                <option>Delivered</option>
                                <option>Cancel</option>
                            </select>
                        </div>
                        <div class="cell"></div>
                    </div>
                    <div class="tb-row">
                        <div class="cell">10123</div>
                        <div class="cell-md">10/04/2023</div>
                        <div class="cell-md">Nguyen Thanh Thuy</div>
                        <div class="cell">Visa</div>
                        <div class="cell">$35.000</div>
                        <div class="cell">Pending</div>
                        <div class="cell">
                            <select>
                                <option>Pending</option>
                                <option>Processing</option>
                                <option>Delivered</option>
                                <option>Cancel</option>
                            </select>
                        </div>
                        <div class="cell"></div>
                    </div>
                    <div class="tb-row">
                        <div class="cell">10123</div>
                        <div class="cell-md">10/04/2023</div>
                        <div class="cell-md">Nguyen Thanh Thuy</div>
                        <div class="cell">Visa</div>
                        <div class="cell">$35.000</div>
                        <div class="cell">Pending</div>
                        <div class="cell">
                            <select>
                                <option>Pending</option>
                                <option>Processing</option>
                                <option>Delivered</option>
                                <option>Cancel</option>
                            </select>
                        </div>
                        <div class="cell"></div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            window.addEventListener("DOMContentLoaded", function() {
                // Open the side navigation menu when the page loads
                openNav();
            });

            function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            }

            function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft= "0";
            }
        </script>
    </body>
</html>