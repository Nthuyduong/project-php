<?php
require_once("model_database.php");
class model_library extends Database {
    public $data = null;

    function __construct() {
        parent::__construct();
        $this->data = NULL;
    }
    function createSelect($tbname, $colname){
        $sql = "SELECT $tbname.$colname FROM $tbname GROUP BY $tbname.$colname";
        $result = $this -> set_query($sql);
		if($result == true)
            $rows = $this->pdo_stm->fetchAll();
        return $rows;
        
    }
}
?>