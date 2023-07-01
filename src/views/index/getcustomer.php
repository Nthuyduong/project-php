<?php
    require_once("../models/model_database.php");
    if(isset($_REQUEST["id"])){
        $id = intval($_REQUEST["id"]);
        $sql = "SELECT * FROM Customers WHERE ID=:id";
        $stmt = $cnn->prepare($sql);
        $stmt->execute(array(':id'=>$id));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        extract($row);
        // $param = array(':id'=>$id);
        // $ketqua = $this->set_query($sql,$param);

        // if($ketqua ==true)
        //     $row = $pdo_stm->fetch(PDO::FETCH_ASSOC);
        //     extract($row);
    ?>

        <!-- All content will goes here -->
        <div class="table-customer">
            <div class="row">
                <div class="col-6">      
                    <div class="tbl">
                        <div class="tb-title mb-3">Customer information</div>
                            <div class="tb-row">
                                <div class="cell-sm">NAME</div>
                                <div class="cell"><?php echo $Name?></div>
                            </div>
                            <div class="tb-row">
                                <div class="cell-sm">PHONE</div>
                                <div class="cell"><?php echo $Phone?></div>
                            </div>
                            <div class="tb-row">
                                <div class="cell-sm">EMAIL</div>
                                <div class="cell"><?php echo $Email?></div>
                            </div>
                            <div class="tb-row tb-row2">
                                <div class="cell-sm">ADDRESS</div>
                                <div class="cell">So 1, Nguyen Trai, Thanh Xuan, Ha Noi</div>
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
                            <div class="tb-row">
                                <div class="cell-sm">12345</div>
                                <div class="cell">12/02/23</div>
                                <div class="cell">40.000</div>
                                <div class="cell">
                                <div class="stt stt2">Processing</div>
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell-sm">15678</div>
                            <div class="cell">15/03/23</div>
                            <div class="cell">30.000</div>
                            <div class="cell">
                            <div class="stt stt2">Processing</div>
                        </div>
                    </div>
                    <div class="tb-row tb-row2">
                        <div class="cell-sm">14456</div>
                            <div class="cell">16/06/23</div>
                            <div class="cell">40.000</div>
                            <div class="cell">
                            <div class="stt stt2">Processing</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }