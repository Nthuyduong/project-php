<?php
require_once("model_database.php");
class model_review extends Database
{
    public $data;
    function __construct()
    {
        parent::__construct();
        $this->data = NULL;
    }
    //ttmh - getreviewProductDetail ? check lai?
    function getReviewProductById($id)
    {
        $sql = "SELECT r.* , c.Name
        FROM Reviews r
        INNER JOIN Products p ON p.ID=r.Product_ID
        INNER JOIN Customers c ON c.ID=r.Customer_ID
        WHERE p.ID= ?";
        $param = [$id];
        $ketqua = $this->set_query($sql, $param);
        if ($ketqua == true)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }
   
}
?>