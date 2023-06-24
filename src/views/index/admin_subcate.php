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
                <div class="db-title mt-4">SUB-CATEGORY</div>
                <p>Have a nice day!</p>
                <div>
                    <div>
                        <div class="row">
                            <div class="col-3">
                                <div className="search-bar d-flex">
                                    <input className="search-input w-100" type="text" placeholder="Search text..." />
                                    <FontAwesomeIcon className="icon-search" icon={faSearch}/>
                                </div>
                            </div>
                            <div class="col-3">
                                <button class="w-100 btn-lg-pr-admin" data-bs-toggle="offcanvas" data-bs-target="#addsubcate" aria-controls="addsubcate">Add Sub-category</button>
                            </div>
                            <div class="col-3">
                                <button class="w-100 btn-lg-sc-admin">Delete Sub-category</button>
                            </div>
                            <div class="col-3">
                                <button class="w-100 btn-lg-sc-admin">Change Status</button>
                            </div>
                        </div>
                        <div class="line my-4"></div>
                    </div>
                    <!-- Product table -->
                    <div class="tbl">
                        <div class="tb-row title-row">
                            <div class="cell-ssm">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            </div>
                            <div class="cell-sm">
                                ID
                            </div>
                            <div class="cell">
                                SUB-CATEGORY'S NAME
                            </div>
                            <div class="cell alg-center">
                                CATEGORY
                            </div>
                            <div class="cell-md">
                                DESCRIPTION
                            </div>
                            <div class="cell alg-center">
                                ACTION
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell-ssm">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            </div>
                            <div class="cell-sm">12345</div>
                            <div class="cell">Sub-category name</div>
                            <div class="cell alg-center">Ring</div>
                            <div class="cell-md">Sub-category's description will goes here. Some text will goes here</div>
                            <div class="cell alg-center stt-out">
                                <div class="stt stt1"> Active</div>
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell-ssm">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            </div>
                            <div class="cell-sm">12345</div>
                            <div class="cell">Sub-category name</div>
                            <div class="cell alg-center">Ring</div>
                            <div class="cell-md">Sub-category's description will goes here. Some text will goes here</div>
                            <div class="cell stt-out>
                                <div class="stt stt1">Active</div>
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell-ssm">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            </div>
                            <div class="cell-sm">12345</div>
                            <div class="cell">Sub-category name</div>
                            <div class="cell alg-center">Ring</div>
                            <div class="cell-md">Sub-category's description will goes here. Some text will goes here</div>
                            <div class="cell stt-out">
                                <div class="stt stt3">Inactive</div>
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell-ssm">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            </div>
                            <div class="cell-sm">12345</div>
                            <div class="cell">Sub-category name</div>
                            <div class="cell alg-center">Ring</div>
                            <div class="cell-md">Sub-category's description will goes here. Some text will goes here</div>
                            <div class="cell stt-out">
                                <div class="stt stt3">Inactive</div>
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
        <div class="offcanvas offcanvas-end offcavasmd" tabindex="-1" id="addsubcate" aria-labelledby="addsubcateLabel">
            <div class="offcanvas-header">
                <div>
                    <div class="db-title">ADD SUB-CATEGORY<div>
                    <div>Upload Sub-category's Information Here!</div>
                </div>
                <div class="line"></div>
            </div>
            <div class="offcanvas-body">
                <div class="">
                    <div class="mdt mb-1">Sub-category's Name</div>
                    <input class="w-100" name="subcatename" id="subcatename" placeholder="Sub-category's name"/>
                </div>
                <div class="my-3">
                    <div class="mdt mb-1">Category</div>
                    <input class="w-100" name="category" id="category" placeholder="Choose category"/>
                </div>
                <div class="">
                    <div class="mdt mb-1">Sub-category's description</div>
                    <textarea class="w-100" name="subdesc" id="subdesc" rows="5">
                        Enter sub-category's description
                    </textarea>
                </div>
                <div>
                <form class="box" method="post" action="" enctype="multipart/form-data">
                    <div class="box__input">
                        <input class="box__file" type="file" name="files[]" id="file" data-multiple-caption="{count} files selected" multiple />
                        <label for="file"><strong>Choose a file</strong><span class="box__dragndrop"> or drag it here</span>.</label>
                        <button class="box__button" type="submit">Upload</button>
                    </div>
                    <div class="box__uploading">Uploading…</div>
                    <div class="box__success">Done!</div>
                    <div class="box__error">Error! <span></span>.</div>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>