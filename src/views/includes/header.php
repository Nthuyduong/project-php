<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/c813cf59a3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="http://localhost:8888/project-php/public/css/style.css">
    </head>
    <body>
        <div>
            <?php include 'login.php';?>
        </div>
        <div>
            <?php include 'bag.php'; ?>
        </div>
            <div id="headnav">
                <!--HEADER-->
                <header class="section top-page">
                    <div class="header card-header border-0 container">
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
                                    <li class="py-1">
                                    <!--Modal Sign In Button-->
                                    <a class="sign-in" data-bs-toggle="modal" type="button" data-bs-target="#sign-in">Sign in</a>
                                    </li>
                                    <div>
                                        <li class="px-3 py-1"><i class="fa fa-shopping-cart fa-lg" data-bs-toggle="offcanvas" data-bs-target="#addbag"></i></li>
                                    </div>
                                    <!--search-button-start-->
                                    <div class="search-box">
                                        <input type="text" placeholder="search...">
                                        <a href="search.php" class="iconsearch">
                                        <i class="fa fa-search fa-lg"></i>
                                        </a>
                                    </div>
                                    <!--search-button-end-->
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
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>