<script>
    // Delete from bag
    function deleteFromBag(uid, pid) {
        console.log('uid:', uid);
        if (uid == 0) {
            alert('Please sign in/ sign up to delete product from bag!');
            return;
        } else {
            // Display a confirmation dialog
            var confirmDelete = confirm('Are you sure you want to remove this product?');
            
            // Check if the user clicked "OK" in the confirmation dialog
            if (confirmDelete) {
                // Create an object to store the product data
                var productData = {
                    uid: uid,
                    pid: pid
                };

                // Send Ajax request to deleteBag.php
                $.ajax({
                    url: '../includes/deleteBag.php', // Replace with the actual URL to deleteBag.php
                    type: 'POST',
                    data: productData,
                    success: function(response) {
                        // Handle the response from the server
                        alert('Product deleted from bag successfully!');
                        // Reload the page
                        location.reload();
                    },
                    error: function(xhr, status, error) {
                        // Handle any error that occurred during the Ajax request
                        alert('Failed to delete product from bag!');
                        console.error('Deleting product from bag: ', xhr.responseText);
                    }
                });
            }
        }
    }
</script>
