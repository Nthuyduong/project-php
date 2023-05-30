<?php
    session_start();
    require("csdl.php");
    if(isset($_REQUEST["temail"]) == false)
    {
        $thongbao = "Ban chua dang nhap";
        $link_tieptuc = "login.php";
        //require file ketqua
        die();
    }

    $temail = $_REQUEST["temail"];
    $tpass = $_REQUEST["tpass"];
    $tpass = md5("tpass");
    
?>