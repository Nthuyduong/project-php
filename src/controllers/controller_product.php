<?php
require_once("models/model_database.php");
//tao bien chua noi dung tong bao
$alert = "";
//tao bien chuwa tieu de thong bao
$alert_title = "Tieu de thong bao";
$act = isset($_REQUEST["act"])?$_REQUEST["act"]:"";
//Tao doi tuong san pham moi
$product = new model_product();

if($act == "them")
{
    //hien thi form them san pham
    require("views/");
}
//xu ly them san pham
else if($act == "xulythem")
{
    require("xulythem.php");
}
else if($act == "sua")
{
    //Hien thi phan sua san pham
    require("views/");
}
//Xu ly sua san pham
else if($act ==  "xulysua")
{
    require("xulysua.php");
}
else if($act == "xoa")
{
    //hien thi phan xoa san pham
    require("views/");
}
//xu ly xoa san pham
else if($act == "xulyxoa")
{
    require("xulyxoa.php");
}
//neu $act khong co gia tri khac thi se hien thi trang dashboard - danh sach san pham
else
{

    $ketqua = $product->GetListProducts();
    //hien thi trang chua danh sach san pham
    require("/views/");
}

?>