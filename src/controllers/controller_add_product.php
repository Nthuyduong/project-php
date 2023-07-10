<?php
require_once("core/base.php");
//kiem tra xem form da duoc submit/nhap thong tin hay chua
if(isset($_REQUEST[""])==false)
{
    $alert = "Chua nhap thong tin";
}
else
{
    //xem lai thong tin trong bang va thong tin tu offcanvas nhap san pham moi
    //Lay thong tin tu form
    $tensp = $_REQUEST["prdname"];
    $donvi = $_REQUEST["prdunit"];
    $giasp = $_REQUEST["prdprice"];
    $mota = $_REQUEST["prddesc"];
    $soluong = $_REQUEST["prdquan"];
    $hanh = $_REQUEST[""];
    $SKU = $_REQUEST["prdsku"];
    $cate = $_REQUEST["prdcate"];
    $ketqua = $product->AddProduct($tensp, $donvi, $giasp,$mota,$soluong,$hanh,$chatlieu,$loaida);
}
?>