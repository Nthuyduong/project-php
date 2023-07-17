<?php
require_once("model_database.php");
class model_subcate extends Database
{
    public $data;
    
    function __construct()
    {
        parent:: __construct();
        $this->data = NULL;
    }

    //Get list Sub-category by Category
    function GetSubcate($category)
    {
        $sql = "SELECT * FROM `Sub_categories` WHERE `Category` LIKE '%$category%'";
        $ketqua = $this->set_query($sql);
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }

    //search sub-category by name
    function SearchSubcate($keyword)
    {
        $sql = "SELECT * FROM Sub_categories WHERE Sub_categories.Name LIKE '%$keyword%'";
        $ketqua = $this->set_query($sql);
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetchAll();
    }

    // Add new sub-category
    function AddSubcategory($subname, $category, $description)
    {
        $sql = "INSERT INTO Sub_categories VALUE(?,?,?)";
        $param = null;
        if($subname != "" && $category != "" && $description != "")
            $param = [$subname, $category, $description];
        $ketqua = $this->set_query($sql,$param);
        return $ketqua;
    }

}
?>