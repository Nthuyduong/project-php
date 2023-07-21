<?php
// show detail information
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
require_once("../../models/model_dashboard.php");
if (isset($_REQUEST["id"])) {
    $id = intval($_REQUEST["id"]);
    $item = new model_dashboard();
    $item->getOrderItemByID($id);
    $irow = $item->data;

    $order = new model_dashboard();
    $order->getOrderSummaryByID($id);
    $orow = $order->data;
?>
    <div class="table-order row">
        <div class="col-6">
            <div class="tb-title mb-2">ORDER SUMMARY</div>
            <div class="tb-row">
                <div class="cell">ORDER ID</div>
                <div class="cell"><?php echo $orow["Code"] ?></div>
            </div>
            <div class="tb-row">
                <div class="cell">CUSTOMER'S NAME</div>
                <div class="cell"><?php echo $orow["Customer_name"] ?></div>
            </div>
            <div class="tb-row">
                <div class="cell">ORDER DATE</div>
                <div class="cell"><?php echo date('d-m-Y', strtotime($orow["Created_at"])); ?></div>
            </div>
            <div class="tb-row">
                <div class="cell">GRAND TOTAL ($)</div>
                <div class="cell"><?php echo number_format($orow["grandtotal"]) ?></div>
            </div>
            <div class="tb-row">
                <div class="cell">PAYMENT METHOD</div>
                <div class="cell"><?php echo $orow["Payment_method"] ?></div>
            </div>
            <div class="tb-row">
                <div class="cell">ORDER'S STATUS</div>
                <div class="cell">
                    <?php
                    // Define the color mapping for each status value
                    $color = array(
                        1 => "red",
                        2 => "green",
                        3 => "blue",
                        4 => "orange",
                        // Add more status-value/color pairs as needed
                    );

                    // Assume $row["Status"] contains the status value
                    if (isset($orow["Status"])) {
                        $status = $orow["Status"];
                        $statusText = "";

                        switch ($status) {
                            case 1:
                                $statusText = "Pending";
                                break;
                            case 2:
                                $statusText = "Processing";
                                break;
                            case 3:
                                $statusText = "Delivered";
                                break;
                            case 4:
                                $statusText = "Cancel";
                                break;
                            default:
                                $statusText = "Unknown Status";
                                break;
                        }

                        // Set the appropriate class based on the status value
                        $statusColor = isset($color[$status]) ? $color[$status] : "unknown";
                    } else {
                        // Default values if $row["Status"] is not set
                        $statusText = "Unknown Status";
                        $statusColor = "unknown";
                    }
                    ?>

                    <div class="stt stt3 <?= $statusColor ?>">
                        <?= $statusText ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="tb-title mb-2">ORDER ITEMS</div>
            <div class="tb-row">
                <div class="cell">PRODUCT</div>
                <div class="cell">QUANTITY</div>
                <div class="cell-sm">PRICE</div>
                <div class="cell-sm">TOTAL($)</div>
            </div>
            <?php
            if ($irow != null)
                foreach ($irow as $ir) {
            ?>
                <div class="tb-row">
                    <div class="cell"><?php echo $ir["Name"] ?></div>
                    <div class="cell"><?php echo $ir["Quantity"] ?></div>
                    <div class="cell-sm"><?php echo number_format($ir["Price"]) ?></div>
                    <div class="cell-sm"><?php echo number_format($ir["TotalPrice"]) ?></div>
                </div>
            <?php
                }
            ?>
        </div>
    </div>
<?php
}
