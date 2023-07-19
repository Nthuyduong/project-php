<?php define('URLROOT', 'http://localhost:8888/project-php'); ?>
<?php
session_start();
require_once("../../models/model_customer.php");
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
            <div class="db-title">CUSTOMER</div>
            <p>Have a nice day!</p>
            <div>
                <div class="row">
                    <div class="col-3">

                    </div>
                    <div class="col-6">
                        <div className="search-bar d-flex">
                          
                            <form action="" method="GET">
                                <input name="findcustomer" id="findcustomer" class="search-input w-100" type="text" placeholder="<?php echo isset($_GET['findcustomer']) ? $_GET['findcustomer'] : 'Enter customer name...'; ?>" value="<?= $keyword ?>" />
                                <FontAwesomeIcon class="icon-search" icon={faSearch} />
                            </form>
                        </div>
                    </div>
                    <div class="col-3">

                    </div>
                </div>
                <?php
                $customer = new model_customer();
                $cid = isset($_REQUEST["cid"]) ? $_REQUEST["cid"] : "";
                if ($cid != null && is_numeric($cid) == false)
                    $cid = "";
                $customer->DeleteCustomer($cid);
                $keyword = isset($_REQUEST["findcustomer"]) ? $_REQUEST["findcustomer"] : "";
                if ($keyword != null && is_numeric($keyword) == true)
                    $keyword = "";
                $ketqua = $customer->FindCustomer($keyword);
                if ($ketqua == FALSE) {
                    $alert_title = "SQL ERROR!";
                    $alert = "Please check database again";
                    require_once("../../views/includes/alert.php");
                    die();
                }
                $rows = $customer->data;

                $ketqua = $customer->DeleteCustomer($cid);

                ?>
                <div class="table-customer">
                    <div class="tbl">
                        <div class="tb-row title-row">
                            <div class="cell-sm alg-center">
                                ID
                            </div>
                            <div class="cell">
                                NAME
                            </div>
                            <div class="cell">
                                EMAIL
                            </div>
                            <div class="cell-sm alg-center">
                                PHONE
                            </div>
                            <div class="cell-md">
                                ADDRESS
                            </div>
                            <div class="cell-sm">
                                ACTION
                            </div>
                        </div>
                        <?php
                        if ($rows != null)
                            foreach ($rows as $row) {
                        ?>
                            <div class="tb-row">
                                <div class="cell-sm alg-center"><?= $row["ID"] ?></div>
                                <div class="cell">
                                    <?= $row["Name"] ?>
                                </div>
                                <div class="cell"><?= $row["Email"] ?></div>
                                <div class="cell-sm"><?= $row["Phone"] ?></div>
                                <div class="cell-md"><?= $row["Address"] ?></div>
                                <div class="cell-sm action-icon stt-out">
                                    <a href="#" id="getCustomer" data-bs-toggle="modal" data-id="<?php echo $row["ID"]; ?>" data-bs-target="#customer-detail"><i class="me-3 fas fa-edit" style="color: #ffffff;"></i></a>
                                    <a href="?cid=<?= $row["ID"] ?>"><i class="fas fa-trash"></i></a>
                                </div>
                            </div>
                        <?php
                            }
                        ?>
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
    <!-- customer table-->
    <?php

    ?>
    <!-- CUSTOMER INFORMATION -->
    <div class="modal fade" id="customer-detail" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="db-title" id="exampleModalLabel">Customer Detail</div>
                    <div type="button" class="" data-bs-dismiss="modal" aria-label="Close">
                        X
                    </div>
                </div>
                <div class="modal-body mb-3">
                    <div id="modal-loader">
                        <img src="../../../public/images/ajax-loader.gif" />
                    </div>
                    <!-- Content will be load here -->
                    <div id="dynamic-content">

                    </div>
                    <div class="row mt-5">
                        <div class="col-6">

                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" class="w-100 btn-lg-sc-admin">Cancel</button>
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="w-100 btn-lg-pr-admin w-100">Save edit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- MODAL -->
    <script>
        $(document).ready(function() {

            $(document).on('click', '#getCustomer', function(e) {

                e.preventDefault();
                // Get customer ID after click
                var uid = $(this).data('id');

                // leave modal blank before ajax call
                $('#dynamic-content').html('');
                //load ajax loader
                $('#modal-loader').show();

                $.ajax({
                        url: 'getcustomer.php',
                        type: 'POST',
                        data: {
                            id: uid
                        },
                        dataType: 'html',
                    })
                    .done(function(data) {
                        console.log(data);
                        $('#dynamic-content').html('');
                        // load response
                        $('#dynamic-content').html(data);
                        // hide ajax loader
                        $('#modal-loader').hide();
                    })
                    .fail(function() {
                        $('#dynamic-content').html('<p>Something went wrong, please try again!</p>');
                        $('#modal-loader').hide();
                    });
            });
        });
    </script>
</body>

</html>