<?php
require_once('config/database.php');

class model_user extends Database
{
    public $conn = null;

    //Display Product List
    public function ProductList()
    {
        $sql = "SELECT * FORM";
        $pdo_stm = $this->prepare($sql);
        $ketqua = $pdo_stm->execute();
        if($ketqua == false)
            return null;
        else
            return $pdo_stm->fetchAll();
    }

    //Search Product Function
    public function SearchProduct()
    {
        
    }
}
?>