<?php
require_once("model_database.php");
class Product extends Database {
    public $data = null;

    function __construct() {
        parent::__construct();
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