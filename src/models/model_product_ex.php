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
                tb1.ID AS pid, tb1.Name AS pname, tb1.Price AS price, tb1.Description AS description, tb1.Thumb AS thumb,
                tb1.Material AS material, tb1.Jewelry_type AS jewelry,
                tb2.ID AS sid, tb2.Name AS subCategory, tb2.Category AS category
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

    // get similar products
    function getSimilarProducts($sid, $pid) {
        $sql = "SELECT 
            tb1.Name AS pname, tb1.ID AS pid, tb1.Thumb as thumb, tb1.Price as price,
            tb2.Name AS subCategory, tb2.Category AS category
            FROM Products tb1 LEFT JOIN Sub_categories tb2 ON tb1.Sub_category_ID = tb2.ID 
            WHERE tb2.ID=? AND tb1.ID!=?";
		$params = [$sid, $pid];
 		$result = $this -> set_query($sql, $params);
		if ($result == true)
			$this->data = $this->pdo_stm -> fetchAll();
		return $result; // return true/false
    }

    // get quickview info
    function getQuickviewInfo($pid) {
        $sql = "SELECT 
            tb1.Name AS pname, tb1.ID AS pid, tb1.Thumb as thumb, tb1.Price as price,
            GROUP_CONCAT(tb2.Url) AS urls
            FROM Products tb1 LEFT JOIN Medias tb2 ON tb1.ID = tb2.Product_ID 
            WHERE tb1.ID = ? GROUP BY tb1.Name, tb1.ID, tb1.Thumb, tb1.Price";
		$params = [$pid];
 		$result = $this -> set_query($sql, $params);
		if ($result == true)
			$this->data = $this->pdo_stm -> fetch();
		return $result; // return true/false
    }
}
