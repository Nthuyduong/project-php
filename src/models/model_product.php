<?php
require_once("model_database.php");

class model_product extends Database
{
    public $data;
    //Tao doi tuong va ket noi CSDL
    function __construct()
    {
        parent::__construct();
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
        INNER JOIN Product_details d ON p.ID = d.Product_ID) AS tb1
        GROUP BY tb1.ID, tb1.Unit, tb1.Name, tb1.Material, tb1.Price, tb1.Description, tb1.Sub_category";
        $ketqua = $this->set_query($sql);
        if ($ketqua == true)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }

    //Lay danh sach sub-category theo category
    function GetSubByCategory($category)
    {
        $sql = "SELECT Sub_categories.Name FROM Sub_categories WHERE Category = ?";
        $param = null;
        if ($category != "") {
            $param = ["$category"];
        }
        $ketqua = $this->set_query($sql, $param);
        if ($ketqua == true)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }

    //Lay danh sach san pham theo sub-category name
    function GetListBySub($subname, $keyword, $sort)
    {
        $sql = "SELECT tb1.Material, tb1.Jewelry_type, tb1.Unit, tb1.ID, tb1.Name, tb1.Price, tb1.Description, tb1.Category, tb1.Sub_category, SUM(tb1.Stock) AS TotalStock
        FROM (SELECT p.Jewelry_type, p.ID, p.Unit, p.Name, p.Material, p.Price, p.Description, p.Deleted_at, s.Category, s.Name
        AS Sub_category, d.Stock FROM Products p
        INNER JOIN Sub_categories s ON p.Sub_category_ID = s.ID
        INNER JOIN Product_details d ON p.ID = d.Product_ID) AS tb1
        WHERE tb1.Sub_category LIKE '%$subname%'
        AND tb1.Deleted_at IS NULL
        AND tb1.Name LIKE '%$keyword%'
        GROUP BY tb1.ID, tb1.Unit, tb1.Name, tb1.Material, tb1.Price, tb1.Description, tb1.Sub_category";

        $param = null;
        // if ($sort != null) {
        if ($sort == "lowtohigh") {
            $sql .= " ORDER BY tb1.Price ASC";
            $param = ["$sort"];
        }
        if ($sort == "hightolow") {
            $sql .=  " ORDER BY tb1.Price DESC";
            $param = ["$sort"];
        }
        // $param = "$sort";
        // }
        $ketqua = $this->set_query($sql, $param);
        if ($ketqua == true)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }

    //Them san pham
    // stock in table product_detail
    function AddProduct($name, $unit, $price, $description, $material, $jewelry_type, $subcate, $collection, $thummb)
    {
        $sql = "INSERT INTO Products(Name,Unit,Price,Description,Material,Jewelry_type,Sub_category_ID,Collection,Thumb) VALUE(?,?,?,?,?,?,?,?,?)";
        $param = null;
        if ($name != "" && $unit != "" && $price != "" && $description != "" && $material != "" && $jewelry_type != "" && $subcate = "" && $collection != "" && $thummb != "")
            $param = [$name, $unit, $price, $description, $material, $jewelry_type, $subcate, $collection, $thummb];
        $ketqua = $this->set_query($sql, $param);
        return $ketqua;
    }

    //Sua san pham
    function UpdateProduct($name, $description, $price, $category, $Sub_category_ID, $stock)
    {
        $sql = "UPDATE Products SET name=?, description = ?, price=?, category=?, Sub_category_ID=?, stock=? WHERE id=?";
        $param = [$name, $description, $price, $category, $Sub_category_ID, $stock];
        //Tuong tu voi cac bien khac
        $ketqua = $this->set_query($sql, $param);
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
        if ($ketqua == true)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }

    // Display information of a Product
    function GetProductByID($id)
    {
        $sql = "SELECT tb1.ID, tb1.Name, tb1.Price, tb1.Material, tb1.Jewelry_type, tb1.Description, tb1.Category, tb1.Sub_category, SUM(tb1.Stock) AS TotalStock
        FROM (SELECT p.ID, p.Unit, p.Name, p.Material, p.Jewelry_type, p.Price, p.Description, p.Deleted_at, s.Category, s.Name
        AS Sub_category, d.Stock FROM Products p
        INNER JOIN Sub_categories s ON p.Sub_category_ID = s.ID
        INNER JOIN Product_details d ON p.ID = d.Product_ID) AS tb1
        WHERE tb1.ID=?
        GROUP BY tb1.ID, tb1.Unit, tb1.Name, tb1.Material, tb1.Price, tb1.Description, tb1.Sub_category";
        $param = null;
        if ($id != "") {
            $param = ["$id"];
        }
        $ketqua = $this->set_query($sql, $param);
        if ($ketqua == true)
            $this->data = $this->pdo_stm->fetch();
    }


    // ttmh - tim san pham bt keyword
    function GetListProductsByKeyword($keyword)
    {
        $sql = "SELECT * FROM Products WHERE TRUE ";

        if ($keyword != "") {
            $sql .= " AND Name LIKE '%$keyword%' ";
        }
        $ketqua = $this->set_query($sql);
        if ($ketqua == true)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }

    // Create select category
    function CateSelect($tbname, $colid, $colname, $selectid)
    {
        $sql = "SELECT $tbname.$colname FROM $tbname GROUP BY $tbname.$colname";
        $ketqua = $this->set_query($sql);
        if ($ketqua == true)
            $rows = $this->pdo_stm->fetchAll();
        foreach ($rows as $row) {
            $id = $row["$colid"];
            $name = $row["$colname"];
            if ($id == $selectid)
                echo "<option value='$name'>$name</option>";
            else
                echo "<option value='$name'>$name</option>";
        }
    }

    function ddName($tbname, $colname)
    {
        $sql = "SELECT $tbname.$colname FROM $tbname GROUP BY $tbname.$colname";
        $ketqua = $this->set_query($sql);
        if ($ketqua == true)
            $rows = $this->pdo_stm->fetchAll();
        foreach ($rows as $row) {
            $name = $row["$colname"];
            echo "<option value='$name'>$name</option>";
        }
    }
}
