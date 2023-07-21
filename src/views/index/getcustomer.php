<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
require_once("../../models/model_customer.php");
if (isset($_REQUEST["id"])) {
    $id = intval($_REQUEST["id"]);
    $customer = new model_customer();
    $customer->GetCustomerByID($id);
    $cs = $customer->data;

    $order = new model_customer();
    $order->GetOrderOfCustomer($id);
    $rows = $order->data;
?>
    <!-- All content will goes here -->
    <div class="table-customer">
        <div class="row">
            <div class="col-6">
                <!-- <div class="tbl"> -->
                <div class="tb-title mb-3">Customer information</div>
                <div class="tb-row">
                    <div class="cell-sm">NAME</div>
                    <div class="cell">
                        <?php echo $cs["Name"] ?>
                    </div>
                </div>
                <div class="tb-row">
                    <div class="cell-sm">PHONE</div>
                    <div class="cell">
                        <?php echo $cs["Phone"] ?>
                    </div>
                </div>
                <div class="tb-row">
                    <div class="cell-sm">EMAIL</div>
                    <div class="cell">
                        <?php echo $cs["Email"] ?>
                    </div>
                </div>
                <div class="tb-row tb-row2">
                    <div class="cell-sm">ADDRESS</div>
                    <div class="cell">
                        <?php echo $cs["Address"] ?>
                    </div>
                </div>
            </div>
            <!-- </div> -->
            <div class="col-6">
                <!-- <div class="tbl"> -->
                <div class="tb-title mb-3">Order History</div>
                <div class="tb-row">
                    <div class="cell-sm">ID</div>
                    <div class="cell">DATE</div>
                    <div class="cell">TOTAL($)</div>
                    <div class="cell">STATUS</div>
                </div>
                <?php
                if ($rows != null)
                    foreach ($rows as $row) {
                ?>
                    <div class="tb-row">
                        <div class="cell-sm">
                            <?php echo $row["Code"] ?>
                        </div>
                        <div class="cell">
                            <?php echo date('d-m-Y', strtotime($row["Created_at"])); ?>
                        </div>
                        <div class="cell">
                            <?php echo number_format($row["Grand_total"])?>
                        </div>
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
                            if (isset($row["Status"])) {
                                $status = $row["Status"];
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
                <?php
                    }
                ?>
            </div>
            <!-- </div> -->
        </div>
    </div>
    </div>
<?php
}
