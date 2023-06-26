<?php define('URLROOT', 'http://localhost:8888/project-php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>User account</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/c813cf59a3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php echo URLROOT?>/public/css/fonts.css">
        <link rel="stylesheet" href="<?php echo URLROOT?>/public/css/user-account.css">
        <link rel="stylesheet" href="<?php echo URLROOT?>/public/css/style.css">
    </head>
    <body>
        <?php require_once '../includes/header.php';?>
        <div>
            <!-- BANNER HERE -->
            <div>
                <div>
                    <img src="../../../public/images/user/banner.png"/>
                </div>
            </div>
            <div class="container-fluid">
                <!-- User's Avata here -->
                <div>
                    <div class="user-img">
                        <img src=".../.../.../public/images/user.png"/>
                    </div>
                </div>
                <div class="d-flex">
                    <div>
                        <h6>Nthyduong898</h6>
                        <p>Nthduong@gmail.com</p>
                    </div>
                    <!-- Button logout here -->
                    <div>
                        <a class="btn-lg-pr-admin">Log out</a>
                    </div>
                </div>
                <!-- CONTENT ALL HERE -->
                <div>
                    <div class="row">
                        <!-- SIDE BAR HERE -->
                        <!-- Create tabs to change content -->
                        <div class="col-2">
                            <div class="nav nav-tabs mb-5" id="myTab" role="tablist">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a  class="nav-link active" id="info-tab" data-bs-toggle="tab" data-bs-target="#infor" type="button" role="tab" aria-controls="infor" aria-selected="true">
                                            Personal Information
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="billing-tab" data-bs-toggle="tab" data-bs-target="#billing" type="button" role="tab" aria-controls="billing" aria-selected="false">
                                            Billing & Payment
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="order-tab" data-bs-toggle="tab" data-bs-target="#order" type="button" role="tab" aria-controls="order" aria-selected="false">
                                            Order History
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="notify-tab" data-bs-toggle="tab" data-bs-target="#notify" type="button" role="tab" aria-controls="notify" aria-selected="false">
                                            Notification
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="col-5">
                                <div>
                                    <label for="usermail">Email Address</label>
                                    <input name="usermail" id="usermail" placeholder="Nthduong898@gmail.com"/>
                                </div>
                                <div class="my-3">
                                    <label for="username">Full Name</label>
                                    <input name="userfn" id="userfn" placeholder="Nguyen Thuy Duong"/>
                                </div>
                                <div>
                                    <label for="DOB">DOB</label>
                                    <input class="" name="userDOB" id="userDOB" placeholder="19/08/1998"/>
                                </div>
                            </div>
                            <div class="col-5">
                                <div>
                                    <label for="userphone">Phone Number</label>
                                    <input name="userphone" id="userphone" placeholder="012345678"/>
                                </div>
                                <div class="my-3">
                                    <label for="useradd">Address</label>
                                    <input name="useradd" id="useradd" placeholder="So 1, Nguyen Trai, Thanh Xuan, Ha Noi"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <?php require_once '../includes/footer.php';?>
    </body>
</html>