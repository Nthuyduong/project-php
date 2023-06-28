<?php
require_once("model_database.php");
class model_customer extends Database
{
    public $data;

    function __construct()
    {
        parent:: __construct();
        $this->data = NULL;
    }

    function GetCustomers()
    {
        $sql = "SELECT * FROM Customers";
        $ketqua = $this->set_query($sql);
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }

    //Search customer by NAME
    function FindCustomer($keyword = "")
    {
        $sql = "SELECT * FROM Customers WHERE Name LIKE '%$keyword%'";
        $ketqua = $this->set_query($sql);
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }
}
?>