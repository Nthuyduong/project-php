<?php
require_once("model_database.php");

class Order extends Database {
    public $data = null;

    function __construct() {
        parent::__construct();
        $this->data = NULL;
    }

    // get cart product
    function getCartProducts($uid) {
        $sql = "SELECT * FROM Order_items tb1 
            LEFT JOIN Orders tb2 ON tb1.Order_code = tb2.Code 
            LEFT JOIN Products tb3 ON tb1.Product_ID = tb3.ID 
            WHERE tb2.Customer_ID = ? AND tb2.Status=0";
		$params = [$uid];
 		$result = $this -> set_query($sql, $params);
		if ($result == true)
			$this->data = $this->pdo_stm -> fetchAll();
		return $result; // return true/false
    }
}
