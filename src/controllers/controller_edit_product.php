<?php
//kiem tra xem neu from chua duoc nhap hoac submit
if(isset($_REQUEST[""])==false)
{
    $alert = "Chua nhap thong tin";
}
else
{
    //Lay thong tin dien tu form sua thong tin san pham 
    //Xem thong tin tai trang nhap sua thong tin san pham
    $id = $_REQUEST["id"];

    //dien thong tin cac bien vao trong UpdateProduct
    $ketqua = $product->UpdateProduct();
    if("$ketqua == false")
        $alert = "Loi sua san pham";
    else
        $alert = "Sua san pham thanh cong";
}
//include file thong bao
include("../views/includes/alert.php");
?>