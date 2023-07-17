<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$findOrder = isset($_REQUEST["findOrder"]) ? $_REQUEST["findOrder"] : "";
$status = isset($_REQUEST["status"]) ? $_REQUEST["status"] : "";
$payment = isset($_REQUEST["payment"]) ? $_REQUEST["payment"] : "";
$startDate = isset($_REQUEST["startDate"]) ? $_REQUEST["startDate"] : "";
$endDate = isset($_REQUEST["endDate"]) ? $_REQUEST["endDate"] : "";
require_once("../../models/model_order.php");
require_once("../../models/model_dashboard.php");
$orders = new model_order();
if ($startDate != "" && $endDate == "")
    $endDate = date('Y-m-d');
if ($startDate == "" && $endDate != "")
    $endDate == "";
$ketqua = $orders->FindOrder($findOrder, $status, $payment, $startDate, $endDate);
if ($ketqua == false) {
    echo "EROOR";
} else {
    $rows = $orders->data;
    if ($rows != NULL)
        foreach ($rows as $row) {
?>
        <div class="tb-row">
            <div class="cell-sm"><?= $row["Code"] ?></div>
            <div class="cell-md"><?= date("d-m-Y", strtotime($row["Created_at"])) ?></div>
            <div class="cell-md"><?= $row["Customer_name"] ?></div>
            <div class="cell"><?= $row["Payment_method"] ?></div>
            <div class="cell"><?= $row["grandtotal"] ?></div>
            <div class="cell stt-out">
                <div class="stt stt1"><?= $row["Status"] ?></div>
            </div>
            <div class="cell">
                <select class="w-100">
                    <option>Status</option>
                    <?php
                    $pm = new model_order();
                    $pm->dropdownName("Orders", "Status");
                    ?>
                </select>
            </div>
            <div class="cell action-icon">
                <i class="fas fa-print me-3" style="color: #ffffff;"></i>
                <a href="#" id="getorder" data-bs-toggle="modal" data-id="<?php echo $row["Code"]; ?>" data-bs-target="#order-detail"><i class="fas fa-search-plus" style="color: #ffffff;"></i></a>
            </div>
        </div>
        <!-- ORDER INFORMATION -->
        <div class="modal fade" id="order-detail" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="db-title" id="exampleModalLabel">Order Information</div>
                        <div type="button" class="" data-bs-dismiss="modal" aria-label="Close">
                            X
                        </div>
                    </div>
                    <div class="modal-body mb-3">
                        <!-- <div id="modal-loader">
                            <img src="../../../public/images/ajax-loader.gif"/>
                        </div> -->
                        <!-- Content will be load here -->
                        <div id="dynamic-order">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- View order detail -->
    <script>
        $(document).ready(function() {

            $(document).on('click', '#getorder', function(e) {

                e.preventDefault();
                // Get order ID after click
                var uid = $(this).data('id');
                // leave modal blank before ajax call
                $('#dynamic-order').html('');
                //load ajax loader
                $('#modal-loader').show();

                $.ajax({
                        url: 'orderdetailAJAX.php',
                        type: 'POST',
                        data: {
                            id: uid
                        },
                        dataType: 'html',
                    })
                    .done(function(data) {
                        console.log(data);
                        $('#dynamic-order').html('');
                        // load response
                        $('#dynamic-order').html(data);
                        // hide ajax loader
                        $('#modal-loader').hide();
                    })
                    .fail(function() {
                        $('#dynamic-order').html('<p>Something went wrong, please try again!</p>');
                        // $('#modal-loader').hide();
                    });
            });
        });
    </script>
<?php
        }
}
?>