<?php
require_once("model_database.php");

class model_user extends Database
{
    public $data;
    function __construct()
    {
        parent::__construct();//gọi hàm tạo của clsDatabase để kết nối CSDL
    }
    //check email này tồn tại trong CSDL chưa
    function CheckUserAccount($email)
    {
        $sql = "SELECT * FROM Customers WHERE Email=?";
        $param[] = $email;
        $ketqua = $this->set_query($sql,$param);
        $this->data=null;
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetch();
        return $ketqua;
    }
    function AddUserAccount($)
}
?>