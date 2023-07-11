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
                var myModalLogin = new bootstrap.Modal(document.getElementById('sign-in'));
                    myModalLogin.show();
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
            <?php
            if($_SESSION["sign_up_user_fail"]!="")
            {
            ?>
            <script>
                var myModalSignup = new bootstrap.Modal(document.getElementById('sign-up'));
                    myModalSignup.show();
            </script>
            <?php
            }
            ?>
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
                            <!--top-page-right-->
                            <div class="col-3 top-page-end">
                                <ul class="d-flex justify-content-end">
                                     <div class="pe-3">
                                        <li class="py-1"><i class="fa fa-shopping-cart fa-lg" data-bs-toggle="offcanvas" data-bs-target="#addbag"></i></li>
                                    </div>
                                    <!--search-button-start-->

                                    <div class=" search-box">
                                        <input type="text" name ="keywordprd" placeholder="search...">
                                        <a href="search.php" class="iconsearch">
                                        <i class="fa fa-search fa-lg"></i>
                                        </a>
                                    </div>
                                    <!--search-button-end-->
                                    <?php
                                    if($_SESSION["logined_user"]=="OK")
                                    {
                                    ?>
                                    <!--Log out if user logined succes-->
                                    <!-- dropdown -->
                                    <div class="ms-3">
                                        <!-- <div class="usericon dropdown" id="usericon"> Thêm lớp "dropdown" vào đây -->
                                            <!-- =$_SESSION["user_email"] -->
                                            <!-- <div class="dropdown-menu"> Thêm lớp "dropdown-menu" vào đây -->
                                                <!-- <a class="dropdown-item" href="../index/user-account.php">User's account</a> -->
                                                <!-- <a class="dropdown-item" href="../includes/user_logout.php">Sign out</a> -->
                                            <!-- </div> -->
                                        <!-- </div> -->

                                        <!-- NTD  -->
                                        <div class="user-icon">
                                            <div class="textover">
                                                <?=$_SESSION["user_email"]?>
                                            </div>
                                            <div class="user-dropdown">
                                                <div class="mb-2">
                                                    <a class="" href="../index/user-account.php">User's account</a>
                                                </div>
                                                <div>
                                                    <a class="sign-up smt" href="../includes/user_logout.php">Sign out</a>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <?php
                                    } else{
                                    ?>
                                    <!--Modal Sign In Button-->
                                    <li class="py-1 ps-3">
                                        <a class="sign-in" data-bs-toggle="modal" type="button" data-bs-target="#sign-in">Sign in|</a>
                                    </li>
                                    <!--Modal Sign Up Button-->
                                    <li class="py-1">
                                        <a class="sign-up smt" data-bs-toggle="modal" type="button" data-bs-target="#sign-up">Sign up</a>
                                    </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
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
                                <li><a href="category.php?category=rings">Rings</a></li>
                                <li><a href="category.php?category=earrings">Earrings</a></li>
                                <li><a href="category.php?category=necklaces">Necklaces</a></li>
                                <li><a href="category.php?category=bracelets">Bracelets</a></li>
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
        var myModalLogin = new bootstrap5.Modal(document.getElementById('sign-in'));
        myModalLogin.show();
    };

    document.getElementById("opensignup").onclick = function(){
        var myModalSignup = new bootstrap5.Modal(document.getElementById('sign-up'));
        myModalSignup.show();
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
<?php
if(isset($_SESSION["logined_fail"]))
    unset($_SESSION["logined_fail"]);
if(isset($_SESSION["user_email_fail"]))
    unset($_SESSION["user_email_fail"]);
if(isset($_SESSION["user_pass_fail"]))
    unset($_SESSION["user_pass_fail"]);

    if(isset($_SESSION["sign_up_user_name_err"]))
    unset($_SESSION["sign_up_user_name_err"]);
    if(isset($_SESSION["sign_up_user_address_err"]))
    unset($_SESSION["sign_up_user_address_err"]);
    if(isset($_SESSION["sign_up_user_phone_err"]))
    unset($_SESSION["sign_up_user_phone_err"]);
    if(isset($_SESSION["sign_up_user_email_err"]))
    unset($_SESSION["sign_up_user_email_err"]);
    if(isset($_SESSION["sign_up_user_pass_err"]))
    unset($_SESSION["sign_up_user_pass_err"]);
    if(isset($_SESSION["sign_up_user_repass_err"]))
    unset($_SESSION["sign_up_user_repass_err"]);

    if(isset($_SESSION["sign_up_user_fail"]))
    unset($_SESSION["sign_up_user_fail"]);

    if(isset($_SESSION["sign_up_user_email_fail"]))
    unset($_SESSION["sign_up_user_email_fail"]);
    if(isset($_SESSION["sign_up_user_phone_fail"]))
    unset($_SESSION["sign_up_user_phone_fail"]);
    if(isset($_SESSION["sign_up_user_repass_fail"]))
    unset($_SESSION["sign_up_user_repass_fail"]);

    
?>