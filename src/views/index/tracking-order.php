<?php define('URLROOT', 'http://localhost:8888/project-php'); 
session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tracking Order</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo URLROOT?>/public/css/fonts.css">
        <link rel="stylesheet" href="<?php echo URLROOT?>/public/css/tracking-order.css">
        <link rel="stylesheet" href="<?php echo URLROOT?>/public/css/style.css">
    </head>
    <body>
        <div>
            <?php require_once '../includes/header.php';?>
        </div> 
        <div class="container" disabled="true">
            <h4 class="text-center mb-2">Tracking Order</h4>
            <h6 class="orderid text-center">Order: #98089899</h6>
            <ul class="progressbar mb-5">
                <li class="active">Ordered <p class="smt">12/11/22</p></li>
                <li class="active">Ready<p class="smt">12/11/22</p></li>
                <li class="">Shipped <p class="smt">Est: 14/11/22</p></li>
                <li class="">Delivered <p class="smt">Est: 15/11/22</p></li>
            </ul>
            <h6 class="mb-4">Updates:</h6>
            <div class="row">
                <div class="col-4 ps-0">
                    <p class="mb-0 mdt">Date</p>
                </div>
                <div class="col-4">
                    <p class="mb-0 mdt">Locations</p>
                </div>
                <div class="col-4 pe-0">
                    <p class="mb-0 text-right mdt">Event</p>
                </div>
            </div>
            <div class="line my-3"></div>
            <div class="row">
                <div class="col-4 ps-0">
                    <p class="mb-0 smt">12/11/22 - 20:00</p>
                </div>
                <div class="col-4">
                    <p class="mb-0 smt">6901 Hollywood Blvd, LA, CA 90028, US</p>
                </div>
                <div class="col-4 pe-0">
                    <p class="decor-text text-right mb-2">Ready</p>
                    <p class="text-right smt mb-0">Waiting for carrier</p>
                </div>
            </div>
            <div class="line my-3"></div>
            <div class="row">
                <div class="col-4 ps-0">
                    <p class="mb-0 smt">12/11/22 - 16:00</p>
                </div>
                <div class="col-4">
                    <p>-</p>
                </div>
                <div class="col-4 pe-0">
                    <p class="decor-text text-right mb-0">Ordered</p>
                </div>
            </div>
            <div class="align-cen button-back">
                <button class="btn btnlg btn-pri" href="category.php">Continue shopping</button>
            </div>
        </div>
        <div>
            <?php require_once '../includes/footer.php';?>
        </div> 
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>