<?php
require_once("model_database.php");
class model_order extends Database
{
    public $data;

    //Conect Database
    function __construct()
    {
        parent:: __construct();
        $this->data = NULL;
    }
    //Lay thong tin trong bang order
    function GetOrder()
    {
        $sql = "SELECT o.Code, o.Customer_ID, o.Grand_total, o.Status, o.Created_at, c.Name AS Customer_name, p.Payment_method
        FROM Orders o
        INNER JOIN Customers c ON o.Customer_ID = c.ID
        INNER JOIN Payments p ON o.Code = p.Order_code";
        $ketqua = $this->set_query($sql);
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }

    //Tim hoa don
    function FindOrder($code)
    {
        $sql = "SELECT o.Code, o.Customer_ID, o.Grand_total, o.Status, o.Created_at, c.Name AS Customer_name, p.Payment_method
        FROM Orders o
        INNER JOIN Customers c ON o.Customer_ID = c.ID
        INNER JOIN Payments p ON o.Code = p.Order_code
        WHERE o.Code=?";
        $ketqua = $this->set_query($sql,[$code]);
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }

    //Lay danh sach hoa don
    //Tinh tong tien san pham (GRAND TOTAL)
    // function GrandTotal()
    // {
        
    // }
    
}
?>