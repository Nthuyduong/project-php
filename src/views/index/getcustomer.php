<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require_once("../../models/model_database.php");
    require_once("../../models/model_customer.php");
    if(isset($_REQUEST["id"])){
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
                    <div class="tbl">
                        <div class="tb-title mb-3">Customer information</div>
                            <div class="tb-row">
                                <div class="cell-sm">NAME</div>
                                <div class="cell"><?php echo $cs["Name"]?></div>
                            </div>
                            <div class="tb-row">
                                <div class="cell-sm">PHONE</div>
                                <div class="cell"><?php echo $cs["Phone"]?></div>
                            </div>
                            <div class="tb-row">
                                <div class="cell-sm">EMAIL</div>
                                <div class="cell"><?php echo $cs["Email"]?></div>
                            </div>
                            <div class="tb-row tb-row2">
                                <div class="cell-sm">ADDRESS</div>
                                <div class="cell"><?php echo $cs["Address"]?></div>
                            </div>
                        </div>
                    </div>
                <div class="col-6">
                    <div class="tbl">
                        <div class="tb-title mb-3">Order History</div>
                            <div class="tb-row">
                                <div class="cell-sm">ID</div>
                                <div class="cell">DATE</div>
                                <div class="cell">TOTAL($)</div>
                                <div class="cell">STATUS</div>
                            </div>
                            <?php
                            if($rows != null)
                                foreach($rows as $row)
                            {
                            ?>
                            <div class="tb-row">
                                <div class="cell-sm"><?php echo $rows["Code"]?></div>
                                <div class="cell"><?php echo $rows["Created_at"]?></div>
                                <div class="cell"><?php echo $rows["Grand_total"]?></div>
                                <div class="cell">
                                <div class="stt stt2"><?php echo $rows["Status"]?></div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }