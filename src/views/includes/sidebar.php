
<!DOCTYPE html>
<html>
    <head>
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
                            <a href="admin_category.php">Category</a>
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
            <div class="w-100 logout-btn btn-lg-pr-admin"> 
                <a href="../index/admin_logout.php">Log out</a>
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
</html>