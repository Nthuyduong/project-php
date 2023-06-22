<?php
if(isset($_SESSION["logined"])==false || $_SESSION["logined"]=="")
?>
    <h4>Ban chua dang nhap</h4>
    <!-- Chuyen den trang dang nhap -->
    <a href='../index/admin_login.php'>Moi dang nhap</a>
<?php
die();
?>