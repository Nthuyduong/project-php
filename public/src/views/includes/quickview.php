<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="http://localhost:8888/project-php/public/css/fonts.css">
        <link rel="stylesheet" href="http://localhost:8888/project-php/public/css/style.css">
    </head>
    <body>
        <!--Modal Quick view-->
            <div class="modal fade" id="quickview">
            <div class="modal-dialog modal-dialog-centered quickview">
                <div class="modal-content">
                <div class="row">
                    <div class="col-7 ps-0">
                    <!--Carousel quick view product-->
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img src="../../../images/product-detail/quickview1.png">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="../../../images/product-detail/quickview2.png">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="../../../images/product-detail/quickview3.png">
                        </div>
                        <div class="carousel-item">
                            <img src="../../../images/product-detail/quickview4.png">
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-5 pe-0">
                    <h5>Diamond Wire Ring</h5>
                    <h5 class="my-3">$7,000</h5>
                    <div class="d-flex">
                        <p class="mdt me-auto">Quantity</p>
                        <div class="quantity">
                        <form id='myform' method='POST' class='quantity' action='#'>
                            <i class="fa-solid fa-minus"></i>
                            <input type='text' name='quantity' value='1' class='qty' />
                            <i class="fa-solid fa-plus"></i>
                        </form>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="quick-size my-3">
                        <select class="form-select smt">
                        <option selected>Select size</option>
                        <option value="1">3</option>
                        <option value="2">3 1/2</option>
                        <option value="3">4</option>
                        <option value="3">4 1/2</option>
                        <option value="3">5</option>
                        <option value="3">5 1/2</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-pri mb-3 w-100" data-bs-dismiss="modal">Add to bag</button>
                    <a routerLink="/product-detail">
                        <p>View more detail</p>
                    </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>