<?php 

//Require one cho nhung trang co lien quan
// require_one('models/model_admin.php');


namespace App\Controllers;

use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;

class ProductController
{
    // Show the product attributes based on the id.
	public function Getallfromlist()
	{
       $sql = "SELECT * FROM tb WHERE TRUE";
       $param = ['name' => $name, 'mail' => $mail];
       $this ->set_query($sql, $param);
       return $this-load_row();
	}

    public function GetProductById()
    {
        
    }

    public function AddProduct()
    {

    }


}