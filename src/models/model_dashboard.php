<?php
require_once("model_database.php");
class model_dashboard extends Database
{
    public $data;
    function __construct()
    {
        parent:: __construct();
        $this->data = NULL;
    }
    //Tinh tong grand-total Orders trong ngay
    function GrandTotalDay()
    {
        $currentDate = date('Y-m-d');
        $sql = "SELECT SUM(o.Grand_total) AS Day_total FROM Orders o
        WHERE DATE(o.Created_at) = '$currentDate'";
        $ketqua = $this->set_query($sql);
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }

    //Tinh tong grand_total Orders trong thang
    function GrandTotalMonth()
    {
        $currentMonth = date('m');
        $sql = "SELECT SUM(o.Grand_total) AS Month_total FROM Orders o
        WHERE MONTH(o.Create_at) = '$currentMonth'";
        $ketqua = $this->set_query($sql);
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
    }


}
?>