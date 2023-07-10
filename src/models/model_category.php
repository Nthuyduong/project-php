<?php
require_once("model_database.php");
class model_category extends Database
{
    public $data;
    function __construct()
    {
        parent:: __construct();
        $this->data = NULL;
    }

    function GetCategories()
    {
        $sql = "SELECT s.Category AS U_Category FROM Sub_categories s GROUP BY s.Category";
        $ketqua = $this->set_query($sql);
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }

    //Chuc nang them mot Category va Sub-category la mot???
    function AddCategory($name, $category)
    {
        $sql = "INSERT INTO Sub_categories VALUE(?,?)";
        $data = [$name, $category];
        $ketqua = $this->set_query("$sql,$data");
        return $ketqua;
    }

    //chuc nang xoa category
    function DeleteCategory($keyword)
    {
        // print_r($keyword);
        $sql = "DELETE FROM `Sub_categories` WHERE `Sub_categories`.`Category` = '$keyword'";
        $ketqua = $this->set_query($sql);
        return $ketqua;
    }

    //Search category by name
    function SearchCategory($keyword)
    {
        $sql = "SELECT s.Category AS U_Category FROM Sub_categories s WHERE Category LIKE '%$keyword%' GROUP BY s.Category";
        $ketqua = $this->set_query($sql);
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }
}
?>