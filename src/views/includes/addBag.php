<?php
require_once '../../models/model_database.php';
require_once '../../models/model_order_ex.php';

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the user is authenticated and the user ID is available in the session
    session_start();
    if (!isset($_SESSION['user_id'])) {
        // Return an error response for unauthenticated users
        echo json_encode(['error' => 'User is not authenticated.']);
        exit;
    }
    
    // Retrieve the product ID, quantity, size, and product name from the POST data
    $pid = $_POST['pid'];
    $productName = $_POST['name'];
    $quantity = $_POST['quantity'];
    $size = $_POST['size'];
    $price = $_POST['price'];
    
    // Retrieve the user ID from the session
    $uid = $_SESSION['user_id'];
    
    // Create an instance of the Order class
    $orderDB = new Order();
    
    // Check if the product is already in the bag
    $isInBag = $orderDB->isInBag($uid, $pid); // $size
    if ($isInBag == false) {
        echo ("<p>Fail to connect database!!</p>");
        die();
    }
    
    $isExist = $orderDB->data;
    
    // Get the open order for the user
    $openOrder = $orderDB->getOpenOrder($uid);
    if ($openOrder == false) {
        echo ("<p>Fail to connect database!!</p>");
        die();
    }
    
    $openOrderData = $orderDB->data;

    echo json_encode(['isExist' => $isExist, 'openOrderData' => $openOrderData]);
    
    if ($openOrderData) {
        if ($isExist) {
            // Product is already in the bag, update the quantity
            $existingQuantity = $isExist['Quantity'];
            $newQuantity = $existingQuantity + $quantity;
        
            // Update the quantity in the Order_items table
            $updateQuery = "UPDATE Order_items SET Quantity = ? WHERE Product_ID = ? AND Order_code = ?";
            $updateParams = [$newQuantity, $pid, $openOrderData['Code']];
            $updateResult = $orderDB->set_query($updateQuery, $updateParams);
        
            // Check if the update was successful
            if ($updateResult) {
                // Return a success response
                echo json_encode(['success' => true]);
            } else {
                // Return an error response
                // echo json_encode(['error' => 'Failed to update the quantity in the bag.'], $isExist, $openOrderData);
                // Return an error response
                echo json_encode(['error' => 'Failed to update the quantity in the bag.']);
                echo json_encode(['isExist' => $isExist, 'openOrderData' => $openOrderData]);
                echo json_encode(['pid' => $pid, 'code' => $openOrderData['Code'], 'quantity' => $newQuantity]);
            }
        } else {
            // Product is not in the bag, insert a new record into the Order_items table
            $insertQuery = "INSERT INTO Order_items (Order_code, Product_ID, Quantity, Price, Size) VALUES (?, ?, ?, ?, ?)";
            $insertParams = [$openOrderData['Code'], $pid, $quantity, $price, $size];
            $insertResult = $orderDB->set_query($insertQuery, $insertParams);
        
            // Check if the insert was successful
            if ($insertResult) {
                // Return a success response
                echo json_encode(['success' => true, 'insertParams' => $insertParams]);
            } else {
                // Return an error response
                echo json_encode(['error' => 'Failed to insert the product into the order.', 'insertParams' => $insertParams]);
            }
        }
        // update grand total
        $newGrandTotal = $openOrderData['Grand_total'] + $price * $quantity;
        $updateGrandTotalQuery = "UPDATE Orders SET Grand_total = ? WHERE Code = ?";
        $updateGrandTotalParams = [$newGrandTotal, $openOrderData['Code']];
        $updateGrandTotalResult = $orderDB->set_query($updateGrandTotalQuery, $updateGrandTotalParams);
        if ($updateGrandTotalResult) {
            // Return a success response
            echo json_encode(['success' => true]);
            echo json_encode(['updateGrandTotalParams' => $updateGrandTotalParams]);
            echo json_encode(['oldGrandTotal' => $openOrderData['Grand_total'], 'price' => $price, 'quantity' => $quantity]);
        } else {
            // Return an error response
            echo json_encode(['error' => 'Failed to insert the product into the order.']);
            echo json_encode(['updateGrandTotalParams' => $updateGrandTotalParams]);
            echo json_encode(['oldGrandTotal' => $openOrderData['Grand_total'], 'price' => $price, 'quantity' => $quantity]);
        }
    } else {
        // Product is not in the bag, create a new order and insert a new record into the Order_items table
        $insertOrderQuery = "INSERT INTO Orders (Customer_ID, Grand_total, Status) VALUES (?, ?, ?)";
        $insertOrderParams = [$uid, $price*$quantity, 0];
        $insertOrderResult = $orderDB->set_query($insertOrderQuery, $insertOrderParams);
        
        // Get the newly inserted order code
        $newOrderCode = $orderDB->conn->lastInsertId();
        
        // Insert a new record into the Order_items table
        $insertOrderItemQuery = "INSERT INTO Order_items (Order_code, Product_ID, Quantity, Price, Size) VALUES (?, ?, ?, ?, ?)";
        $insertOrderItemParams = [$newOrderCode, $pid, $quantity, $price, $size];
        $insertOrderItemResult = $orderDB->set_query($insertOrderItemQuery, $insertOrderItemParams);
    
        // Check if the insert was successful
        if ($insertOrderResult && $insertOrderItemResult) {
            // Return a success response
            echo json_encode(['success' => true]);
            echo json_encode(['insertOrderResult' => $insertOrderResult, 'insertOrderItemResult' => $insertOrderItemResult]);
            echo json_encode(['insertOrderParams' => $insertOrderParams, 'insertOrderItemParams' => $insertOrderItemParams]);
        } else {
            // Return an error response
            echo json_encode(['error' => 'Failed to insert the product into the order.']);
            echo json_encode(['insertOrderResult' => $insertOrderResult, 'insertOrderItemResult' => $insertOrderItemResult]);
            echo json_encode(['insertOrderParams' => $insertOrderParams, 'insertOrderItemParams' => $insertOrderItemParams]);
        }
    }
} else {
    // Return an error response for invalid request method
    echo json_encode(['error' => 'Invalid request method.']);
}
?>