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
    function UpdateUserAccount($name,$phone,$address,$email){
        $sql="UPDATE Customers
                SET Name=?,Phone=?,Address=?
                WHERE Email=?";
        $param=[$name,$phone,$address,$email];
        $ketqua = $this->set_query($sql,$param);
        return $ketqua;
    }
    function UpdatePassUser($pass,$email){
        $sql="UPDATE Customers
                SET Password=?
                WHERE Email=?";
        $param=[$pass,$email];
        $ketqua = $this->set_query($sql,$param);
        return $ketqua;
    }
    //ttmh function check sendmail
    
    function CheckEmailUser($id,$code=NULL){
        $sql="SELECT * FROM CheckMailUser WHERE CustomerID =$id ";
        
        if($code !=NULL){
            $sql .=" AND Code = $code";
        }
        $ketqua = $this->set_query($sql);
        $this->data=null;
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetch();
        return $ketqua;
    }
    function AddCodeCheckMail($id,$code){
        $sql="INSERT INTO CheckMailUser(CustomerID,Code) VALUE (?,?)";
        $param=[$id,$code];
        $ketqua = $this->set_query($sql,$param);
        return $ketqua;
    }
    function UpdateCodeCheckMail($id,$code){
        $sql="UPDATE CheckMailUser
            SET Code=?, Created_at= CURRENT_TIMESTAMP
            WHERE CustomerID=?";
        $param=[$code,$id];
        $ketqua = $this->set_query($sql,$param);
        return $ketqua;
    }
    function CheckVerificationCode($id,$code){
        $sql="SELECT * FROM CheckMailUser WHERE CustomerID=? AND Code =?";
        $param=[$id,$code];
        $ketqua = $this->set_query($sql,$param);
        $this->data=null;
        if($ketqua == true)
            $this->data = $this->pdo_stm->fetch();
        return $ketqua;
    }
    // end - check sendmail
}
?>