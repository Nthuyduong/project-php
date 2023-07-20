<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/c813cf59a3.js" crossorigin="anonymous"></script>
<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
$keyword = isset($_REQUEST["keyword"]) ? $_REQUEST["keyword"] : "";
$sub = isset($_REQUEST["subname"]) ? $_REQUEST["subname"] : "";
$sort = isset($_REQUEST["sort"]) ? $_REQUEST["sort"] : "";

require_once("../../models/model_product.php");
$list = new model_product();
if ($sub == "")
    $sub = "%%";
if ($keyword == "")
    $keyword = "%%";
else
    $keyword = "%$keyword%";
// echo "$keyword";
// echo "$sub";
// echo "$sort";
$ketqua = $list->GetListBySub($sub, $keyword, $sort);
// echo ("$ketqua");
if ($ketqua == false) {
    echo "ERROR!";
} else {
    $rows = $list->data;
    if ($rows != null)
        foreach ($rows as $row) {
?>
        <div class="tb-row">
            <div class="cell-sm alg-center"><?= $row["ID"] ?></div>
            <div class="cell"><?= $row["Name"] ?></div>
            <div class="cell-sm alg-center"><?= $row["Category"] ?></div>
            <div class="cell alg-center"><?= $row["Sub_category"] ?></div>
            <div class="cell-sm alg-center"><?= $row["Material"] ?></div>
            <div class="cell alg-center"><?= $row["Jewelry_type"] ?></div>
            <div class="cell-sm alg-center"><?= $row["Price"] ?></div>
            <div class="cell-sm alg-center"><?= $row["TotalStock"] ?></div>
            <div class="cell-sm alg-center"><?= $row["Unit"] ?></div>
            <!-- <div class="cell-sm stt-out">
                <div class="stt-sm stt3">Status</div>
            </div> -->
            <!-- <div class="cell-sm togglebtn stt-out">
                <label class="switch">
                    <input type="checkbox" checked>
                    <span class="slider round"></span>
                </label>
            </div> -->
            <div class="cell-sm stt-out">
                <!-- Chuc nang sua san pham -->
                <a id="getproduct" href="#" data-bs-toggle="modal" data-id="<?php echo $row["ID"]; ?>" data-bs-target="#product-detail"><i class="me-3 fas fa-edit" style="color: #ffffff;"></i></a>
                <!-- Chuc nang xoa san pham -->
                <a name="btn" onclick="showConfirmationAndRedirect(<?= $row['ID'] ?>)"><i class="fas fa-trash" style="color: #ffffff;"></i></a>
            </div>
        </div>
        <!-- EDIT PRODUCT INFORMATION -->
        <!-- PRODUCT INFORMATION -->
        <div class="modal fade" id="product-detail" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="db-title" id="exampleModalLabel">Product Detail</div>
                        <div type="button" class="" data-bs-dismiss="modal" aria-label="Close">
                            X
                        </div>
                    </div>
                    <div class="modal-body mb-3">
                        <!-- Content will be load here -->
                        <div id="dynamic-product">

                        </div>
                        <div class="row mt-5">
                            <div class="col-6">
                                <div class="btn-lg-sc-admin w-100">Cancel</div>
                            </div>
                            <div class="col-6">
                                <div class="btn-lg-pr-admin w-100">Save edit</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function showConfirmationAndRedirect(prdname) {
                // Display the confirmation dialog
                var confirmation = window.confirm("Are you sure you want to delete this product?");

                // Check the user's response
                if (confirmation) {
                    // If the user clicks "OK," proceed with the deletion action
                    deleteProduct(prdname);
                } else {
                    // If the user clicks "Cancel," do nothing
                }
            }
        </script>
        <!-- AJAX DELETE PRODUCT -->
        <script>
            function deleteProduct(id) {
                $.ajax({
                    url: 'deleteAJAX.php',
                    type: 'POST',
                    data: {
                        prdname: id,
                    },
                    dataType: 'html',
                    success: function(responseData, status) {
                        // Reload the page after successful deletion
                        if (status == "success")
                            location.reload();
                    }
                })
            }
        </script>

        <!-- AJAX DISPLAY AND EDIT PRODUCT INFROMATION -->
        <script>
            $(document).ready(function() {

                $(document).on('click', '#getproduct', function(e) {

                    e.preventDefault();
                    // Get customer ID after click
                    var id = $(this).data('id');

                    // leave modal blank before ajax call
                    $('#dynamic-product').html('');

                    $.ajax({
                            url: 'showproductAJAX.php',
                            type: 'POST',
                            data: {
                                id: id
                            },
                            dataType: 'html',
                        })
                        .done(function(data) {
                            console.log(data);
                            $('#dynamic-product').html('');
                            // load response
                            $('#dynamic-product').html(data);
                        })
                        .fail(function() {
                            $('#dynamic-product').html('<p>Something went wrong, please try again!</p>');
                        });
                });
            });
        </script>
<?php
        }
}
?>