<!DOCTYPE html>
<html>
    <head>
        <title>Tracking Order</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/c813cf59a3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="../css/fonts.css">
        <Link rel="stylesheet" type="text/css" href="../css/tracking-order.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <div class="">
            <?php include 'header.php';?>
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
        <div class="">
            <?php include 'footer.php';?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>