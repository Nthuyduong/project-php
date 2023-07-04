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
        WHERE MONTH(o.Created_at) = '$currentMonth'";
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
        WHERE YEAR(o.Created_at) = '$currentYear'";
        $ketqua = $this->set_query($sql);
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetch();
        return $ketqua;
    }

    // //Tinh tong tien cho tung phuong thuc thanh toan trong ngay
    // function getPaymentDayTotal($paymentMethod)
    // {
    //     $currentDate = date('Y-m-d');
    //     $sql = "SELECT SUM(o.Grand_total) AS {$paymentMethod}Day_total FROM Orders o
    //             INNER JOIN Payments p ON p.Order_code = o.Code
    //             WHERE DATE(o.Created_at) = :currentDate AND p.Payment_method = :paymentMethod";
    //     $params = array(':currentDate' => $currentDate, ':paymentMethod' => $paymentMethod);
    //     $ketqua = $this->set_query($sql, $params);
    //     if ($ketqua == true) {
    //         $this->data = $this->pdo_stm->fetch();
    //     }
    //     return $ketqua;
    // }

    
     function PaypalDay()
     {
        $Pday = date('Y-m-d');
         $sql = "SELECT SUM(o.Grand_total) AS PaypalDay_total FROM Orders o
         INNER JOIN Payments p ON p.Order_code = o.Code
         WHERE DATE(o.Created_at) = '$Pday' AND p.Payment_method = 'Paypal'";
         $ketqua = $this->set_query($sql);
         if($ketqua == true)
            $this->data = $this->pdo_stm->fetch();
        return $ketqua;
     }

     function VisaDay()
     {
        $Vday = date('Y-m-d');
        $sql = "SELECT SUM(o.Grand_total) AS VisaDay_total FROM Orders o
        INNER JOIN Payments p ON p.Order_code = o.Code
        WHERE DATE(o.Created_at) = '$Vday' AND p.Payment_method = 'Visa'";
        $ketqua = $this->set_query($sql);
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetch();
        return $ketqua;
     }

     function MasterDay()
     {
        $Mday = date('Y-m-d');
        $sql = "SELECT SUM(o.Grand_total) AS MasterDay_total FROM Orders o
        INNER JOIN Payments p ON p.Order_code = o.Code
        WHERE DATE(o.Created_at) = '$Mday' AND p.Payment_method = 'Master Card'";
        $ketqua = $this->set_query($sql);
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetch();
        return $ketqua;
     }

     function PaypayMonth()
     {
        $Pmonth = date('m');
        if(substr($Pmonth, 0, 1) === '0')
        {
            $Pmonth = substr($Pmonth, 1);
        }
         $sql = "SELECT SUM(o.Grand_total) AS PaypalMonth_total FROM Orders o
         INNER JOIN Payments p ON p.Order_code = o.Code
         WHERE MONTH(o.Created_at) = '$Pmonth' AND p.Payment_method = 'Paypal'";
         $ketqua = $this->set_query($sql);
         if($ketqua == true)
            $this->data = $this->pdo_stm->fetch();
        return $ketqua;
     }

     function VisaMonth()
     {
        $Vmonth = date('m');
        if(substr($Vmonth, 0, 1) === '0')
        {
            $Pmonth = substr($Vmonth, 1);
        }
        $sql = "SELECT SUM(o.Grand_total) AS VisaMonth_total FROM Orders o
        INNER JOIN Payments p ON p.Order_code = o.Code
        WHERE MONTH(o.Created_at) = '$Vmonth' AND p.Payment_method = 'Visa'";
        $ketqua = $this->set_query($sql);
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetch();
        return $ketqua;
     }

     function MasterMonth()
     {
        $Mmonth = date('m');
        if(substr($Mmonth, 0, 1) === '0')
        {
            $Pmonth = substr($Mmonth, 1);
        }
        $sql = "SELECT SUM(o.Grand_total) AS MasterMonth_total FROM Orders o
        INNER JOIN Payments p ON p.Order_code = o.Code
        WHERE MONTH(o.Created_at) = '$Mmonth' AND p.Payment_method = 'Master Card'";
        $ketqua = $this->set_query($sql);
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetch();
        return $ketqua;
     }

     function PaypalYear()
     {
        $Pyear = date('Y');
         $sql = "SELECT SUM(o.Grand_total) AS PaypalYear_total FROM Orders o
         INNER JOIN Payments p ON p.Order_code = o.Code
         WHERE YEAR(o.Created_at) = '$Pyear' AND p.Payment_method = 'Paypal'";
         $ketqua = $this->set_query($sql);
         if($ketqua == true)
            $this->data = $this->pdo_stm->fetch();
        return $ketqua;
     }

     function VisaYear()
     {
        $Vyear = date('Y');
         $sql = "SELECT SUM(o.Grand_total) AS VisaYear_total FROM Orders o
         INNER JOIN Payments p ON p.Order_code = o.Code
         WHERE YEAR(o.Created_at) = '$Vyear' AND p.Payment_method = 'Visa'";
         $ketqua = $this->set_query($sql);
         if($ketqua == true)
            $this->data = $this->pdo_stm->fetch();
        return $ketqua;
     }

     function MasterYear()
     {
        $Myear = date('Y');
         $sql = "SELECT SUM(o.Grand_total) AS MasterYear_total FROM Orders o
         INNER JOIN Payments p ON p.Order_code = o.Code
         WHERE YEAR(o.Created_at) = '$Myear' AND p.Payment_method = 'Master Card'";
         $ketqua = $this->set_query($sql);
         if($ketqua == true)
            $this->data = $this->pdo_stm->fetch();
        return $ketqua;
     }

    //  Count number of orders
    function getOrderCounts() {
        $sql = "SELECT
                    (SELECT COUNT(Code) FROM Orders) AS total_order,
                    (SELECT COUNT(Code) FROM Orders WHERE Status = 'Pending') AS pending_order,
                    (SELECT COUNT(Code) FROM Orders WHERE Status = 'Processing') AS processing_order,
                    (SELECT COUNT(Code) FROM Orders WHERE Status = 'Delivered') AS delivered_order";
        
        $ketqua = $this->set_query($sql);
        if ($ketqua == true) {
            $this->data = $this->pdo_stm->fetch();
        }
        
        return $ketqua;
    }

    // Select top 5 featured item
   function TopProduct()
   {
        $sql = "SELECT oi.Product_ID, p.Name AS Product_Name, p.Price, p.Thumb, COUNT(oi.Product_ID) AS Total_Count
        FROM Order_items oi
        INNER JOIN Products p ON oi.Product_ID = p.ID
        GROUP BY oi.Product_ID, p.Name
        ORDER BY Total_Count DESC
        LIMIT 4";
        $ketqua = $this->set_query($sql);
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetchAll();
        return $ketqua;
   }
}
?>