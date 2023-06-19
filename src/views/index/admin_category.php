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
        <div>
            <?php require_once '../includes/sidebar.php';?>
        </div>
        <div id="mySidenav" class="sidenav">
            <div class="">
                <div class="nav-close d-flex">
                    <h5 class="text-light nav-title">AGURI ADMIN</h3>
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                </div>
            </div>
            <ul class="sideNav-content">
                <li>
                    <a href="admin_dashboard.php">
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
                            <a href="admin_product/php">Products</a>
                        </li>
                        <li>
                            <a href="admin_category.php">Category</a>
                        </li>
                        <li>
                            <a href="admin_subcate.php">Sub-category</a>
                        </li>
                    </ul>
                <li>
                    <a href="admin_order.php">
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
                <!-- Product here -->
                <div class="db-title mt-4">CATEGORY</div>
                <p>Have a nice day!</p>
                <div class="mb-3">
                    <div>
                        <div class="row">
                            <div class="col-4">
                                <div className="search-bar d-flex">
                                    <input className="search-input w-100" type="text" placeholder="Search text..." />
                                </div>
                            </div>
                            <div class="col-4">
                                <button class="w-100 btn-lg-pr-admin" data-bs-toggle="offcanvas" data-bs-target="#addsubcate" aria-controls="addsubcate">Add Sub-category</button>
                            </div>
                            <div class="col-4">
                                <button class="w-100 btn-lg-sc-admin">Delete Sub-category</button>
                            </div>
                        </div>
                        <div class="line my-4"></div>
                    </div>
                    <!-- Product table -->
                    <div class="tbl">
                        <div class="tb-row title-row">
                            <div class="cell-ssm">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            </div>
                            <div class="cell-sm">
                                ID
                            </div>
                            <div class="cell">
                                CATEGORY'S NAME
                            </div>
                            <div class="cell-md">
                                DESCRIPTION
                            </div>
                            <div class="cell alg-center">
                                PUBLISH
                            </div>
                            <div class="cell alg-center">
                                ACTION
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell-ssm">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            </div>
                            <div class="cell-sm">12345</div>
                            <div class="cell">Ring</div>
                            <div class="cell-md">Sub-category's description will goes here. Some text will goes here</div>
                            <div class="cell alg-center">
                                <label class="switch">
                                    <input type="checkbox" checked/>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="cell alg-center">
                                <i class="fas fa-edit" style="color: #ffffff;"></i>                         
                                <i class=" ms-3 fas fa-trash"></i>
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell-ssm">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            </div>
                            <div class="cell-sm">12345</div>
                            <div class="cell">Earring</div>
                            <div class="cell-md">Sub-category's description will goes here. Some text will goes here</div>
                            <div class="cell alg-center">
                                <label class="switch">
                                    <input type="checkbox" checked/>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="cell alg-center">
                                <i class="fas fa-edit" style="color: #ffffff;"></i>                         
                                <i class="ms-3 fas fa-trash"></i>
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell-ssm">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            </div>
                            <div class="cell-sm">12345</div>
                            <div class="cell">Necklace</div>
                            <div class="cell-md">category's description will goes here. Some text will goes here</div>
                            <div class="cell alg-center">
                                <label class="switch">
                                    <input type="checkbox" checked/>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="cell alg-center">
                                <i class="fas fa-edit" style="color: #ffffff;"></i>                         
                                <i class="ms-3 fas fa-trash"></i>
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell-ssm">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            </div>
                            <div class="cell-sm">12345</div>
                            <div class="cell">Bracelet</div>
                            <div class="cell-md">Category's description will goes here. Some text will goes here</div>
                            <div class="cell alg-center">
                                <label class="switch">
                                    <input type="checkbox" checked/>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="cell alg-center">
                                <i class="fas fa-edit" style="color: #ffffff;"></i>                         
                                <i class="ms-3 fas fa-trash"></i>
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