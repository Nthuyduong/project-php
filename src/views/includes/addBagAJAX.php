<script>
    // Function to show a custom alert
    function showAlert(message) {
        var alertTemplate = `
        <div class="modal fade" id="customAlert" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                <p class="mb-0">${message}</p>
                </div>
            </div>
            </div>
        </div>
        `;

        // Add the alert template to the body
        $('body').append(alertTemplate);

        // Show the alert
        $('#customAlert').modal('show');

        // Hide the alert after 1 second
        setTimeout(function() {
        $('#customAlert').modal('hide');
        }, 1000);

        // Remove the alert from the DOM after it's hidden
        $('#customAlert').on('hidden.bs.modal', function(e) {
        $(this).remove();
        });
    }

    // add to bag
    function addToBag(uid, pid) {
        console.log('uid:', uid);
        if (uid == 0) {
            alert('Please sign in/ sign up to add product to bag!');
            return;
        } else {
            var productName = $('.product-name').text();
            var quantity = $('.qty').val();
            var size = $('.size').val();
            var price = $('.price').text().replace('$', '').replace(',', '');
            // Create an object to store the product data
            var productData = {
                uid: uid,
                pid: pid,
                name: productName,
                quantity: quantity,
                size: size,
                price: price
            };

            // Send Ajax request to addBag.php
            $.ajax({
                url: '../includes/addBag.php', // Replace with the actual URL to addBag.php
                type: 'POST',
                data: productData,
                success: function(response) {
                    // Handle the response from the server
                    showAlert('Product added to bag successfully!');
                    // Display a success message or perform any other desired actions
                    console.log('Adding product to bag: ', response);
                },
                error: function(xhr, status, error) {
                    // Handle any error that occurred during the Ajax request
                    alert('Failed to add product to bag!');
                    console.error('Adding product to bag: ', xhr.responseText);
                } 
            });
        }
    }
</script>
