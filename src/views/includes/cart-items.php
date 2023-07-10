<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart items</title>
</head>
<body>
    <?php
        $cart = array("1"=>1, "2"=>2);
        foreach ($cart as $key => $value) {
            echo "<p>Product ID: $key, Quantity: $value</p>";
        }
        // check if a product is in cart or not
        $pid = "3";
        if (array_key_exists($pid, $cart)) {
            echo "<p>Product ID $pid is already in cart</p>";
        } else {
            echo "<p>Product ID $pid is not in cart</p>";
        }
    ?>
</body>
</html>