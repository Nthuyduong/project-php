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
    function GetListProducts($subct = 0)
    {
        // $sql = "SELECT * FROM Products";
        $sql = "SELECT tb1.ID, tb1.Name, tb1.Price, tb1.Description, tb1.Category, tb1.Sub_category, SUM(tb1.Stock) AS TotalStock
        FROM (SELECT p.ID, p.Unit, p.Name, p.Material, p.Price, p.Description, p.Deleted_at, s.Category, s.Name
        AS Sub_category, d.Stock FROM Products p
        INNER JOIN Sub_categories s ON p.Sub_category_ID = s.ID
        INNER JOIN Product_details d ON p.ID = d.Product_ID) AS tb1
        WHERE 1
        GROUP BY tb1.ID, tb1.Unit, tb1.Name, tb1.Material, tb1.Price, tb1.Description, tb1.Sub_category";
        if($subct > 0)
            $sql .= "AND tb1.Name = $subct";
        $ketqua = $this->set_query($sql);
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }

    //Lay danh sach sub-category theo category
    function GetSubByCategory($category)
    {
        $sql = "SELECT Sub_categories.Name FROM Sub_categories WHERE Category = ?";
        $param = null;
        if($category != "")
        {
            $param = ["$category"];
        }
        $ketqua = $this->set_query($sql, $param);
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }

    //Lay danh sach san pham theo sub-category name
    function GetListBySub($subname)
    {
        $sql="SELECT tb1.ID, tb1.Name, tb1.Price, tb1.Description, tb1.Category, tb1.Sub_category, SUM(tb1.Stock) AS TotalStock
        FROM (SELECT p.ID, p.Unit, p.Name, p.Material, p.Price, p.Description, p.Deleted_at, s.Category, s.Name
        AS Sub_category, d.Stock FROM Products p
        INNER JOIN Sub_categories s ON p.Sub_category_ID = s.ID
        INNER JOIN Product_details d ON p.ID = d.Product_ID) AS tb1
        WHERE tb1.Sub_category LIKE ?
        GROUP BY tb1.ID, tb1.Unit, tb1.Name, tb1.Material, tb1.Price, tb1.Description, tb1.Sub_category";
        $param = null;
        if($subname != "")
        {
            $param = ["$subname"];
        }
        $ketqua = $this->set_query($sql,$param);
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

    //An san pham: Delete_at
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

    // ttmh - tim san pham bt keyword
    function GetListProductsByKeyword($keyword){
        $sql="SELECT * FROM Products WHERE TRUE ";
        
        if($keyword != "")
        {
            $sql .= " AND Name LIKE '%$keyword%' ";
            
        }
        $ketqua = $this->set_query($sql);
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }


    // Create select category
    function CateSelect($tbname, $colid, $colname, $selectid)
    {
        $sql = "SELECT $tbname.Category FROM $tbname GROUP BY $tbname.Category";
        $ketqua = $this->set_query($sql);
        if($ketqua == true)
            $rows = $this->pdo_stm->fetchAll();
        foreach($rows as $row)
        {
            $id = $row["$colid"];
            $name = $row["$colname"];
            if($id == $selectid)
                echo "<option value='$name' selected>$name</option>";
            else
                echo "<option value='$name'>$name</option>";
        }
    }

    // // Create select sub-category
    // function CreateSubSelect($tbname, $colid, $colname, $selectid)
    // {
    //     $sql = "SELECT * FROM $tbname";
    //     $ketqua = $this->set_query($sql);
    //     if($ketqua == true)
    //         $rows = $this->pdo_stm->fetchAll();
    //     foreach($rows as $row)
    //     {
    //         $id = $row["$colid"];
    //         $name = $row["$colname"];
    //         if($id == $selectid)
    //             echo "<option value='$id' selected>$name</option>";
    //         else
    //             echo "<option value='$id'>$name</option>";
    //     }
    // }
}
?>