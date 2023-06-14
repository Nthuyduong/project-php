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
                    <h5 class="text-light nav-title">AGURI ADMIN</h3>
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
                <!-- Product here -->
                <div class="db-title">PRODUCTS</div>
                <p>Have a nice day!</p>
                <div>
                    <div>
                        <div class="row">
                            <div class="col-3">
                                <div className="search-bar d-flex">
                                    <input className="search-input w-100" type="text" placeholder="Search text..." />
                                    <FontAwesomeIcon className="icon-search" icon={faSearch}/>
                                </div>
                            </div>
                            <div class="col-3">
                                <select class="sl-box" name="ctg" id="ctg">
                                    <option>Category</option>
                                    <option>Ring</option>
                                    <option>Earring</option>
                                    <option>Necklace</option>
                                    <option>Bracelet</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <button class="w-100 btn-lg-pr-admin">Add Sub-category</button>
                            </div>
                            <div class="col-3">
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
                                SUB-CATEGORY'S NAME
                            </div>
                            <div class="cell-md">
                                DESCRIPTION
                            </div>
                            <div class="cell">
                                PUBLISH
                            </div>
                            <div class="cell">
                                ACTION
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell-ssm">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            </div>
                            <div class="cell-sm">12345</div>
                            <div class="cell">Sub-category name</div>
                            <div class="cell-md">Sub-category's description will goes here. Some text will goes here</div>
                            <div class="cell">
                                <label class="switch">
                                    <input type="checkbox" checked/>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="cell">

                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell-ssm">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            </div>
                            <div class="cell-sm">12345</div>
                            <div class="cell">Sub-category name</div>
                            <div class="cell-md">Sub-category's description will goes here. Some text will goes here</div>
                            <div class="cell">
                                <label class="switch">
                                    <input type="checkbox" checked/>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="cell">

                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell-ssm">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            </div>
                            <div class="cell-sm">12345</div>
                            <div class="cell">Sub-category name</div>
                            <div class="cell-md">Sub-category's description will goes here. Some text will goes here</div>
                            <div class="cell">
                                <label class="switch">
                                    <input type="checkbox" checked/>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="cell">

                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell-ssm">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            </div>
                            <div class="cell-sm">12345</div>
                            <div class="cell">Sub-category name</div>
                            <div class="cell-md">Sub-category's description will goes here. Some text will goes here</div>
                            <div class="cell">
                                <label class="switch">
                                    <input type="checkbox" checked/>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="cell">

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
        </div>
         <!-- NAV DRAWER -->
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>