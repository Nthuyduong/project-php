<?php
require_once("model_database.php");

class Product extends Database {
    public $data = null;

    function __construct() {
        parent::__construct();
        $this->data = NULL;
    }

    // get products list (all products)
    function getProductsList() {
        $sql = "SELECT * FROM Products";
        $result = $this -> set_query($sql);
		// save result(s) to $data
		if($result==true)
			$this->data = $this->pdo_stm -> fetchAll();
		return $result; // return true/false
    }

    // get product by category name
    function getProductByCategory($category) {
        $sql = "SELECT tb1.Name AS pname, tb1.ID AS pid, tb1.Thumb as thumb, tb1.Price as price
                FROM Products tb1 LEFT JOIN Sub_categories tb2 ON tb1.Sub_category_ID = tb2.ID 
                WHERE tb2.Category=?";
		$params = [$category];
 		$result = $this -> set_query($sql, $params);
		if ($result == true)
			$this->data = $this->pdo_stm -> fetchAll();
		return $result; // return true/false
    }

    // get sub-category by category
    function getSubCategoryByCategory($category) {
        $sql = "SELECT ID, Name FROM Sub_categories WHERE Category=?";
		$params = [$category];
 		$result = $this -> set_query($sql, $params);
		if ($result == true)
			$this->data = $this->pdo_stm -> fetchAll();
		return $result; // return true/false
    }

    // get product by sub-category id
    function getProductsBySid($sid) {
        $sql = "SELECT 
            tb1.Name AS pname, tb1.ID AS pid, tb1.Thumb as thumb, tb1.Price as price,
            tb2.Name AS subCategory, tb2.Category AS category
            FROM Products tb1 LEFT JOIN Sub_categories tb2 ON tb1.Sub_category_ID = tb2.ID 
            WHERE tb2.ID=?";
		$params = [$sid];
 		$result = $this -> set_query($sql, $params);
		if ($result == true)
			$this->data = $this->pdo_stm -> fetchAll();
		return $result; // return true/false
    }

    // get product by product id
    function getProductById($pid) {
        $sql = "SELECT * FROM Products WHERE ID=?";
		$params = [$pid];
 		$result = $this -> set_query($sql, $params);
		if ($result == true)
			$this->data = $this->pdo_stm -> fetch();
		return $result; // return true/false
    }

    // get medias by pid
    function getMediasById($pid) {
        $sql = "SELECT Url FROM Medias WHERE Product_ID=?";
		$params = [$pid];
 		$result = $this -> set_query($sql, $params);
		if ($result == true)
			$this->data = $this->pdo_stm -> fetchAll();
		return $result; // return true/false
    }

    // get product info by id
    function getProductInfoById($pid) {
        $sql = "SELECT 
                tb1.ID AS pid, tb1.Name AS pname, tb1.Price as price, tb1.Description as description, tb1.Thumb as thumb,
                tb2.ID as sid, tb2.Name as subCategory, tb2.Category as category
                FROM Products tb1 
                LEFT JOIN Sub_categories tb2 ON tb1.Sub_category_ID = tb2.ID 
                WHERE tb1.ID=?";
		$params = [$pid];
 		$result = $this -> set_query($sql, $params);
		if ($result == true)
			$this->data = $this->pdo_stm -> fetch();
		return $result; // return true/false
    }

    // get new arrivals
    function getNewArrivals() {
        $sql = "SELECT * FROM Products ORDER BY Created_at DESC LIMIT 12";
 		$result = $this -> set_query($sql);
		if ($result == true)
			$this->data = $this->pdo_stm -> fetchAll();
		return $result; // return true/false
    }
}

// class model_product extends Database
// {
//     public $data;
//     //Tao doi tuong va ket noi CSDL
//     function __construct()
//     {
//         parent::__construct();
//         $this->data = NULL;
//     }

//     //Ham lay danh sach san pham
//     function GetListProducts()
//     {
//         // $sql = "SELECT * FROM Products";
//         $sql = "SELECT tb1.ID, tb1.Name, tb1.Price, tb1.Description, tb1.Category, tb1.Sub_category, SUM(tb1.Stock) AS TotalStock
//         FROM (SELECT p.ID, p.Unit, p.Name, p.Material, p.Price, p.Description, p.Deleted_at, s.Category, s.Name
//         AS Sub_category, d.Stock FROM Products p
//         INNER JOIN Sub_categories s ON p.Sub_category_ID = s.ID
//         INNER JOIN Product_details d ON p.ID = d.Product_ID) AS tb1
//         GROUP BY tb1.ID, tb1.Unit, tb1.Name, tb1.Material, tb1.Price, tb1.Description, tb1.Sub_category";
//         $ketqua = $this->set_query($sql);
//         if ($ketqua == true)
//             $this->data = $this->pdo_stm->fetchAll();
//         return $ketqua;
//     }

//     //Lay danh sach sub-category theo category
//     function GetSubByCategory($category)
//     {
//         $sql = "SELECT Sub_categories.Name FROM Sub_categories WHERE Category = ?";
//         $param = null;
//         if ($category != "") {
//             $param = ["$category"];
//         }
//         $ketqua = $this->set_query($sql, $param);
//         if ($ketqua == true)
//             $this->data = $this->pdo_stm->fetchAll();
//         return $ketqua;
//     }

//     //Lay danh sach san pham theo sub-category name
//     function GetListBySub($subname, $keyword, $sort)
//     {
//         $sql = "SELECT tb1.ID, tb1.Name, tb1.Price, tb1.Description, tb1.Category, tb1.Sub_category, SUM(tb1.Stock) AS TotalStock
//         FROM (SELECT p.ID, p.Unit, p.Name, p.Material, p.Price, p.Description, p.Deleted_at, s.Category, s.Name
//         AS Sub_category, d.Stock FROM Products p
//         INNER JOIN Sub_categories s ON p.Sub_category_ID = s.ID
//         INNER JOIN Product_details d ON p.ID = d.Product_ID) AS tb1
//         WHERE tb1.Sub_category LIKE '%$subname%'
//         AND tb1.Deleted_at IS NULL
//         AND tb1.Name LIKE '%$keyword%'
//         GROUP BY tb1.ID, tb1.Unit, tb1.Name, tb1.Material, tb1.Price, tb1.Description, tb1.Sub_category";

//         $param = null;
//         // if ($sort != null) {
//             if ($sort == "lowtohigh") {
//                 $sql .= " ORDER BY tb1.Price ASC";
//                 $param = ["$sort"];
//             }
//             if ($sort == "hightolow") {
//                 $sql .=  " ORDER BY tb1.Price DESC";
//                 $param = ["$sort"];
//             }
//             // $param = "$sort";
//         // }
//         $ketqua = $this->set_query($sql, $param);
//         if ($ketqua == true)
//             $this->data = $this->pdo_stm->fetchAll();
//         return $ketqua;
//     }

//     //Them san pham
//     function AddProduct($name, $unit, $price, $description, $stock, $thumb, $material, $jewelry_type, $collection)
//     {
//         //Dien cac gia tri trong bang Product o day
//         $sql = "INSERT INTO Products VALUE(?,?,?,?,?,?,?,?,?)";
//         $data = [$name, $unit, $price, $description, $stock, $thumb, $material, $jewelry_type, $collection];
//         $ketqua = $this->set_query($sql, $data);
//         return $ketqua;
//     }

//     //Sua san pham
//     function UpdateProduct($name, $description, $price, $category, $Sub_category_ID, $stock)
//     {
//         $sql = "UPDATE Products SET name=?, description = ?, price=?, category=?, Sub_category_ID=?, stock=? WHERE id=?";
//         $data = [$name, $description, $price, $category, $Sub_category_ID, $stock];
//         //Tuong tu voi cac bien khac
//         $ketqua = $this->set_query($sql, $data);
//         return $ketqua;
//     }

//     //An san pham: Delete_at
//     function DeleteProduct($id)
//     {
//         $sql = "UPDATE `Products` SET `Deleted_at` = NOW() WHERE `Products`.`ID` = $id";
//         $ketqua = $this->set_query($sql);
//         return $ketqua;
//     }

//     //Tim san pham theo Product name
//     function SearchProduct($keyword)
//     {
//         $sql = "SELECT tb1.ID, tb1.Name, tb1.Price, tb1.Description, tb1.Category, tb1.Sub_category, SUM(tb1.Stock) AS TotalStock
//         FROM (SELECT p.ID, p.Unit, p.Name, p.Material, p.Price, p.Description, p.Deleted_at, s.Category, s.Name
//         AS Sub_category, d.Stock FROM Products p
//         INNER JOIN Sub_categories s ON p.Sub_category_ID = s.ID
//         INNER JOIN Product_details d ON p.ID = d.Product_ID) AS tb1
//         WHERE tb1.Deleted_at IS NULL
//         AND tb1.Name LIKE '%$keyword%'
//         GROUP BY tb1.ID, tb1.Unit, tb1.Name, tb1.Material, tb1.Price, tb1.Description, tb1.Sub_category;";
//         $ketqua = $this->set_query($sql);
//         if ($ketqua == true)
//             $this->data = $this->pdo_stm->fetchAll();
//         return $ketqua;
//     }

//     // Display information of a Product
//     function GetProductByID($id)
//     {
//         $sql = "SELECT tb1.ID, tb1.Name, tb1.Price, tb1.Material, tb1.Jewelry_type, tb1.Description, tb1.Category, tb1.Sub_category, SUM(tb1.Stock) AS TotalStock
//         FROM (SELECT p.ID, p.Unit, p.Name, p.Material, p.Jewelry_type, p.Price, p.Description, p.Deleted_at, s.Category, s.Name
//         AS Sub_category, d.Stock FROM Products p
//         INNER JOIN Sub_categories s ON p.Sub_category_ID = s.ID
//         INNER JOIN Product_details d ON p.ID = d.Product_ID) AS tb1
//         WHERE tb1.ID=?
//         GROUP BY tb1.ID, tb1.Unit, tb1.Name, tb1.Material, tb1.Price, tb1.Description, tb1.Sub_category";
//         $param = null;
//         if ($id != "") {
//             $param = ["$id"];
//         }
//         $ketqua = $this->set_query($sql, $param);
//         if ($ketqua == true)
//             $this->data = $this->pdo_stm->fetch();
//     }


//     // ttmh - tim san pham bt keyword
//     function GetListProductsByKeyword($keyword)
//     {
//         $sql = "SELECT * FROM Products WHERE TRUE ";

//         if ($keyword != "") {
//             $sql .= " AND Name LIKE '%$keyword%' ";
//         }
//         $ketqua = $this->set_query($sql);
//         if ($ketqua == true)
//             $this->data = $this->pdo_stm->fetchAll();
//         return $ketqua;
//     }
//     //ttmh - getreviewProductDetail ? check lai?
//     function getReviewProductById($id)
//     {
//         $sql = "SELECT r.* ,d.ID, c.Name
//         FROM Reviews r
//         INNER JOIN Products p ON p.ID=r.Product_ID
//         INNER JOIN Product_details d ON d.Product_ID=p.ID
//         INNER JOIN Customers c ON c.ID=r.Customer_ID
//         WHERE d.ID= ?";
//         $param = [$id];
//         $ketqua = $this->set_query($sql, $param);
//         if ($ketqua == true)
//             $this->data = $this->pdo_stm->fetchAll();
//         return $ketqua;
//     }

//     // Create select category
//     function CateSelect($tbname, $colid, $colname, $selectid)
//     {
//         $sql = "SELECT $tbname.$colname FROM $tbname GROUP BY $tbname.$colname";
//         $ketqua = $this->set_query($sql);
//         if ($ketqua == true)
//             $rows = $this->pdo_stm->fetchAll();
//         foreach ($rows as $row) {
//             $id = $row["$colid"];
//             $name = $row["$colname"];
//             if ($id == $selectid)
//                 echo "<option value='$name'>$name</option>";
//             else
//                 echo "<option value='$name'>$name</option>";
//         }
//     }
// }

