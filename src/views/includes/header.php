<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <div>
            <?php include 'login.php';?>
            <?php
            if($_SESSION["logined_fail"]!="")
            {
            ?>
            <script>
                var myModal = new bootstrap.Modal(document.getElementById('sign-in'));
                     myModal.show();
            </script>
            
            <?php
            }
            ?>
        </div>
        <div>
            <?php include 'forgot-pass.php'; ?>
        </div>
        <div>
            <?php include 'sign-up.php'; ?>
        </div>
        <div>
            <?php include 'bag.php'; ?>
        </div>
            
            <div id="headnav">
            <!-- HEADER AFTER LOGIN -->
            <header class="section top-page">
                    <div class="header card-header border-0 container-fluid">
                        <div class="row header-inner">
                            <!--top-page-left-->
                            <div class="col-3 top-page-start">
                                <ul class="d-flex justify-content-start">
                                    <li class="py-1"><a href="https://www.facebook.com/aguri-jewellery"><i class="fab fa-facebook fa-lg"></i></a></li>
                                    <li class="py-1 px-3"><a href="https://www.instagram.com/aguri-jewellery"><i class="fab fa-instagram fa-lg"></i></a></li>
                                    <li class="py-1"><a href="https://www.pinterest.com/aguri-jewellery"><i class="fab fa-pinterest fa-lg"></i></a></li>
                                </ul>
                            </div>
                            <!--logo-->
                            <div class="col-6 d-flex justify-content-center">
                                <a href="home.php">
                                    <img id="logo" src="../../../public/images/logo.svg" alt="aguri-logo"/>
                                </a>
                            </div>
                            <?php
                            if($_SESSION["logined_user"]=="OK")
                            {
                            ?>
                            <!--top-page-right-->
                            <div class="col-3 top-page-end">
                                <ul class="d-flex justify-content-end">
                                     <div class="pe-3">
                                        <li class="py-1"><i class="fa fa-shopping-cart fa-lg" data-bs-toggle="offcanvas" data-bs-target="#addbag"></i></li>
                                    </div>
                                    <!--search-button-start-->
                                    <div class=" search-box">
                                        <input type="text" placeholder="search...">
                                        <a href="search.php" class="iconsearch">
                                        <i class="fa fa-search fa-lg"></i>
                                        </a>
                                    </div>
                                    <!--search-button-end-->
                                    <!--Log out-->
                                    <li class="py-1 ps-3">
                                        <a class="sign-up smt" href="../includes/user_logout.php">Log out</a>
                                    </li>
                                </ul>
                            </div>
                            <?php
                            } else
                            {
                            ?>
                            <!--top-page-right-->
                            <div class="col-3 top-page-end">
                                <ul class="d-flex justify-content-end">
                                    <div>
                                        <li class="py-1"><i class="fa fa-shopping-cart fa-lg" data-bs-toggle="offcanvas" data-bs-target="#addbag"></i></li>
                                    </div>
                                    <!--search-button-start-->
                                    <div class="search-box px-3">
                                        <input type="text" placeholder="search...">
                                        <a href="search.php" class="iconsearch">
                                        <i class="fa fa-search fa-lg"></i>
                                        </a>
                                    </div>
                                    <!--search-button-end-->
                                    <!--Modal Sign In Button-->
                                    <li class="py-1">
                                        <a class="sign-in" data-bs-toggle="modal" type="button" data-bs-target="#sign-in">Sign in |</a>
                                    </li>
                                    <!--Modal Sign Up Button-->
                                    <li class="py-1">
                                        <a class="sign-up smt" data-bs-toggle="modal" type="button" data-bs-target="#sign-up">Sign up</a>
                                    </li>
                                </ul>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </header>
                
                <!--NAVBAR-->
                <nav class="section header">
                    <div class="container navbar-here border-0">
                        <ul class="nav justify-content-center">
                            <li class="nav-item"><a class="nav-link" href="home.php">HOME</a></li>
                            <li class="dropdown2"><a href="#">SHOP ALL</a>
                            <ul class="dropdown2-content dropdown-menu">
                                <li><a href="category.php">Rings</a></li>
                                <li><a href="category.php">Earrings</a></li>
                                <li><a href="category.php">Necklaces</a></li>
                                <li><a href="category.php">Bracelets</a></li>
                            </ul>
                            </li>
                            <li class="nav-item nav-test">
                                <a class="nav-link" href="guide.php">JEWELLERY GUIDE</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="about-us.php">ABOUT US</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.php">CONTACT</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <script>            
                 document.getElementById("openlogin").onclick = function(){
                     //document.getElementById("sign-in").modal();
                     var myModal = new bootstrap.Modal(document.getElementById('sign-in'));
                     myModal.show();
                 };
            </script>
            <script>    
                var prevScrollpos = window.pageYOffset;
                window.onscroll = function() {
                var currentScrollPos = window.pageYOffset;
                if (prevScrollpos > currentScrollPos) {
                    document.getElementById("headnav").style.top = "0";
                } else {
                    document.getElementById("headnav").style.top = "-150px";
                }
                prevScrollpos = currentScrollPos;
                }
            </script>   
    </body>
</html>