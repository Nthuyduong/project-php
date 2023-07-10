<?php
// show detail information
$orderid = isset($_REQUEST["orderid"]) ? $_REQUEST["orderid"] : "";

require_once("../../models/model_dashboard.php");
$order = new model_dashboard();
$ketqua = $order->getOrderDetail($orderid);
if ($ketqua == FALSE) {
    echo "ERROR";
} else {
    $rows = $order->data;
    if ($rows != NULL)
        foreach ($rows as $row) {
?>
        <div class="table-order">
            <div class="col-6">
                <div class="tb-title">ORDER ITEMS</div>
                <div class="tb-row tb-title">
                    <div class="cell">PRODUCT</div>
                    <div class="cell-sm">QUANTITY</div>
                    <div class="cell-sm">PRICE</div>
                    <div class="cell">TOTAL ($)</div>
                </div>
                <div class="tb-row tb-title">
                    <div class="cell">Amee Ring</div>
                    <div class="cell-sm">2</div>
                    <div class="cell-sm">20.000</div>
                    <div class="cell">40.000</div>
                </div>
                <div class="tb-row tb-title">
                    <div class="cell">Amee Ring</div>
                    <div class="cell-sm">2</div>
                    <div class="cell-sm">20.000</div>
                    <div class="cell">40.000</div>
                </div>

            </div>
            <div class="col-6">
                <div class="tb-title">ORDER SUMMARY</div>
                <div class="tb-row">
                    <div class="cell">ORDER ID</div>
                    <div class="cell">123</div>
                </div>
                <div class="tb-row">
                    <div class="cell">CUSTOMER'S ID</div>
                    <div class="cell">123456</div>
                </div>
                <div class="tb-row">
                    <div class="cell">ORDER DATE</div>
                    <div class="cell">12-07-2023</div>
                </div>
                <div class="tb-row">
                    <div class="cell">GRAND TOTAL ($)</div>
                    <div class="cell">60.000</div>
                </div>
                <div class="tb-row">
                    <div class="cell">PAYMENT METHOD</div>
                    <div class="cell">Master Card</div>
                </div>
                <div class="tb-row">
                    <div class="cell">ORDER'S STATUS</div>
                    <div class="cell">Processing</div>
                </div>
            </div>
        </div>

<?php
        }
}
?>