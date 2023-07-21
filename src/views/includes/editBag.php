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
    $subTotal = $_POST['subTotal'];

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

    try {
        // Update order
        $updateOrderQuery = "UPDATE Orders SET Grand_total = ? WHERE Code = ?";
        $updateOrderParams = [$subTotal, $code];
        $updateOrderResult = $orderDB->set_query($updateOrderQuery, $updateOrderParams);

        if (!$updateOrderResult) {
            // Rollback the transaction and return an error response if clearing the cart fails
            echo json_encode(['error' => 'Failed to update the order.']);
            exit;
        }

        // Insert the updated cart items into the Order_items table
        $updateItemsQuery = "UPDATE Order_items SET Quantity = ? WHERE Order_code = ? AND Product_ID = ?";

        foreach ($cartData as $productId => $quantity) {
            $updateItemsParams = [$quantity, $code, $productId];
            $updateItemsResult = $orderDB->set_query($updateItemsQuery, $updateItemsParams);

            if (!$updateItemsResult) {
                // Rollback the transaction and return an error response if inserting an item fails
                echo json_encode(['error' => 'Failed to update the cart items.']);
                exit;
            }
        }

        // Return a success response
        echo json_encode(['success' => true]);
    } catch (Exception $e) {
        echo json_encode(['error' => 'An error occurred while updating the cart.']);
    }
} else {
    // Return an error response for invalid request method
    echo json_encode(['error' => 'Invalid request method.']);
}
?>
