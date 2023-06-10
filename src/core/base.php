<?php
//Ham tai len mot tap tin
function UploadFile($inputName, $Folder)
{
    //Tra ve chuoi rong neu co loi trong qua trinh tai len
    if($_FILES[$inputName]["error"]!=0);
        return "";
    //Khoi tao bien
    $filename = "";
    $tmp_name = "";
    //Lay ten file upload
    $filename = $_FILES[$inputName]["name"];
    //Lay duong dan tam thoi den tap tin
    $tmp_name = $_FILES[$inputName]["name"];
    //Kiem tra dinh dang duoi cua file
    $arr = explode(".",$filename); //tach chuoi thanh mang con tach nhau dau .
    $file_ext = strtolower(end($arr)); //Lay phan tu cuoi cung cua mang
    $list_anh = array("jpg","png","gift","jpeg");
    if(in_array($file_ext,$list_anh)==false)//neu khong co duoi tep anh
        return "";
    move_uploaded_file($tmp_name, "$Folder/$filename");
    return $filename;
}
?>