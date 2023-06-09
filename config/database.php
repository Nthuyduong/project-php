<?php 
class Database
{
    public $conn = null;
    public $pdo_stm = null;
    public function ConnectDB()
    {
        $servername = "localhost";
        $user = "root";
        $pass = "root";
        try{
            $conn = new PDO("mysql:localhost=$servername;dbname=shop",$user, $pass);
            $conn->query("SET NAMES UTF8");
        }
        catch(PDOException $ex)
        {
            echo "<h3>" . $ex->getMessage() . "</h3>";
            die("<h3> LỖI KẾT NỐI CSDL </h3>");
        }
        return $conn;
    }
}