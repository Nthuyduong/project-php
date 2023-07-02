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
    function CheckUserAccountByEmail($email)
    {
        $sql = "SELECT * FROM Customers WHERE Email=?";
        $param[] = $email;
        $ketqua = $this->set_query($sql,$param);
        $this->data=null;
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetch();
        return $ketqua;
    }
    function CheckUserAccountByPhone($phone)
    {
        $sql = "SELECT * FROM Customers WHERE Phone=?";
        $param[] = $phone;
        $ketqua = $this->set_query($sql,$param);
        $this->data=null;
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetch();
        return $ketqua;
    }
    function AddUserAccount($name,$address,$phone,$email,$pass){
        $sql="INSERT INTO Customers(Address,Name,Phone,Email,Password,Active_status)
        VALUE(?,?,?,?,?,1)";
        $param[]=$address;
        $param[]=$name;
        $param[]=$phone;
        $param[]=$email;
        $param[]=$pass;
        $ketqua = $this->set_query($sql,$param);
        return $ketqua;
    }
}
?>