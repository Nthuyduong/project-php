<?php
require_once("model_database.php");
class model_admin
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

    function CheckAccount($user, $pass)
    {
        //Select username va password tu bang Admin trong Project2
        $sql = "SELECT * FORM Admin WHERE username=? and password=?";
        $data[] = [$user,$pass];
        $ketqua = $this->conn->set_query($sql,$data);
        //Luu ket qua vao $data
        $this->data=null;
        if($ketqua == true)
            $this->data = $this->conn->pdo_stm->fetch();
        return $ketqua;
    }


}