<?php
require_once("model_database.php");
class model_login
{
    public $conn;
    //Tao mang doi tuong
    public $data;
    //Ket noi CSDL
    function AdminCnn()
    {
        $this->conn = new Database();
        $this->data = array();
    }

    function CheckLogin($user, $pass)
    {
        //Select username va password tu bang Admin trong Project2
        $sql = "SELECT * FROM Admins WHERE Email=? AND Password=?";
        $data[] = [$user,md5($pass)];
        $ketqua = $this->conn->set_query($sql,$data);
        //Luu ket qua vao $data
        $this->data=null;
        if($ketqua == true)
            $this->data = $this->conn->pdo_stm->fetch();
        return $ketqua;
    }


}