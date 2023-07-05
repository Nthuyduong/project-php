<?php
require_once("model_database.php");
class Order extends Database {
    public $data = null;

    function __construct() {
        parent::__construct();
    }
    
    // get product info by id
    function getProductInfoById($pid) {
        $sql = "SELECT 
                tb1.ID AS pid, tb1.Name AS pname, tb1.Price as price, tb1.Description as description,
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
}