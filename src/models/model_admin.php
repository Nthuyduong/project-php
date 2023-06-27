<?php
require_once("model_database.php");
class model_admin extends Database
{
    public $data;
    //Ket noi CSDL
    function __construct()
    {
        parent:: __construct();
        $this->data = NULL;
    }   

    function CheckAccount($user, $pass)
    {
        //Select username va password tu bang Admin trong Project2
        $sql = "SELECT * FROM Admins WHERE Email=? and Password=?";
        $data[] = [$user,$pass];
        $ketqua = $this->set_query($sql,$data);
        //Luu ket qua vao $data
        $this->data=null;
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetch();
        return $ketqua;
    }


}