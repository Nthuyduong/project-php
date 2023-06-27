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
        $sql = "SELECT .*, c.Name AS Customer_name
        FROM Orders o
        INNER JOIN Customers c ON o.Customer_ID = c.Name";
        $ketqua = $this->set_query($sql);
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }
    //Lay danh sach hoa don
    //Tinh tong tien san pham (GRAND TOTAL)
    // function GrandTotal()
    // {
        
    // }

    //Tim hoa don
    public function FindOrder($code)
    {
        $sql = "SELECT * FROM Orders WHERE code=?";
        $data[] = $code;
        $ketqua = $this->set_query($sql,$data);
        $this->data=null;
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }

    //Chi tiet hoa don
    
}
?>