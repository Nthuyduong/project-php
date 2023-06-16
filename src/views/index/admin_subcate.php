<!DOCTYPE html>
<html>
    <head>
        
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
                                <select class="sl-box" name="ctg" id="ctg">
                                    <option>Category</option>
                                    <option>Ring</option>
                                    <option>Earring</option>
                                    <option>Necklace</option>
                                    <option>Bracelet</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <button class="w-100 btn-lg-pr-admin" data-bs-toggle="offcanvas" data-bs-target="#addsubcate" aria-controls="addsubcate">Add Sub-category</button>
                            </div>
                            <div class="col-3">
                                <button class="w-100 btn-lg-sc-admin">Delete Sub-category</button>
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
                            <div class="cell-md">
                                DESCRIPTION
                            </div>
                            <div class="cell alg-center">
                                PUBLISH
                            </div>
                            <div class="cell">
                                ACTION
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell-ssm">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            </div>
                            <div class="cell-sm">12345</div>
                            <div class="cell">Sub-category name</div>
                            <div class="cell-md">Sub-category's description will goes here. Some text will goes here</div>
                            <div class="cell alg-center">
                                <label class="switch">
                                    <input type="checkbox" checked/>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="cell action-icon">
                                <i class="fas fa-edit" style="color: #ffffff;"></i>                         
                                <i class=" ms-3 fas fa-trash"></i>
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell-ssm">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            </div>
                            <div class="cell-sm">12345</div>
                            <div class="cell">Sub-category name</div>
                            <div class="cell-md">Sub-category's description will goes here. Some text will goes here</div>
                            <div class="cell alg-center">
                                <label class="switch">
                                    <input type="checkbox" checked/>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="cell action-icon">
                                <i class="fas fa-edit" style="color: #ffffff;"></i>                         
                                <i class="ms-3 fas fa-trash"></i>
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell-ssm">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            </div>
                            <div class="cell-sm">12345</div>
                            <div class="cell">Sub-category name</div>
                            <div class="cell-md">Sub-category's description will goes here. Some text will goes here</div>
                            <div class="cell alg-center">
                                <label class="switch">
                                    <input type="checkbox" checked/>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="cell action-icon">
                                <i class="fas fa-edit" style="color: #ffffff;"></i>                         
                                <i class="ms-3 fas fa-trash"></i>
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell-ssm">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            </div>
                            <div class="cell-sm">12345</div>
                            <div class="cell">Sub-category name</div>
                            <div class="cell-md">Sub-category's description will goes here. Some text will goes here</div>
                            <div class="cell alg-center">
                                <label class="switch">
                                    <input type="checkbox" checked/>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="cell action-icon">
                                <i class="fas fa-edit" style="color: #ffffff;"></i>                         
                                <i class="ms-3 fas fa-trash"></i>
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
    </body>
</html>