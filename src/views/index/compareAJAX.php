<?php
    require("../../models/model_product_ex.php");
    // Check if the 'pid' parameter is present in the request
    if (isset($_GET['pid'])) {
        // Get the product ID from the request
        $pid = $_GET['pid'];
        $products = new Product();
        $getProductById = $products -> getProductById($pid);
        if ($getProductById==false) {
            echo("<p>Fail to connect database!!</p>");
            die();
        }
        $productInfo = $products -> data;

        // debug
        // echo 'Debug: ID product - ' . $pid;
        // var_dump($productInfo);

        // Return the product information as a JSON response
        header('Content-Type: application/json');
        echo json_encode($productInfo);
    } else {
        // If the 'pid' parameter is missing, return an error message
        header('HTTP/1.1 400 Bad Request');
        echo json_encode(array('error' => 'Product ID is required'));
    }
?>