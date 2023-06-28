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
        $sql = "SELECT tb1.ID, tb1.Name, tb1.Price, tb1.Description, tb1.Category, tb1.Sub_category, SUM(tb1.Stock) AS TotalStock
        FROM (SELECT p.ID, p.Unit, p.Name, p.Material, p.Price, p.Description, p.Deleted_at, s.Category, s.Name
        AS Sub_category, d.Stock FROM Products p
        INNER JOIN Sub_categories s ON p.Sub_category_ID = s.ID
        INNER JOIN Product_details d ON p.ID = d.Product_ID) AS tb1 GROUP BY tb1.ID, tb1.Unit, tb1.Name, tb1.Material, tb1.Price, tb1.Description, tb1.Sub_category";
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

    //An san pham qua Delete_at
    function DeleteProduct($id)
    {
        $sql = "UPDATE `Products` SET `Deleted_at` = NOW() WHERE `Products`.`ID` = $id";
        $ketqua = $this->set_query($sql);
        return $ketqua;
    }

    //Tim san pham theo Product name
    function SearchProduct($keyword)
    {
        $sql = "SELECT tb1.ID, tb1.Name, tb1.Price, tb1.Description, tb1.Category, tb1.Sub_category, SUM(tb1.Stock) AS TotalStock
        FROM (SELECT p.ID, p.Unit, p.Name, p.Material, p.Price, p.Description, p.Deleted_at, s.Category, s.Name
        AS Sub_category, d.Stock FROM Products p
        INNER JOIN Sub_categories s ON p.Sub_category_ID = s.ID
        INNER JOIN Product_details d ON p.ID = d.Product_ID) AS tb1
        WHERE tb1.Deleted_at IS NULL
        AND tb1.Name LIKE '%$keyword%'
        GROUP BY tb1.ID, tb1.Unit, tb1.Name, tb1.Material, tb1.Price, tb1.Description, tb1.Sub_category;";
        $ketqua = $this->set_query($sql);
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }
    //Co nen thay doi stock(so luong sp) sang trang thai (con hang hay het hang) hay khong
    

}
?>