<?php
require_once("model_database.php");
class model_login extends Database
{
    public $data = NULL; //để chứa mảng kết quả của SELECT 
    //Tao mang doi tuong
    function __construct()
    {
        parent::__construct();//gọi hàm tạo của clsDatabase để kết nối CSDL
    }

    public function CheckLogin($user, $pass)
    {
        //Select username va password tu bang Admin trong Project2
        $sql = "SELECT * FROM Admins WHERE Email=? AND Password =? ";
        $param []= $user;
        $param []= $pass;
        $ketqua = $this->set_query($sql,$param);
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetch();
        return $ketqua;
    }
}
?>