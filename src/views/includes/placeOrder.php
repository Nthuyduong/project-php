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
    
    // Create an instance of the Order class
    $orderDB = new Order();
    
    // Get the open order for the user
    $openOrder = $orderDB->getOpenOrder($uid);
    if ($openOrder == false) {
        echo json_encode(['error' => 'Failed to retrieve open order.']);
        exit;
    }
    $openOrderData = $orderDB->data;
    
    // Update the open order status to indicate that it has been checked out
    $updateStatusQuery = "UPDATE Orders SET Status = 1 WHERE Code = ?";
    $updateStatusParams = [$code];
    $updateStatusResult = $orderDB->set_query($updateStatusQuery, $updateStatusParams);
    
    if ($updateStatusResult) {
        // Return a success response
        echo json_encode(['success' => true]);
    } else {
        // Return an error response
        echo json_encode(['error' => 'Failed to place the order status.']);
    }
} else {
    // Return an error response for invalid request method
    echo json_encode(['error' => 'Invalid request method.']);
}
?>
