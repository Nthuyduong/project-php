<?php define('URLROOT', 'http://localhost:8888/project-php'); ?>
<?php
session_start();
require_once("../../core/checklogin_user.php");
?>
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
                    <img class="" src="../../../public/images/user/banner.png"/>
                </div>
            </div>
            <div class="container-fluid">
                <div class="d-flex user-title w-150">
                    <!-- User's Avata here -->
                    <div class="d-flex me-auto">
                        <div class="">
                            <img class="w-100 user-img" src="../../../public/images/user/user.png"/>
                        </div>
                        <div class="w-150">
                            <h6><?=$_SESSION["user_name"]?></h6>
                            <p><?=$_SESSION["user_email"]?></p>
                        </div>
                    </div>
                </div>
                <div class="line mt-40 mt-60"></div>
                <!-- CONTENT ALL HERE -->
                <div >
                    <div class="row">
                        <!-- SIDE BAR HERE -->
                        <!-- Create tabs to change content -->
                            <div class="col-2">
                                <div class="user-nav nav nav-tabs" id="myTab" role="tablist">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a  class="nav-link active" id="info-tab" data-bs-toggle="tab" data-bs-target="#infor" type="button" role="tab" aria-controls="infor" aria-selected="true">
                                                Personal Information
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="order-tab" data-bs-toggle="tab" data-bs-target="#order" type="button" role="tab" aria-controls="order" aria-selected="false">
                                                Order History
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="pass-tab" data-bs-toggle="tab" data-bs-target="#pass" type="button" role="tab" aria-controls="pass" aria-selected="false">
                                                Password
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
                            <!-- CUSTOMER INFORMATION TAB -->
                            <div class="col-10">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="infor" role="tabpanel" aria-labelledby="info-tab">
                                    <form action="../../controllers/controller_user_update.php" method="post">
                                        <div class="row">
                                            
                                                <div class="col-6">
                                                    <div>
                                                        <label for="usermail">Email Address</label>
                                                        <p for="usermail"><?=$_SESSION["user_email"]?></p>
                                                    </div>
                                                    <div class="my-3">
                                                        <label for="username">Full Name</label>
                                                        <input class="inpu" name="username" id="username" value="<?=$_SESSION["user_name"]?>"/>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div>
                                                        <label for="userphone">Phone Number</label>
                                                        <input class="inpu" name="userphone" id="userphone" value="<?=$_SESSION["user_phone"]?>"/>
                                                    </div>
                                                    <div class="my-3">
                                                        <label for="useradd">Address</label>
                                                        <input class="inpu" name="useraddress" id="useraddress" value="<?=$_SESSION["user_address"]?>"/>
                                                    </div>
                                                    <!-- <div class="btn btn-pri">Edit information</div> -->
                                                    <input type="submit" class="btn btn-pri" name="b1" id="b1" value="Edit"/>
                                                </div>
                                            
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="order" role="tabpanel" aria-labelledby="order-tab">
                                    <!-- ORDER HISTORY TAB -->
                                    <div class="col-10">
                                        <div class="tbl">
                                            <div class="tb-row title-row">
                                                <div class="cell">ID</div>
                                                <div class="cell">ORDER DATE</div>
                                                <div class="cell">ITEMS</div>
                                                <div class="cell">GRAND TOTAL ($)</div>
                                                <div class="cell">STATUS</div>
                                                <div class="cell">ACTION</div>
                                                <div class="cell"></div>
                                            </div>
                                            <div class="tb-row">
                                                <div class="cell">12</div>
                                                <div class="cell">12/03/23</div>
                                                <div class="cell">1</div>
                                                <div class="cell">20.000</div>
                                                <div class="cell stt-out">
                                                    <div class="stt stt1">Pending</div>
                                                </div>
                                                <div class="cell">
                                                    <div class="btn btnsm btn-sec">Cancel</div>
                                                </div>
                                                <div>icon</div>
                                            </div>
                                            <div class="tb-row">
                                                <div class="cell">24</div>
                                                <div class="cell">19/04/23</div>
                                                <div class="cell">2</div>
                                                <div class="cell">30.000</div>
                                                <div class="cell stt-out">
                                                    <div class="stt stt1">Processing</div>
                                                </div>
                                                <div class="cell"></div>
                                                <div>icon</div>
                                            </div>
                                            <div class="tb-row">
                                                <div class="cell">24</div>
                                                <div class="cell">19/04/23</div>
                                                <div class="cell">2</div>
                                                <div class="cell">30.000</div>
                                                <div class="cell stt-out">
                                                    <div class="stt stt1">Delivered</div>
                                                </div>
                                                <div class="cell"></div>
                                                <div>icon</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pass" role="tabpanel" aria-labelledby="pass-tab">
                                    <!-- CHANGE PASSWORD TAB -->
                                    <div class="row">
                                        <div class="col-2"></div>
                                        <div class="col-8">
                                            <h4 class="mb-5 alg-center">Change Your Password Here!</h4>
                                            <div>
                                                <label for="uservermail">Email Address</label>
                                                <input class="inpu" name="uservermail" id="uservermail" placeholder=""/>
                                            </div>
                                            <div class="my-3">
                                                <label for="usercurpass">Current Password</label>
                                                <input class="inpu" name="usercurpass" id="usercurpass" placeholder=""/>
                                            </div>
                                            <div>
                                                <label for="userretype">Re-type Current Password</label>
                                                <input class="inpu" name="userretype" id="userretype" placeholder=""/>
                                            </div>
                                            <div class="row mt-5">
                                                <div class="col-6 ps-0">
                                                    <div class="w-100 btn btn-sec">Cancel</div>
                                                </div>
                                                <div class="col-6 pe-0">
                                                    <div class="w-100 btn btn-pri">Change Password</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2"></div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="notify" role="tabpanel" aria-labelledby="notify-tab">
                                    <!-- NOTIFICATION TAB???? -->
                                    <div>Notifications show here</div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <?php require_once '../includes/footer.php';?>
        <script>
        $(document).ready(function() {
            $('#b1').click(function() {
                // Lấy giá trị từ các trường input
                var username = $('#username').val();
                var userphone = $('#userphone').val();
                var address = $('#useraddress').val();

                // Gửi yêu cầu Ajax
                $.ajax({
                url: 'update.php',  // Đường dẫn tới file xử lý cập nhật trên server
                method: 'POST',
                data: {
                    column1: column1Value,
                    column2: column2Value
                },
                success: function(response) {
                    // Xử lý kết quả trả về nếu cần
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    // Xử lý lỗi nếu có
                    console.error(error);
                }
                });
            });
        });
        </script>
    </body>
</html>