
<!--Modal Quick view-->
<div class="modal fade" id="quickview">
    <div class="modal-dialog modal-dialog-centered quickview">
        <div class="modal-content" id="quickviewProduct">
                <!-- quickview product info here -->
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // quick view
    function quickview(pid) {
        // Make an AJAX request to fetch the similarInfo using pid
        $.ajax({
            url: '../includes/quickviewAJAX.php',
            type: 'GET',
            data: { pid: pid },
            success: function(response) {
                console.log('quickviewInfo:', response); // Log the value of quickviewInfo received from the server
                // Update the quickviewProduct element with the received data
                var quickview = document.getElementById('quickviewProduct');
                quickview.innerHTML = `
                    <div class="row">
                        <div class="col-7 ps-0">
                            <!--Carousel quick view product-->
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="1500">
                                        <img src="../../../public/images/thumb/${response.thumb}">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="1500">
                                        <img src="../../../public/images/${response.urls.split(',')[0]}">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="1500">
                                        <img src="../../../public/images/${response.urls.split(',')[1]}">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="1500">
                                        <img src="../../../public/images/${response.urls.split(',')[2]}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-5 pe-0">
                            <h5>${response.pname}</h5>
                            <h5 class="my-3">$${response.price.replace(/\B(?=(\d{3})+(?!\d))/g, ".")}</h5>
                            <div class="d-flex">
                                <p class="mdt me-auto">Quantity</p>
                                <div class="quantity">
                                    <input type='number' name='quantity' value='1' class='qty' />
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="quick-size my-3">
                                <select class="form-select smt">
                                    <option selected>Select size</option>
                                    <option value="1">3</option>
                                    <option value="2">3 1/2</option>
                                    <option value="3">4</option>
                                    <option value="3">4 1/2</option>
                                    <option value="3">5</option>
                                    <option value="3">5 1/2</option>
                                </select>
                            </div>
                            <button type="button" class="btn btn-pri mb-3 w-100" data-bs-dismiss="modal">Add to bag</button>
                            <a href="product-detail.php?pid=${response.pid}">
                                <p>View more detail</p>
                            </a>
                        </div>
                    </div>
                `;
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText); // Log any errors
            }
        });

        // Return true or perform any other desired operations
        return true;
    }
</script>