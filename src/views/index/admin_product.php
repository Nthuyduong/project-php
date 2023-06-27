<?php define('URLROOT', 'http://localhost:8888/project-php'); ?>
<?php
session_start();
require_once("../../models/model_product.php");
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
        <?php require_once '../includes/sidebar.php';?>
        
        <div id="main">
            <!-- THIS IS HEADER -->
            <?php require '../includes/ad-header.php'?>
            <!-- THIS IS ALL CONTENT -->
            <div>
                <!-- Product here -->
                <div class="db-title">PRODUCTS</div>
                <p>Have a nice day!</p>
                <div>
                    <div>
                        <div class="d-flex">
                            <a href="#offcanvasRight" class="ms-auto btn-lg-pr-admin" role="button" data-bs-toggle="offcanvas" aria-controls="offcanvasRight">Add new product</a>
                            <a class="ms-3 btn-lg-sc-admin">Delete product</a>
                        </div>
                        <div class="line my-3"></div>
                        <div class="row">
                            <div class="col-3">
                                <div className="search-bar d-flex">
                                    <input className="black search-input w-100" type="text" placeholder="Search text..." />
                                    <FontAwesomeIcon className="icon-search" icon={faSearch}/>
                                </div>
                            </div>
                            <div class="col-3">
                                <select class="sl-box" name="ctg" id="ctg">
                                    <option>Category</option>
                                    <option>Ring</option>
                                    <option>Earring</option>
                                    <option>Necklace</option>
                                    <option>Bracelet</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <select class="sl-box" name="sub-ctg" id="sub-ctg">
                                    <option>Sub-category</option>
                                    <option>Eternity</option>
                                    <option>Eternity</option>
                                    <option>Eternity</option>
                                    <option>Eternity</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <select class="sl-box" name="status" id="status">
                                    <option>Price</option>
                                    <option>Low to high</option>
                                    <option>High to low</option>
                                    <option>Most expensive</option>
                                    <option>Cheapest</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- Product table -->
                    <?php
                    $products = new model_product();
                    $ketqua = $products->GetListProducts();
                        // sử dụng biến $ketqua và $sanpham đã có bên ctlSanpham.php
                        if($ketqua==FALSE)
                        {
                            $alert_title = "Can't Connect Database!";
                            $alert = "Please check again the database";
                            require_once("../../views/includes/alert.php");
                            die();
                        }
                        // lấy mảng sản phẩm từ $data của lớp clsSanpham
                            $rows = $products->data;
                    ?>
                    <div class="tbl">
                        <div class="tb-row title-row">
                            <div class="cell-ssm">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            </div>
                            <div class="cell-sm">
                                IMAGE
                            </div>
                            <div class="cell">
                                PRODUCT'S NAME
                            </div>
                            <div class="cell-sm">
                                CATEGORY
                            </div>
                            <div class="cell">
                                SUB-CATEGORY
                            </div>
                            <div class="cell">
                                PRICE
                            </div>
                            <div class="cell-sm">
                                STOCK
                            </div>
                            <div class="cell-sm">
                                STATUS
                            </div>
                            <div class="cell-sm">
                                PUBLISHED
                            </div>
                            <div class="cell-sm">
                                
                            </div>
                        </div>
                        <?php
                        if($rows != NULL)
                            foreach($rows as $row)
                        {
                        ?>
                        <div class="tb-row">
                            <div class="cell-ssm">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            </div>
                            <div class="cell-sm">img</div>
                            <div class="cell"><?=$row["Name"]?></div>
                            <div class="cell-sm"><?=$row["category_name"]?></div>
                            <div class="cell"><?=$row["sub_category_name"]?></div>
                            <div class="cell"><?=$row["Price"]?></div>
                            <div class="cell-sm">Stock</div>
                            <div class="cell-sm stt-out">
                                <div class="stt-sm stt3">Status</div>
                            </div>
                            <div class="cell-sm togglebtn stt-out">
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="cell-sm">
                                <!-- Chuc nang sua san pham -->
                                <a href=""><i class="fas fa-edit" style="color: #ffffff;"></i></a>
                                <!-- Chuc nang xoa san pham -->
                                <a href=""><i class="fas fa-trash" style="color: #ffffff;"></i></a>
                            </div>
                        </div>
                        <!-- Dong vong lap for each -->
                        <?php
                        }
                        ?>
                </div>
            </div>
        </div>
        <!-- ADD NEW PRODUCT HERE -->
        <div class="offcanvas offcanvas-end offcanvasfull" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <div>
                    <div class="db-title mt-4">ADD NEW PRODUCT</div>
                    <p>Upload Product's Information Here!</p>
                </div>
                <div type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="fa-solid fa-circle-x fa-xl text-light"></i>
                </div>
            </div>
            <div class="offcanvas-body">
                <div class="nav nav-tabs mb-5" id="myTab" role="tablist">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="basis-tab" data-bs-toggle="tab" data-bs-target="#basis" type="button" role="tab" aria-controls="basis" aria-selected="true">
                                Basis Information
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="combination-tab" data-bs-toggle="tab" data-bs-target="#combination" type="button" role="tab" aria-controls="combination" aria-selected="false">
                                Combination
                            </a>
                        </li>
                    </ul>
                </div>  
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="basis" role="tabpanel" aria-labelledby="basis-tab">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <div class="mdt mb-1">Product's Name</div>
                                    <input class="" name="prdname" id="prdname" placeholder="Product's name/title"/>
                                </div>
                                <div>
                                    <div class="mdt mb-1">Product's Unit</div>
                                    <input class="" name="prdunit" id="prdunit" placeholder="Product's name/title"/>
                                </div>
                                <div class="my-3">
                                    <div class="md mb-1">Product's Price</div>
                                    <input class="w-100" name="prdprice" id="prdprice" placeholder="Product's price"/>
                                </div>
                                <div>
                                    <div class="mdt mb-1">Product's Description</div>
                                    <textarea class="w-100" name="prddesc" id="prddesc" rows="4">
                                    Enter product's description here
                                    </textarea>
                                </div>
                                <div class="my-3">
                                    <div class="mdt mb-1">Product's Quantity</div>
                                    <input class="w-100" name="prdquan" id="prdquan" placeholder="Product's quantity"/>
                                </div>
                                <div>
                                    <div class="mdt mb-1">Product's SKU</div>
                                    <input class="w-100" name="prdsku" id="prdsku" placeholder="Product's SKU"/>
                                </div>
                                <div class="mt-3">
                                    <div class="mdt mb-1">Product's Category</div>
                                    <input class="w-100" name="prdcate" id="prdcate" placeholder="Product's category"/>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mdt mb-1">Product's Image</div>
                                <div class="drag-drop">
                                    <input type="file" id="file-input" />
                                    <div class="drag-drop-text">
                                        <p class="alg-center">Drag and drop an image file here</p>
                                        <p class="alg-center">Only *.png, *,webp, *.jpeg will be accepted</p>
                                    </div>
                                </div>  
                                <!-- image drag will goes here -->
                                <div class="row">
                                    <div class="col-3">
                                        <div>
                                            <img src="#">
                                        </div>
                                        <div>Default image</div>
                                    </div>
                                    <div class="col-3">
                                        <div>
                                            <img src="#">
                                        </div>
                                        <div></div>
                                    </div>
                                    <div class="col-3">
                                        <div>
                                            <img src="#">
                                        </div>
                                        <div></div>
                                    </div>
                                    <div class="col-3">
                                        <div>
                                            <img src="#">
                                        </div>
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="combination" role="tabpanel" aria-labelledby="combination-tab">
                        <div class="row">
                            <div class="col-3">
                                <select class="sl-box" name="ctg" id="ctg">
                                    <option value="" disabled selected>Choose Combination</option>
                                    <option>Jewelry Type</option>
                                    <option>Material</option>
                                    <option>Size</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <select class="sl-box" name="ctg" id="ctg">
                                    <option value="" disabled selected>Jewelry Type</option>
                                    <option>Natural Diamond</option>
                                    <option>Lab-grown Diamond</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <select class="sl-box" name="ctg" id="ctg">
                                    <option value="" disabled selected>Material</option>
                                    <option>Gold</option>
                                    <option>Rose Gold</option>
                                    <option>White Gold</option>
                                    <option>Sterling Silver</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <select class="sl-box" name="ctg" id="ctg">
                                    <option value="" disabled selected>Size</option>
                                    <option></option>
                                    <option>Earring</option>
                                    <option>Necklace</option>
                                    <option>Bracelet</option>
                                </select>
                            </div>
                        </div>
                        <div class="line my-3"></div>
                        <div class="d-flex">
                            <button class="ms-auto btn-lg-pr-admin">Generate</button>
                            <button class="ms-3 btn-lg-sc-admin">Clear</button>
                        </div>
                        <div class="tbl">
                            <div class="tb-row title-row">
                                <div class="cell-ssm">
                                    IMAGE
                                </div>
                                <div class="cell">
                                    PRODUCT'S NAME
                                </div>
                                <div class="cell-sm">
                                    MATERIAL
                                </div>
                                <div class="cell">
                                    JEWELRY TYPE
                                </div>
                                <div class="cell-sm">
                                    SKU
                                </div>
                                <div class="cell-sm">
                                    PRICE ($)
                                </div>
                                <div class="cell-sm">
                                    QUANTITY
                                </div>
                                <div class="cell-sm">
                                    ACTION
                                </div>
                            </div>
                            <div class="tb-row">
                                <div class="cell-ssm">
                                    
                                </div>
                                <div class="cell">Amee Diamnond Ring</div>
                                <div class="cell-sm">Gold</div>
                                <div class="cell">Natural Diamond</div>
                                <div class="cell-sm">123</div>
                                <div class="cell-sm">$20.000</div>
                                <div class="cell-sm">5</div>
                                <div class="cell-sm">
                                    <i class="fas fa-trash" style="color: #ffffff;"></i>
                                </div>
                            </div>
                            <div class="tb-row">
                                <div class="cell-ssm">
                                    
                                </div>
                                <div class="cell">Amee Diamnond Ring</div>
                                <div class="cell-sm">Gold</div>
                                <div class="cell">Natural Diamond</div>
                                <div class="cell-sm">123</div>
                                <div class="cell-sm">$20.000</div>
                                <div class="cell-sm">5</div>
                                <div class="cell-sm">
                                    <i class="fas fa-trash" style="color: #ffffff;"></i>
                                </div>
                            </div>
                            <div class="tb-row">
                                <div class="cell-ssm">
                                    
                                </div>
                                <div class="cell">Amee Diamnond Ring</div>
                                <div class="cell-sm">Gold</div>
                                <div class="cell">Natural Diamond</div>
                                <div class="cell-sm">123</div>
                                <div class="cell-sm">$20.000</div>
                                <div class="cell-sm">5</div>
                                <div class="cell-sm">
                                    <i class="fas fa-trash" style="color: #ffffff;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>     
    </body>
</html>