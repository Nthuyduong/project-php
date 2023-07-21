<script>
    function editBag(uid, code) {
        // Retrieve the quantities of the products
        var quantities = {};
        $('.update-cart-qty').each(function() {
            var productId = $(this).data('product-id');
            var quantity = parseInt($(this).val());
            quantities[productId] = quantity;
        });

        // Create an object to store the updated bag data
        var bagData = {
            uid: uid,
            code: code,
            quantities: quantities
        };

        // Send AJAX request to editBag.php
        $.ajax({
            url: '../includes/editBag.php',
            type: 'POST',
            data: bagData,
            success: function(response) {
                // Handle the response from the server
                // Perform any other desired actions
                console.log('Bag update response: ', response);
                // Reload the page or navigate to the checkout page
                window.location.href = 'check-out.php'; // Example: Navigating to the checkout page
            },
            error: function(xhr, status, error) {
                // Handle any error that occurred during the AJAX request
                console.log('quantities',quantities);
                alert('Failed to update bag!');
                console.error('Bag update error: ', xhr.responseText);
            }
        });
    }
</script>
