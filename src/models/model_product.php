<?php
require_once("model_database.php");
class model_product extends Database
{
    public $data;
    //Tao doi tuong va ket noi CSDL
    function __construct()
    {
        parent:: __construct();
        $this->data = NULL;
    }

    //Ham lay danh sach san pham
    function GetListProducts()
    {
        // $sql = "SELECT * FROM Products";
        $sql = "SELECT p.*, s.Name AS sub_category_name, s.Category AS category_name, Product_details.Stock AS Stock
        FROM Products p INNER JOIN Sub_categories s
        ON p.Sub_category_ID = s.ID
        INNER JOIN Product_details
        ON p.ID = Product_details.Product_ID";
        $ketqua = $this->set_query($sql);
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }

    //Them san pham
    function AddProduct($name, $unit, $price, $description, $stock, $thumb, $material, $jewelry_type, $collection)
    {
        //Dien cac gia tri trong bang Product o day
        $sql = "INSERT INTO Products VALUE(?,?,?,?,?,?,?,?,?)";
        $data = [$name, $unit, $price, $description, $stock, $thumb, $material, $jewelry_type, $collection];
        $ketqua = $this->set_query($sql,$data);
        return $ketqua;
    }

    //Sua san pham
    function UpdateProduct($id, $name, $unit, $price, $description, $stock, $thumb, $material, $jewelry_type, $collection)
    {
        $sql = "UPDATE Products SET name=?, unit = ?, price=?, description=?, stock=?, thumb=?, material=?, jewelry_type=? WHERE id=?";
        $data = [$id, $name, $unit, $price, $description, $stock, $thumb, $material, $jewelry_type, $collection];
        //Tuong tu voi cac bien khac
        $ketqua = $this->set_query($sql,$data);
        return $ketqua;
    }

    //Xoa san pham
    function DeleteProduct($id)
    {
        $sql = "DELETE FROM Products WHERE id=?";
        $data[] = $id;
        $ketqua = $this->set_query($sql, $data);
        return $ketqua;
    }

    //Tim san pham theo ID
    function SearchProduct($id)
    {
        $sql = "SELECT * FROM Products WHERE id=?";
        $data[] = $id;
        $ketqua = $this->set_query($sql,$data);
        $this->data=null;
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetch();
        return $ketqua;
    }
    //Tim san pham theo ten san pham
    function SearchProductByName($name)
    {
        $sql = "SELECT * FROM Products WHERE name LIKE ?";
        $name = "%$name%";
        $data[] = $name;
        $ketqua = $this->set_query($sql,$data);
        $this->data =null;
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }

    //Co nen thay doi stock(so luong sp) sang trang thai (con hang hay het hang) hay khong
    

}
?>