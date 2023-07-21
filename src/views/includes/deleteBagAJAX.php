<!-- Add the custom alert modal -->
<div class="modal fade" id="customAlert" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <p class="mb-0"></p>
            </div>
        </div>
    </div>
</div>

<script>
    // Function to show a custom alert
    function showAlert(message) {
        // Set the message in the alert modal
        $('#customAlert .modal-body p').text(message);

        // Show the alert
        $('#customAlert').modal('show');

        // Hide the alert after 1 second
        setTimeout(function () {
            $('#customAlert').modal('hide');
        }, 1000);

        // Remove the alert from the DOM after it's hidden
        $('#customAlert').on('hidden.bs.modal', function (e) {
            $(this).remove();
        });
    }

    // Delete from bag
    function deleteFromBag(uid, pid) {
        console.log('uid:', uid);
        if (uid == 0) {
            showAlert('Please sign in/ sign up to delete product from bag!');
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
                    url: '../includes/deleteBag.php',
                    type: 'POST',
                    data: productData,
                    success: function (response) {
                        // Handle the response from the server
                        showAlert('Product deleted from bag successfully!');

                        // Reload the page after 1 second
                        location.reload();
                    },
                    error: function (xhr, status, error) {
                        // Handle any error that occurred during the Ajax request
                        showAlert('Failed to delete product from bag!');
                        console.error('Deleting product from bag: ', xhr.responseText);
                    }
                });
            }
        }
    }
</script>
