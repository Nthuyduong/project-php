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
        WHERE DATE(o.Created_at) = '$currentDate' AND o.Status = 'Delivered'";
        $ketqua = $this->set_query($sql);
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetch();
        return $ketqua;
    }

    //Tinh tong grand_total Orders trong thang
    function GrandTotalMonth()
    {
        $currentMonth = date('m');
        if (substr($currentMonth, 0, 1) === '0') {
            $currentMonth = substr($currentMonth, 1);
        }
        $sql = "SELECT SUM(o.Grand_total) AS Month_total FROM Orders o
        WHERE MONTH(o.Created_at) = '$currentMonth' AND o.Status = 'Delivered'";
        $ketqua = $this->set_query($sql);
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetch();
        return $ketqua;
    }

    //function tinh tong grand_total Orders trong nam
    function GrandTotalYear()
    {
        $currentYear = date('Y');
        $sql = "SELECT SUM(o.Grand_total) AS Year_total FROM Orders o
        INNER JOIN Payments p ON o.Code = p.Order_code
        WHERE YEAR(o.Created_at) = '$currentYear' AND o.Status='Delivered' AND p.Payment_method = 'Paypal'";
        $ketqua = $this->set_query($sql);
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetch();
        return $ketqua;
    }
     //Paypal total/day
     function PaypalDay()
     {
        $Pday = date('Y-d-m');
         $sql = "SELECT SUM(o.Grand_total) AS PaypalDay_total FROM Orders o
         INNER JOING Payments p ON p.Order_code = o.Code
         WHERE DATE(o.Created_at) = '$Pday' AND o.Status = 'Delivered' AND p.Payment_method = 'Paypal'";
         $ketqua = $this->set_query($sql);
         if($ketqua == true)
            $this->data = $this->pdo_stm->fetch();
        return $ketqua;
     }
    //count total order 
    function Total_order()
    {
        $sql = "SELECT COUNT(o.Code) AS total_order FROM Orders o";
        $ketqua = $this->set_query($sql);
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetch();
        return $ketqua;
    }
    
    // count pending order
    function Pending_order()
    {
        $sql = "SELECT COUNT(o.Code) AS pending_order FROM Orders o
        WHERE o.Status = 'Pending'";
        $ketqua = $this->set_query($sql);
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetch();
        return $ketqua;
    }

    // count processing order
    function Processing_order()
    {
        $sql = "SELECT COUNT(o.Code) AS processing_order FROM Orders o
        WHERE o.Status = 'Processing'";
        $ketqua = $this->set_query($sql);
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetch();
        return $ketqua;
    }

    // count delivered order
    function Delivered_order()
    {
        $sql = "SELECT COUNT(o.Code) AS delivered_order FROM Orders o
        WHERE o.Status = 'Delivered'";
        $ketqua = $this->set_query($sql);
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetch();
        return $ketqua;
    }


    // function testfordate()
    // {
    //     $currentDate = date('d');
    //     //Select payment method from Payments table
    //     $sql = "SELECT DISTINCT Payment_method FROM Payments";
    //     $ketqua = $this->set_query($sql);
    //     $PaymentMethod = array();
    //     if($ketqua == true)
    //     {
    //         $result = $this->pdo_stm->fetchAll();
    //         foreach($result as $row)
    //         {
    //             $PaymentMethod[] = $row('Payment_method');
    //         }
    //     }
        
    //     // calculate grand_total base on payment methods
    //     $result = array();
    //     foreach($PaymentMethod as $Method)
    //     {
    //         $sql = "SELECT SUM(o.Grand_total) AS Total FROM Orders o
    //         INNER JOIN Payments p ON o.Code = p.Order_code
    //         WHERE DATE(o.Created_at) = '$currentDate' AND p.Payment_method = '$Method'";

    //         $ketqua = $this->set_query($sql);
    //         if ($ketqua == true) {
    //             $result = $this->pdo_stm->fetch();
    //             $total = $result['Total'];
    //             $results[$Method] = $total;
    //         }

    //     }
    //     $formattedArray = array();
    //     foreach ($results as $method => $total) {
    //         // Format the total as currency (assuming USD)
    //         $formattedTotal = '$' . number_format($total, 2);
        
    //         // Display the payment method and total
    //         $formattedArray[] = "$method: $formattedTotal";
    //     }
    //     return $formattedArray;
    
    // }

   
}
?>