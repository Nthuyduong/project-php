<?php
 class Database
 {
    //PDO ket noi CSDL
    public $conn = null;
    //Doi tuong PDOStatement
    public $pdo_stm = null;

    public function ConnectDB()
    {
        try
        {   
            //TTMH test local db
            $this->conn = new PDO("mysql:host = localhose, dbname = T2207E_PHP_TestProject_TTMH2", "root", "root");
            //$this->conn = new PDO("mysql:host = localhose, dbname = Project2", "root", "root");
            $this->conn->query("SET NAMES UTF8");
        }
        catch(PDOException $ex)
        {
            echo "<h3>" .$ex->getMessage(). "</h3>";
            die("<h3>Loi ket noi CSDL</h3>");
        }
    }

    //Ham thuc thi dùng chung cho SELECT, INSERT, UPDATE, UPDATE
    //$sql: Cau lenh SQL can thuc thi
    //$data: mang chua du lieu
    public function set_query($sql, $data = null)
    {
        $this->pdo_stm = $this->conn->prepare($sql);
        $ketqua = false;
        if($data != null)
            $ketqua = $this->pdo_stm->execute($data);
        else
            $ketqua = $this->pdo_stm->execute();
        return $ketqua;

    }
 }