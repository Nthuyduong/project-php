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
        <?php require_once '../includes/sidebar.php';?>
        
        <div id="main">
            <?php require '../includes/ad-header.php'?>
            <!-- THIS IS ALL CONTENT -->
            <div>
                <!-- Product here -->
                <div class="db-title mt-4">CATEGORY</div>
                <p>Have a nice day!</p>
                <div class="mb-3">
                    <div>
                        <div class="row">
                            <div class="col-3">
                                <div className="search-bar d-flex">
                                    <input className="search-input w-100" type="text" placeholder="Search text..." />
                                </div>
                            </div>
                            <div class="col-3">
                                <button class="w-100 btn-lg-pr-admin" data-bs-toggle="offcanvas" data-bs-target="#addcate" aria-controls="addcate">Add Category</button>
                            </div>
                            <div class="col-3">
                                <button class="w-100 btn-lg-sc-admin">Delete Category</button>
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
                                CATEGORY'S NAME
                            </div>
                            <div class="cell-md">
                                DESCRIPTION
                            </div>
                            <div class="cell alg-center">
                                STATUS
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell-ssm">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            </div>
                            <div class="cell-sm">12345</div>
                            <div class="cell">
                                <a href="admin_subcate.php">Ring</a>
                            </div>
                            <div class="cell-md">Sub-category's description will goes here. Some text will goes here</div>
                            <div class="cell alg-center stt-out">
                                <div class="stt stt1">Active</div>
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell-ssm">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            </div>
                            <div class="cell-sm">12345</div>
                            <div class="cell">
                                <a href="admin_subcate.php">Earring</a>
                            </div>
                            <div class="cell-md">Sub-category's description will goes here. Some text will goes here</div>
                            <div class="cell alg-center stt-out">
                                <div class="stt stt1">Active</div>
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell-ssm">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            </div>
                            <div class="cell-sm">12345</div>
                            <div class="cell">
                                <a href="admin_subcate.php">Necklace</a>
                            </div>
                            <div class="cell-md">category's description will goes here. Some text will goes here</div>
                            <div class="cell alg-center stt-out">
                                <div class="stt stt3">Inactive</div>
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell-ssm">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            </div>
                            <div class="cell-sm">12345</div>
                            <div class="cell">
                                <a href="admin_subcate.php">Bracelet</a>
                            </div>
                            <div class="cell-md">Category's description will goes here. Some text will goes here</div>
                            <div class="cell alg-center stt-out">
                                <div class="stt stt1">Active</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add new category -->
        <div class="offcanvas offcanvas-end offcavasmd" tabindex="-1" id="addcate" aria-labelledby="addcateLabel">
            <div class="offcanvas-header">
                <div>
                    <div class="db-title">ADD CATEGORY</div>
                    <div>Upload Sub-category's Information Here!</div>
                </div>
                <div class="line"></div>
            </div>
            <div class="offcanvas-body">
                <div class="">
                    <div class="mdt mb-1">Sub-category's Name</div>
                    <input class="w-100" name="catename" id="catename" placeholder="Category's name"/>
                </div>
                <div class="">
                    <div class="mdt mb-1">Category's description</div>
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