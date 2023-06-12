<?php
require_once('config/database.php');

class model_user extends Database
{
    public $conn;
    public $data;
    function UserCnn()
    {
        $this->conn = new Database();
        $this->data = array();
    }
    function CheckUserAccount($email,$pass)
    {
        $sql = "SELECT * FROM Customers WHERE email=? and password=?";
        $data[] = $email;
        $data[] = $pass;
        $ketqua = $this->conn->set_query($sql,$data);
        $this->data=null;
        if($ketqua == true)
            $this->data = $this->conn->pdo_stm->fetchAll();
        return $ketqua;
    }
}
?>