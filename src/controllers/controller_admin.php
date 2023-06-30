<?php 
//require_one('models/model_admin.php');

namespace App\Controllers;

class Controller_admin
{
    // Show the product attributes based on the id.
	public function Getallfromlist()
	{
       $sql = "SELECT * FROM tb WHERE TRUE";
       $param = ['name' => $name, 'mail' => $mail];
       $this ->set_query($sql, $param);
       return $this-load_row();
	}


}