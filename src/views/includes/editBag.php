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
    
    // Retrieve the user ID and order code from the POST data
    $uid = $_POST['uid'];
    $code = $_POST['code'];
    
    // Retrieve the updated cart data from the POST data
    $cartData = $_POST['cartData'];
    
    // Create an instance of the Order class
    $orderDB = new Order();
    
    // Get the open order for the user
    $openOrder = $orderDB->getOpenOrder($uid);
    if ($openOrder == false) {
        echo json_encode(['error' => 'Failed to retrieve open order.']);
        exit;
    }
    $openOrderData = $orderDB->data;
    
    // Start a transaction to update the cart
    $orderDB->startTransaction();
    
    try {
        // Clear the existing cart items for the order
        $clearCartQuery = "DELETE FROM Order_items WHERE Order_code = ?";
        $clearCartParams = [$code];
        $clearCartResult = $orderDB->set_query($clearCartQuery, $clearCartParams);
        
        if (!$clearCartResult) {
            // Rollback the transaction and return an error response if clearing the cart fails
            $orderDB->rollbackTransaction();
            echo json_encode(['error' => 'Failed to clear the cart.']);
            exit;
        }
        
        // Insert the updated cart items into the Order_items table
        $insertItemQuery = "INSERT INTO Order_items (Order_code, Product_ID, Quantity, Price, Size) VALUES (?, ?, ?, ?, ?)";
        
        foreach ($cartData as $product) {
            $productId = $product['id'];
            $quantity = $product['quantity'];
            $price = $product['price'];
            $size = $product['size'];
            
            $insertItemParams = [$code, $productId, $quantity, $price, $size];
            $insertItemResult = $orderDB->set_query($insertItemQuery, $insertItemParams);
            
            if (!$insertItemResult) {
                // Rollback the transaction and return an error response if inserting an item fails
                $orderDB->rollbackTransaction();
                echo json_encode(['error' => 'Failed to update the cart items.']);
                exit;
            }
        }
        
        // Commit the transaction if all updates were successful
        $orderDB->commitTransaction();
        
        // Return a success response
        echo json_encode(['success' => true]);
    } catch (Exception $e) {
        // Rollback the transaction and return an error response if an exception occurs
        $orderDB->rollbackTransaction();
        echo json_encode(['error' => 'An error occurred while updating the cart.']);
    }
} else {
    // Return an error response for invalid request method
    echo json_encode(['error' => 'Invalid request method.']);
}
?>
