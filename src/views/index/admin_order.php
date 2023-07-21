<?php define('URLROOT', 'http://localhost:8888/project-php'); ?>
<?php
session_start();
require_once("../../models/model_order.php");
require("../../core/checklogin.php");
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c813cf59a3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/fonts.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/admin-style.css">
</head>

<body>
    <?php require_once '../includes/sidebar.php'; ?>

    <div id="main">
        <!-- THIS IS HEADER -->
        <?php require '../includes/ad-header.php' ?>
        <!-- THIS IS ALL CONTENT -->
        <div>
            <!-- Order here -->
            <div class="db-title mt-4">ORDERS</div>
            <p>Have a nice day!</p>
            <div>
                <div class="row mb-4">
                    <div class="col-3">
                        <div className="search-bar d-flex">
                            <!-- <form action="" method="get"> -->
                            <input name="findOrder" id="findOrder" class="search-input w-100" type="text" placeholder="Enter Order ID..." />
                            <FontAwesomeIcon class="icon-search" icon={faSearch} />
                            <!-- </form> -->
                        </div>
                    </div>
                    <div class="col-3">
                        <select class="sl-box" name="status" id="status">
                            <option value="" selected>choose status</option>
                            <?php
                            $pm = new model_order();
                            $pm->dropdownName("Orders", "Status");
                            ?>
                        </select>
                    </div>
                    <div class="col-3">
                        <input type="datetime-local" id="startDate" name="startDate" placeholder="Start order (dd/mm/yyyy)">
                    </div>
                    <div class="col-3">
                        <input type="datetime-local" id="endDate" name="endDate" placeholder="End order (dd/mm/yyyy)">
                    </div>
                </div>
                <!-- them chuc nang chon theo phuong thuc thanh toan -->
                <div class="row">
                    <div class="col-3">
                        <select class="sl-box" name="payment" id="payment">
                            <option value="" selected>Payment method</option>
                            <?php
                            $pm = new model_order();
                            $pm->dropdownName("Payments", "Payment_method");
                            ?>
                        </select>
                    </div>
                    <div class="col-3">
                        <button id="clickbind" onclick="confirmPrint()" class="btn-lg-pr-admin w-100">Download all order</button>
                    </div>
                    <div class="col-3"></div>
                    <div class="col-3"></div>
                </div>
                <div class="tbl">
                    <div class="tb-row title-row">
                        <div class="cell-sm alg-center">
                            ID
                        </div>
                        <div class="cell-md">
                            ORDER DATE
                        </div>
                        <div class="cell-md">
                            CUSTOMER'S NAME
                        </div>
                        <div class="cell alg-center">
                            METHOD
                        </div>
                        <div class="cell alg-center">
                            GRAND TOTAL ($)
                        </div>
                        <div class="cell stt-out">
                            STATUS
                        </div>
                        <!-- <div class="cell">
                            ACTION
                        </div> -->
                        <div class="cell stt-out"></div>
                    </div>

                    <!-- All Order will show here -->
                    <div id="ordershow">

                    </div>
                </div>
                <!-- <div class="d-flex pgn">
                    <div class="me-auto">Showing 8 of 100</div>
                    <div class="pagination">
                        <a href="#">&laquo;</a>
                        <a class="active" href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">&raquo;</a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>
        function sortOrder() {
            let od = $('#findOrder').val();
            let pay = $('#payment').val();
            let st = $('#status').val();
            let start = $('#startDate').val();
            let end = $('#endDate').val();

            $.ajax({
                    url: 'orderAJAX.php',
                    type: 'POST',
                    data: {
                        findOrder: od,
                        payment: pay,
                        status: st,
                        startDate: start,
                        endDate: end
                    },
                    dataType: 'html',
                })
                .done(function(data) {
                    // console.log(data);
                    $("#ordershow").html('');
                    $('#ordershow').html(data);

                })
                .fail(function() {
                    $('#ordershow'), html('<p>Something went wrong, please try again!</p>');
                });
        }
        $(document).ready(function() {
            $("#findOrder").on("change", sortOrder);
            $("#findOrder").ready(sortOrder);
            $("#payment").on("change", sortOrder);
            $("#status").on("change", sortOrder);
            $("#startDate").on("change", sortOrder);
            $("#endDate").on("change", sortOrder);

            // $("#findOrder").change(ordershow)
        })
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>

    <script>
        function onClick() {
            var pdf = new jsPDF('p', 'pt', 'letter');
            pdf.canvas.height = 72 * 11;
            pdf.canvas.width = 72 * 8.5;

            pdf.fromHTML(document.body);

            pdf.save('test.pdf');
        }

        function confirmPrint() {
            var confirmation = confirm("Are you sure you want to download all orders?");
            if (confirmation) {
                onClick(); // Call the print function if the user confirms
            }
        }

        var element = document.getElementById("clickbind");
        element.addEventListener("click", confirmPrint);
    </script>
</body>

</html>