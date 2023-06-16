<?php
//require_one('models/model_login.php');
namespace App\Controllers;

session_start();
if(require($_REQUEST[""]==false))
{
    $alert = "Ban chua dang nhap";
    //link tiep tuc dang nhap? 
    //nhung chua biet se ve trang home hay gi :))
    $ctn_link = "";
    //hien thi bang thong bao
    require("alert.php");
    die();
}
class Controller_login
{
    $user = $_REQUEST[""];
    $pass = $_REQUEST[""];
    $pass = md5($pass);
    $admin = new model_admin();
    //kiem tra tai khoan xem da login hay chua? Ham kiem tra?
    $ketqua = $admin;
    if($ketqua == false)
    {
        $alert = "Loi truy van CSDL";
        //mo ra trang tiep tuc dang nhap
        $ctn_link = "";
        //hien thi modal ket qua
        require("");
    }
    $rows = $admin->data;
    //Dang nhap thanh cong
    if($rows != null)
    {
        if($rows["trangthai"]==1)
        {
            $_SESSION["logined"] = "OK";
            $_SESSION["user"] = $row["username"];

            $alert = "Dang nhap thanh cong";
            $ctn_link = "";
            //hien thi modal thong bao ket qua
            require("");
        }
        else
        {
            $alert = "Tai khoan da bi khoa";
            //Tiep tuc form login
            $ctn_link = "";
            //hien thi modal thong bao ket qua
            require("");
        }
    }
    else
    {
        $alert = "Dang nhap sai user hoac password";
        //tiep tuc dang nhap
        $ctn_link = "";
        //hien thi modal thong bao ket qua dang nhap
        require("");
    } 
}
?>