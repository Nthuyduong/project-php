<?php define('URLROOT', 'http://localhost:8888/project-php'); 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Thank you</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo URLROOT?>/public/css/fonts.css">
        <link rel="stylesheet" href="<?php echo URLROOT?>/public/css/thank-you.css">
        <link rel="stylesheet" href="<?php echo URLROOT?>/public/css/style.css">
    </head>
    <body>
        <div>
            <?php  error_reporting(E_ALL); ?>
            <?php require_once '../includes/header.php'?>
            <?php require("../../models/model_order_ex.php"); ?>
        </div>
        <div class="container-fluid">
            <div>
                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                </svg>
            </div>
            <h3 class="text-center mb-3">Thank you! Your Order Has Been Processed!</h3>
            <p class="text-center mb-3">You will receive an order confirmation email with details of your order.</p>
            <p class="mdt text-center mb-4">TrackID: #98089899</p>
            <div class="row thanks">
                <div class="col-2"></div>
                <div class="col-4">
                <button routerLink="/tracking-order" class="btn btnlg btn-sec w-100">Tracking Order</button>
                </div>
                <a class="col-4" href="home.php">
                    <button class="btn btnlg btn-pri w-100">Continue shopping</button>
                </a>
                <div class="col-2"></div>
            </div>
        </div>

        <div>
            <?php require_once '../includes/footer.php';?>
        </div>
    </body>
</html>