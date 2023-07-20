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
    
    // Retrieve the product ID from the POST data
    $pid = $_POST['pid'];
    
    // Retrieve the user ID from the session
    $uid = $_SESSION['user_id'];
    
    // Create an instance of the Order class
    $orderDB = new Order();
    
    // Check if the product is in the bag
    $isInBag = $orderDB->isInBag($uid, $pid);
    if ($isInBag == false) {
        echo json_encode(['error' => 'Product does not exist in the bag.']);
        exit;
    }
    $cartProductData = $orderDB->data;
    
    // Get the open order for the user
    $openOrder = $orderDB->getOpenOrder($uid);
    if ($openOrder == false) {
        echo json_encode(['error' => 'Failed to retrieve open order.']);
        exit;
    }
    $openOrderData = $orderDB->data;
    
    // Delete the product from the Order_items table
    $deleteQuery = "DELETE FROM Order_items WHERE Product_ID = ? AND Order_code = ?";
    $deleteParams = [$pid, $openOrderData['Code']];
    $deleteResult = $orderDB->set_query($deleteQuery, $deleteParams);
    
    if ($deleteResult) {
        // Update the grand total
        $newGrandTotal = $openOrderData['Grand_total'] - ($cartProductData['Price'] * $cartProductData['Quantity']);
        $updateGrandTotalQuery = "UPDATE Orders SET Grand_total = ? WHERE Code = ?";
        $updateGrandTotalParams = [$newGrandTotal, $openOrderData['Code']];
        $updateGrandTotalResult = $orderDB->set_query($updateGrandTotalQuery, $updateGrandTotalParams);
        
        if ($updateGrandTotalResult) {
            // Return a success response
            echo json_encode(['success' => true]);
        } else {
            // Return an error response
            echo json_encode(['error' => 'Failed to update the grand total.']);
        }
    } else {
        // Return an error response
        echo json_encode(['error' => 'Failed to delete the product from the order.']);
    }
} else {
    // Return an error response for invalid request method
    echo json_encode(['error' => 'Invalid request method.']);
}
?>
