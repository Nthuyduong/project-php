<script>
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
                    alert('Product added to bag successfully!');
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
