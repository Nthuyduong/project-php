<?php 
class Database
{
    public $conn = null;
    public $pdo_stm = null;
    function ClsDatabase()
    {
        try{
            $this->conn = new PDO("mysql:localhost=localhost;dbname=shop","root", "root");
            $this->conn->exec("SET NAMES UTF8");
        }
        catch(PDOException $ex)
        {
            echo "<h3>" . $ex->getMessage() . "</h3>";
            die("<h3> LỖI KẾT NỐI CSDL </h3>");
        }
    }

    function ThucthiSQL($sql, $data=NULL)
	{
		$this->pdo_stm = $this->conn->prepare($sql);
		$ketqua=false;
		if($data!=NULL)
			$ketqua = $this->pdo_stm->execute($data);
		else
			$ketqua = $this->pdo_stm->execute();
		return $ketqua;
	}
}