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
    
    function GetCustomerByID($id)
    {
        $sql = "SELECT * FROM Customers WHERE ID=?";
        $param = null;
        if($id != "")
        {
            $param = ["$id"];
        }
        $ketqua = $this->set_query($sql,$param);       
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetch();
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

    function DeleteCustomer($id)
    {
        $sql = "DELETE FROM Customers WHERE Customers.ID = ?";
        $param = null;
        if($id != "")
        {
            $param = ["$id"];
        }
        $ketqua = $this->set_query($sql,$param);
        return $ketqua;
    }

    //Select customer by ID
    function SelectCustomerByID()
    {
        $sql = "SELECT * FROM Customers c WHERE c.ID = ?";
        $ketqua = $this->set_query($sql);
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetchAll();
    }

    //Get all order of a customer
    function GetOrderOfCustomer($customer_id)
    {
        $sql = "SELECT o.Code, o.Created_at, o.Grand_total, o.Status
                FROM Orders o
                INNER JOIN Customers c ON o.Customer_ID = c.ID
                WHERE c.ID = ?";
        $param = null;
        if($customer_id != "")
        {
            $param = ["$customer_id"];
        }
        $ketqua = $this->set_query($sql, $param);
        if ($ketqua == true) {
            $this->data = $this->pdo_stm->fetchAll();
        }
    }

}
?>