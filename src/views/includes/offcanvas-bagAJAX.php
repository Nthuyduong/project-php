<?php
    require("../../models/model_order_ex.php");
    // Check if the 'uid' parameter is present in the request
    if (isset($_SESSION["user_id"])) {
        // Get the product ID from the request
        $uid = $_SESSION["user_id"];
        $OrderDB = new Order();
        $getCartProducts = $OrderDB -> getCartProducts($uid);
        if ($getCartProducts==false) {
            echo("<p>Fail to connect database!!</p>");
            die();
        }
        $cartProducts = $OrderDB -> data;

        // debug
        // echo 'Debug: ID product - ' . $pid;
        // var_dump($productInfo);

        // Return the product information as a JSON response
        header('Content-Type: application/json');
        echo json_encode($cartProducts);
    } else {
        // If the 'pid' parameter is missing, return an error message
        header('HTTP/1.1 400 Bad Request');
        echo json_encode(array('error' => 'Product ID is required'));
    }
?>