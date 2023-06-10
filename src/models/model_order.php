<?php
require_once("model_database.php");
class model_order
{
    public $conn;
    public $data;
    //Lay danh sach hoa don
    //Tinh tong tien san pham (GRAND TOTAL)

    //$code la ma hoa don
    public function GrandTotal($code)
    {
        
    }

    //Tim hoa don
    public function SearchOrder($code)
    {
        $sql = "SELECT * FROM Order WHERE id=?";
        $data[] = $code;
        $ketqua = $this->conn->set_query($sql,$data);
        $this->data=null;
        if($ketqua == true)
            $this->data = $this->conn->pdo_stm->fetch();
        return $ketqua;
    }
}
?>