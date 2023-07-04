<?php define('URLROOT', 'http://localhost:8888/project-php'); ?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
require_once("../../core/checklogin.php");
require_once("../../models/model_subcate.php");


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
            <!-- Product here -->
            <div class="db-title mt-4">SUB-CATEGORY</div>
            <p>Have a nice day!</p>
            <div>
                <div>
                    <div class="row">
                        <div class="col-3">
                            <div className="search-bar d-flex">
                                <form action="" method="GET" class="">
                                    <input class="search-input w-100" type="text" id="findsubct" name="findsubct" placeholder="Search text..." />
                                    <FontAwesomeIcon class="icon-search" icon={faSearch} />
                                </form>
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
                <?php
                $searchct = new model_subcate();
                $keyword = $_REQUEST["findsubct"];
                if ($keyword != "")
                {
                    $searchct->SearchSubcate($keyword);
                    $rows = $searchct->data;
                } else {
                    $sublist = new model_subcate();
                    $cate = $_REQUEST["catename"];
                    $ketqua = $sublist->GetSubcate($cate);
                    if ($ketqua == false) {
                        $alert = "SQL ERROR";
                        $alert_title = "";
                        require_once("../includes/alert.php");
                    }
                    $rows = $sublist->data;
                }
                ?>
                <div class="tbl">
                    <div class="tb-row title-row">
                        <div class="cell-ssm">
                            <input type="checkbox" id="" name="" value="">
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
                    <?php
                    if ($rows != NULL)
                        foreach ($rows as $row) {
                    ?>
                        <div class="tb-row">
                            <div class="cell-ssm">
                                <input type="checkbox" id="" name="" value="">
                            </div>
                            <div class="cell-sm"><?= $row["ID"] ?></div>
                            <div class="cell"><?= $row["Name"] ?></div>
                            <div class="cell"><?= $row["Category"] ?></div>
                            <div class="cell-md">Description about sub-category goes here</div>
                            <div class="cell">
                                <a href=""><i class="me-3 fas fa-edit" style="color: #ffffff;"></i></a>
                                <a href="#"><i class="fas fa-trash" style="color: #ffffff;"></i></a>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
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
            <div class="">
                <div class="mb-3 db-title">ADD SUB-CATEGORY<div>
                    </div>
                    <div class="line"></div>
                </div>
                <div class="offcanvas-body">
                    <div class="">
                        <div class="mdt mb-1">Sub-category's Name</div>
                        <input class="w-100" name="subcatename" id="subcatename" placeholder="Sub-category's name" />
                    </div>
                    <div class="my-3">
                        <div class="mdt mb-1">Category</div>
                        <input class="w-100" name="category" id="category" placeholder="Choose category" />
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