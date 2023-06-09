<?php
 class Database
 {
    private $db = null;
    private $sql = '';
    private $stmt = null;

    public function ConnectDB()
    {
        $conn =null;
        try
        {
            //Chua co bang du lieu, can sua lai TK va MK
            $conn = new PDO("mysql:host = localhose, dbname = ", "root", "root");
            $conn->query("SET NAMES UTF8");
        }
        catch(PDOException $ex)
        {
            echo "<p>" .$ex->getMessage(). "</p>";
            die();
        }
        return $conn;
    }

    public function set_query($sql = '', array $param == null)
    {
        $this->sql;
        $this->param = $param;

    }
 }