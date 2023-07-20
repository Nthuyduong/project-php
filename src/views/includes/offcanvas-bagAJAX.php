<div class="offcanvas offcanvas-end" id="addToBag">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title mt-3">Shopping Bag</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" id="offcanvasBag">
        <!-- offcanvas bag info here -->
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // add to bag
    function addToBag(pid) {
        $.ajax({
            url: '../includes/offcanvas-bagAJAX.php',
            type: 'GET',
            data: { 
                pid: pid 
            },
            success: function(response) {
                console.log('addToBagInfo:', response); // Log the value of addToBagInfo received from the server
                var offcanvasBag = document.getElementById('offcanvasBag');
                offcanvasBag.innerHTML = `
                    <div class="row product-add1 mb-3">
                        <div class="col-4 ps-0">
                        <a href="product-detail.php?pid=${response.Product_ID}">
                            <img src="../../../public/images/thumb/${response.Thumb}">
                        </a>
                        </div>
                        <div class="col-8">
                        <div class="d-flex prd-title">
                            <p class="prd-name">${response.Name}</p>
                            <i class="fa-solid fa-xmark mb-auto"></i>
                        </div>
                        <div class="pe-0 prd-prc">
                            <p>$${response.Price.replace(/\B(?=(\d{3})+(?!\d))/g, ".")}</p>
                        </div>
                        </div>
                    </div>
                    <div class="line mb-3"></div>

                    <div class="d-flex mb-3">
                        <p class="mdt me-auto">Total</p>
                        <p class="mdt">$${response.Grand_total.replace(/\B(?=(\d{3})+(?!\d))/g, ".")}</p>
                    </div>

                    <div class="row offcanvas-btn">
                        <div class="col-6 offcanvas-checkbox">
                        <button class="btn btn-sec btnlg mt-3 w-100" type="button" hrefk="check-out.php">Checkout</button>
                        </div>
                        <div class="col-6 offcanvas-cart">
                        <button class="btn btn-pri btnlg mt-3 w-100" type="button" href="cart.php">View Cart</button>
                        </div>
                    </div>
                `;
            },
            error: function(xhr, status, error) {
                console.error(xhr); // Log any errors
                console.error(xhr.responseText); // Log any errors
            }
        });
        // Return true or perform any other desired operations
        return true;
    }
</script>