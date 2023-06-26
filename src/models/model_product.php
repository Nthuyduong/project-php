<?php
require_once("model_database.php");
class model_product extends Database
{
    public $conn;
    //Tao mang chua san pham
    public $data;
    //Tao doi tuong va ket noi CSDL
    function ProductCnn()
    {
        $this->conn = new Database();
        $this->data = array();
    }

    //Ham lay danh sach san pham
    function GetListProducts()
    {
        $sql = "SELECT * FROM Product";
        $ketqua = $this->conn->set_query($sql);
        if($ketqua == true)
            $this->data = $this->conn->pdo_stm->fetchAll();
        return $ketqua;
    }

    //Them san pham
    function AddProduct($name, $unit, $price, $description, $stock, $thumb, $material, $jewelry_type)
    {
        //Dien cac gia tri trong bang Product o day
        $sql = "INSERT INTO Product VALUE(?,?,?,?,?,?,?)";
        $data = [$name, $unit, $price, $description, $stock, $thumb, $material, $jewelry_type];
        $ketqua = $this->conn->set_query($sql,$data);
        return $ketqua;
    }

    //Sua san pham
    function UpdateProduct($id, $name, $unit, $price, $description, $stock, $thumb, $material, $jewelry_type)
    {
        $sql = "UPDATE Product SET name=?, unit = ?, price=?, description=?, stock=?, thumb=?, material=?, jewelry_type=? WHERE id=?";
        $data = [$id, $name, $unit, $price, $description, $stock, $thumb, $material, $jewelry_type];
        //Tuong tu voi cac bien khac
        $ketqua = $this->conn->set_query($sql,$data);
        return $ketqua;
    }

    //Xoa san pham
    function DeleteProduct($id)
    {
        $sql = "DELETE FROM Product WHERE id=?";
        $data[] = $id;
        $ketqua = $this->conn->set_query($sql, $data);
        return $ketqua;
    }

    //Tim san pham theo ID
    function SearchProduct($id)
    {
        $sql = "SELECT * FROM Product WHERE id=?";
        $data[] = $id;
        $ketqua = $this->conn->set_query($sql,$data);
        $this->data=null;
        if($ketqua == true)
            $this->data = $this->conn->pdo_stm->fetch();
        return $ketqua;
    }
    //Tim san pham theo ten san pham
    function SearchProductByName($name)
    {
        $sql = "SELECT * FROM Product WHERE name LIKE ?";
        $name = "%$name%";
        $data[] = $name;
        $ketqua = $this->conn->set_query($sql,$data);
        $this->data =null;
        if($ketqua == true)
            $this->data = $this->conn->pdo_stm->fetchAll();
        return $ketqua;
    }

    //Co nen thay doi stock(so luong sp) sang trang thai (con hang hay het hang) hay khong
    

}
?>