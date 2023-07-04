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
                                                <p id="email" for="usermail"><?=$_SESSION["user_email"]?></p>
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
                            <div class="tab-pane fade" id="order" role="tabpanel" aria-labelledby="order-tab">
                                <!-- Thêm nội dung của tab "Order History" vào đây -->
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
            function updateAJAX(event)
            {   
                event.preventDefault();
                email = $("#email").text();
                username = $("#username").val(); 
                userphone = $("#userphone").val();
                useraddress = $("#useraddress").val();
            
                $.ajax({
                    url: "../../controllers/controller_user_update.php",
                    type: "POST",
                    data: {
                        email:email,
                        username: username,
                        userphone:userphone,
                        useraddress:useraddress},
                        success: function(responseData,status) {
                        if(status=="success"){
                            alert("Thành công");
                        }
                        else
                            alert("ERROR");
                    }
                });
            } 
            $(document).ready(function () {
                $("#updateform").submit(updateAJAX);
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