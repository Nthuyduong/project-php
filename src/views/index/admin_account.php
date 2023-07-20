<?php define('URLROOT', 'http://localhost:8888/project-php'); ?>
<?php
session_start();
require_once("../../models/model_product.php");
require("../../core/checklogin.php");
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c813cf59a3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/fonts.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/admin-style.css">
</head>

<body>
    <?php require_once '../includes/sidebar.php' ?>

    <div id="main">
        <?php require_once '../includes/ad-header.php' ?>
        <div class="db-title mt-4">ADMIN ACCOUNT</div>
        <div class="mb-5">Welcome you back!</div>
        <div></div>
        <!-- Admin tabs -->

        <!-- tabs begin here -->
        <div class="nav nav-tabs mb-5" id="myTab" role="tablist">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <!-- <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="information-tab" data-bs-toggle="tab" data-bs-target="#information" type="button" role="tab" aria-controls="information" aria-selected="true">
                        Admin's Information
                    </a>
                </li> -->
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="password-tab" data-bs-toggle="tab" data-bs-target="#password" type="button" role="tab" aria-controls="password" aria-selected="false">
                        Change password
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="notify-tab" data-bs-toggle="tab" data-bs-target="#notify" type="button" role="tab" aria-controls="notify" aria-selected="false">
                        Notification
                    </a>
                </li>
            </ul>
        </div>

        <!-- tabs contents -->
        <div class="tab-content" id="myTabContent">
            <!-- <div class="tab-pane fade show active" id="information" role="tabpanel" aria-labelledby="information-tab">
                <div>
                    <div class="">
                        <div>Admin name</div>
                        <input class="" id="adname" name="adname"/>
                    </div>
                    <div class="my-3">
                        <div></div>
                        <input class="" id="" name=""/>
                    </div>
                    <div>
                        <div></div>
                        <input class="" id="" name=""/>
                    </div>
                </div>
            </div> -->
            <div class="tab-pane fade show active" id="password" role="tabpanel" aria-labelledby="password-tab">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <div>
                            <div>Admin account</div>
                            <input class="" id="username" name="username" value="" />
                        </div>
                        <div class="my-4">
                            <div>Password</div>
                            <input class="" id="password" name="password" value="" />
                        </div>
                        <div class="mt-3 btn-lg-pr-admin">Change information</div>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
            <div class="tab-pane fade" id="notify" role="tabpanel" aria-labelledby="notify-tab">
                <div>All notification here</div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>