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
                            <a href="admin_product.php">Products</a>
                        </li>
                        <li>
                            <a class="admin_category.php">Category</a>
                        </li>
                        <li>
                            <a class="admin_subcate.php">Sub-category</a>
                        </li>
                    </ul>
                <li>
                    <a href="admin_order.php">
                        <i class="fas fa-shopping-cart pe-2"></i><span>Order</span>
                    </a>
                </li>
                <li>
                    <a href="admin_customer.php">
                        <i class="fas fa-user-friend pe-2"></i><span>Customer</span>
                    </a>
                <li>
            </ul>
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
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>