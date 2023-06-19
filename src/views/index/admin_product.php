<?php define('URLROOT', 'http://localhost:8888/project-php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/c813cf59a3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/fonts.css">
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/admin-style.css">
    </head>
    <body>
        <div>
            <?php require_once '../includes/sidebar.php';?>
        </div>
        <div id="main">
            <!-- THIS IS HEADER -->
            <div class="admin-nav d-flex">
                <div class="nav-admin-start me-auto">
                    <span style="cursor:pointer" onclick="openNav()">
                        <i class="fas fa-bars"></i>
                    </span>
                </div>
                <div class="nav-admin-end d-flex">
                    <div>
                        <a style="cursor:pointer" href="#">
                            <i class="fas fa-bell"></i>
                        </a>
                    </div>
                    <div class="ms-3">
                        <a style="cursor:pointer" href="#">
                            <i class="fas fa-user"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- THIS IS ALL CONTENT -->
            <div>
                <!-- Product here -->
                <div class="db-title">PRODUCTS</div>
                <p>Have a nice day!</p>
                <div>
                    <div>
                        <div class="d-flex">
                            <button class="ms-auto btn-lg-pr-admin" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Add new product</button>
                            <button class="ms-3 btn-lg-sc-admin">Delete product</button>
                        </div>
                        <div class="line my-3"></div>
                        <div class="row">
                            <div class="col-3">
                                <div className="search-bar d-flex">
                                    <input className="search-input w-100" type="text" placeholder="Search text..." />
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
                        <div class="tb-row">
                            <div class="cell-ssm">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            </div>
                            <div class="cell-sm">img</div>
                            <div class="cell">Amee Diamond Ring</div>
                            <div class="cell-sm">Ring</div>
                            <div class="cell">Eternity</div>
                            <div class="cell">$20.000</div>
                            <div class="cell-sm">5</div>
                            <div class="cell-sm">
                                <div class="stt-sm stt3">Sold out</div>
                            </div>
                            <div class="cell-sm togglebtn">
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="cell-sm">
                                <i class="fas fa-edit" style="color: #ffffff;"></i>
                                <i class="fas fa-trash" style="color: #ffffff;"></i>
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell-ssm">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            </div>
                            <div class="cell-sm">img</div>
                            <div class="cell">Amee Diamond Ring</div>
                            <div class="cell-sm">Ring</div>
                            <div class="cell">Eternity</div>
                            <div class="cell">$20.000</div>
                            <div class="cell-sm">5</div>
                            <div class="cell-sm">
                                <div class="stt-sm stt3">Sold out</div>
                            </div>
                            <div class="cell-sm togglebtn">
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="cell-sm">
                                <i class="fas fa-edit" style="color: #ffffff;"></i>
                                <i class="fas fa-trash" style="color: #ffffff;"></i>
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell-ssm">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            </div>
                            <div class="cell-sm">img</div>
                            <div class="cell">Amee Diamond Ring</div>
                            <div class="cell-sm">Ring</div>
                            <div class="cell">Eternity</div>
                            <div class="cell">$20.000</div>
                            <div class="cell-sm">5</div>
                            <div class="cell-sm">
                                <div class="stt-sm stt3">Sold out</div>
                            </div>
                            <div class="cell-sm togglebtn">
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="cell-sm">
                                <i class="fas fa-edit" style="color: #ffffff;"></i>
                                <i class="fas fa-trash" style="color: #ffffff;"></i>
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell-ssm">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            </div>
                            <div class="cell-sm">img</div>
                            <div class="cell">Amee Diamond Ring</div>
                            <div class="cell-sm">Ring</div>
                            <div class="cell">Eternity</div>
                            <div class="cell">$20.000</div>
                            <div class="cell-sm">5</div>
                            <div class="cell-sm">
                                <div class="stt-sm stt1">
                                Selling
                                </div>
                            </div>
                            <div class="cell-sm togglebtn">
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="cell-sm">
                                <i class="fas fa-edit" style="color: #ffffff;"></i>
                                <i class="fas fa-trash" style="color: #ffffff;"></i>
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell-ssm">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            </div>
                            <div class="cell-sm">img</div>
                            <div class="cell">Amee Diamond Ring</div>
                            <div class="cell-sm">Ring</div>
                            <div class="cell">Eternity</div>
                            <div class="cell">$20.000</div>
                            <div class="cell-sm">5</div>
                            <div class="cell-sm">
                                <div class="stt1 stt-sm">Selling</div>
                            </div>
                            <div class="cell-sm togglebtn">
                                <div class="tgb">
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="cell-sm">
                                <i class="fas fa-edit" style="color: #ffffff;"></i>
                                <i class="fas fa-trash" style="color: #ffffff;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex pgn">
                        <div class="me-auto">Showing 8 of 100</div>
                        <div class="pagination">
                            <a href="#">&laquo;</a>
                            <a class="active" href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">&raquo;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                    <input class="w-100" name="prdname" id="prdname" placeholder="Product's name/title"/>
                                </div>
                                <div>
                                    <div class="mdt mb-1">Product's Unit</div>
                                    <input class="w-100" name="prdunit" id="prdunit" placeholder="Product's name/title"/>
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
                            <div classs="col-6">
                                <div>Product's Image</div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="combination" role="tabpanel" aria-labelledby="combination-tab">
                        <div class="row">
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
                                <select class="sl-box" name="ctg" id="ctg">
                                    <option>Category</option>
                                    <option>Ring</option>
                                    <option>Earring</option>
                                    <option>Necklace</option>
                                    <option>Bracelet</option>
                                </select>
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
                                <select class="sl-box" name="ctg" id="ctg">
                                    <option>Category</option>
                                    <option>Ring</option>
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