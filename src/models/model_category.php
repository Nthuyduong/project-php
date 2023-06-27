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
        $sql = "SELECT * FROM Sub_categories";
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
    // function DeleteCategory()
    // {
        
    // }
}
?>