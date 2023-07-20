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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/fonts.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/user-account.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style.css">
</head>

<body>
    <?php require_once '../includes/header.php'; ?>
    <div>
        <!-- BANNER HERE -->
        <div>
            <div>
                <img class="" src="../../../public/images/user/banner.png" />
            </div>
        </div>
        <div class="container-fluid">
            <div class="d-flex user-title w-150">
                <!-- User's Avata here -->
                <div class="d-flex me-auto">
                    <div class="my-2">
                        <img class="w-100 user-img rounded-circle" src="../../../public/images/user/user.png" />
                    </div>
                    <div class="w-150 p-4">
                        <h6><?= $_SESSION["user_name"] ?></h6>
                        <p><?= $_SESSION["user_email"] ?></p>
                    </div>
                </div>
            </div>
            <div class="line mt-40 mt-60"></div>
            <!-- CONTENT ALL HERE -->
            <div>
                <div class="row">
                    <div class="col-2">
                        <div class="user-nav nav nav-tabs" id="myTab" role="tablist">
                            <a class="nav-link active" id="info-tab" data-bs-toggle="tab" data-bs-target="#infor" type="button" role="tab" aria-controls="infor" aria-selected="true">
                                Personal Information
                            </a>
                            <a class="nav-link" id="order-tab" data-bs-toggle="tab" data-bs-target="#order" type="button" role="tab" aria-controls="order" aria-selected="false">
                                Order History
                            </a>
                            <a class="nav-link" id="pass-tab" data-bs-toggle="tab" data-bs-target="#pass" type="button" role="tab" aria-controls="pass" aria-selected="false">
                                Password
                            </a>
                            <a class="nav-link" id="notify-tab" data-bs-toggle="tab" data-bs-target="#notify" type="button" role="tab" aria-controls="notify" aria-selected="false">
                                Notification
                            </a>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="infor" role="tabpanel" aria-labelledby="info-tab">
                                <form id="updateform" name="inforuser">
                                    <!-- Thêm nội dung của tab "Personal Information" vào đây -->
                                    <div class="row">

                                        <div class="col-6">
                                            <div>
                                                <label for="usermail">Email Address</label>
                                                <input class="inpu" id="email" name="usermail" value="<?= $_SESSION["user_email"] ?>" />
                                                <!-- <p id="email" for="usermail"></p> -->
                                            </div>
                                            <div class="my-3">
                                                <label for="username">Full Name</label>
                                                <input class="inpu" name="username" id="username" value="<?= $_SESSION["user_name"] ?>" />
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div>
                                                <label for="userphone">Phone Number</label>
                                                <input class="inpu" name="userphone" id="userphone" value="<?= $_SESSION["user_phone"] ?>" />
                                            </div>
                                            <div class="my-3">
                                                <label for="useradd">Address</label>
                                                <input class="inpu" name="useraddress" id="useraddress" value="<?= $_SESSION["user_address"] ?>" />
                                            </div>
                                            <!-- <div class="btn btn-pri">Edit information</div> -->
                                            <div class="row">
                                                <div class="col-6 ps-0">
                                                    <input type="submit" class="btn btn-pri w-100" name="b1" id="b1" value="Edit" />
                                                </div>
                                                <div class="col-6 pe-0">
                                                    <input type="reset" class="w-30 btn btn-sec w-100" name="b2" id="b2" value="Cancel" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="order" role="tabpanel" aria-labelledby="order-tab">
                                <!-- Thêm nội dung của tab "Order History" vào đây -->
                                <div class="col-10">
                                    <div class="">
                                        <?php

                                        ?>
                                        <div class="tb-row title-row">
                                            <div class="cell">ID</div>
                                            <div class="cell">ORDER DATE</div>
                                            <div class="cell">ITEMS</div>
                                            <div class="cell">GRAND TOTAL($)</div>
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
                                                <div class="stt stt1">Delivered</div>
                                            </div>
                                            <div class="cell">
                                                <div class="btn btnsm btn-sec">Cancel</div>
                                            </div>
                                            <div>icon</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pass" role="tabpanel" aria-labelledby="pass-tab">
                            <!-- CHANGE PASSWORD TAB -->
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-8">
                                    <form name="frmchangePass" id="frmchangePass">
                                        <h4 class="mb-5 alg-center">Change Your Password Here!</h4>
                                        <div class="my-3">
                                            <label for="currentPass">Current Password</label>
                                            <input type="password" class="inpu" name="currentPass" id="currentPass" placeholder="" required />
                                        </div>
                                        <div class="my-3">
                                            <label for="newPass">New Password</label>
                                            <input type="password" class="inpu" name="newPass" id="newPass" placeholder="" required />
                                        </div>
                                        <div>
                                            <label for="renewPass">Re-type New Password</label>
                                            <input type="password" class="inpu" name="renewPass" id="renewPass" placeholder="" required />
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-6 ps-0">
                                                <input type="submit" class="w-100 btn btn-pri" name="b3" id="b3" value="Change Password" />

                                            </div>
                                            <div class="col-6 pe-0">
                                                <input type="reset" class="w-100 btn btn-sec" value="Cancel" />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-2"></div>
                            </div>
                        </div>
                        <!-- Notification for user -->
                        <div class="tab-pane fade" id="notify" role="tabpanel" aria-labelledby="notify-tab">
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <?php require_once '../includes/footer.php'; ?>
        <!-- js  update account user Ajax -->
        <script>
            function updateAJAX(event) {
                event.preventDefault();
                email = $("#email").text();
                username = $("#username").val();
                userphone = $("#userphone").val();
                useraddress = $("#useraddress").val();

                $.ajax({
                    url: "../../controllers/controller_user_update_ajax.php",
                    type: "POST",
                    data: {
                        email: email,
                        username: username,
                        userphone: userphone,
                        useraddress: useraddress
                    },
                    success: function(responseData, status) {
                        if (status == "success") {
                            alert("Thành công");
                        } else
                            alert("ERROR");
                    }
                });
            }
            $(document).ready(function() {
                $("#updateform").submit(updateAJAX);
            });
        </script>
        <!-- js change pass Ajax -->
        <script>
            function changePassAJAX(event) {
                event.preventDefault();

                currentPass = $("#currentPass").val();
                newPass = $("#newPass").val();
                renewPass = $("#renewPass").val();

                $.ajax({
                    url: "../../controllers/controller_user_pass_ajax.php",
                    type: "POST",
                    data: {
                        currentPass: currentPass,
                        newPass: newPass,
                        renewPass: renewPass
                    },
                    success: function(responseData, status) {
                        if (responseData === "success") {
                            alert("Password changed successfully");
                            window.location.href = "user-account.php";

                        } else if (responseData === "invalid_current_password") {
                            // Mật khẩu hiện tại không đúng
                            alert("Invalid current password!");
                        } else if (responseData === "password_mismatch") {
                            // Mật khẩu mới và mật khẩu nhập lại không khớp
                            alert("New password and confirm password do not match!");
                        } else if (responseData === "same_password_err") {
                            alert("The new password cannot be the same as the current password");
                        } else {
                            alert("An error occurred. Please try again.");
                        }

                    }
                });
            }
            $(document).ready(function() {
                $("#frmchangePass").submit(changePassAJAX);
            });
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Lắng nghe sự kiện khi click vào các tab
                const tabLinks = document.querySelectorAll(".nav-link");
                tabLinks.forEach(function(link) {
                    link.addEventListener("click", function(e) {
                        e.preventDefault();
                        // Xóa lớp active của tất cả các tab
                        tabLinks.forEach(function(tab) {
                            tab.classList.remove("active");
                        });
                        // Thêm lớp active cho tab được click
                        link.classList.add("active");
                        // Ẩn tất cả nội dung của các tab
                        const tabContents = document.querySelectorAll(".tab-pane");
                        tabContents.forEach(function(content) {
                            content.classList.remove("show", "active");
                        });
                        // Hiển thị nội dung của tab tương ứng với tab được click
                        const target = link.getAttribute("data-bs-target");
                        const tabContent = document.querySelector(target);
                        tabContent.classList.add("show", "active");
                    });
                });
            });
        </script>
</body>

</html>