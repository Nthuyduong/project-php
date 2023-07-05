<?php
class Database {
    public $conn;
    public $pdo_stm;

    function __construct() {
        $this->conn = null;
        $this->pdo_stm = null;
        $servername = "localhost";
        $dbname = "aguri-project-db-v2";
        $user = "root";
        $password = "root";
        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $password);
            $this->conn -> query("SET NAMES UTF8");
        } catch (PDOException $e) {
            echo "<p>" . $e->getMessage() . "</p>";
            echo "<pre>" . $e->getTraceAsString() . "</pre>";
            die ("<p>Fail to connect database</p>");    
        }
    }

    function set_query ($sql, $params=null) {
        $result = false;
        if ($this->conn == null) {
            return false;
        }
        $this->pdo_stm = $this->conn -> prepare($sql);
        if ($params==null) {
            $result = $this->pdo_stm -> execute(); 
        } else {
            $result = $this->pdo_stm -> execute($params);
        }
        return $result;
    }
}
