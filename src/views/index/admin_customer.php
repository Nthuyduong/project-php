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
                        <a class="wt-color" style="cursor:pointer" href="#">
                            <i class="fas fa-bell"></i>
                        </a>
                    </div>
                    <div class="ms-3">
                        <a class="wt-color" style="cursor:pointer" href="#">
                            <i class="fas fa-user"></i>
                        </a>
                    </div>
                </div>
            </div>
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
                                <input className="search-input w-100" type="text" placeholder="Search text..." />
                                <FontAwesomeIcon className="icon-search" icon={faSearch}/>
                            </div>
                        </div>
                        <div class="col-3">
                            
                        </div>
                    </div>
                    <div class="tbl">
                        <div class="tb-row title-row">
                            <div class="cell-sm">
                                ID
                            </div>
                            <div class="cell">
                                NAME
                            </div>
                            <div class="cell">
                                EMAIL
                            </div>
                            <div class="cell-sm">
                                PHONE
                            </div>
                            <div class="cell-md">
                                ADDRESS
                            </div>
                            <div class="cell-sm">
                                ACTION
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell-sm">123</div>
                            <div class="cell">
                                <a href="#" class="" data-bs-toggle="modal" data-bs-target="#customer-detail">Nguyen Thuy Duong</a>
                            </div>
                            <div class="cell">Duongthuy@gmail.com</div>
                            <div class="cell-sm">12345678</div>
                            <div class="cell-md">So 1, Nguyen Trai, Thanh Xuan, Ha Noi</div>
                            <div class="cell-sm action-icon">
                                <i class="fas fa-search-plus" style="color: #ffffff;"></i>                                                                       
                                <i class="fas fa-edit" style="color: #ffffff;"></i>                         
                                <i class="fas fa-trash"></i>
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell-sm">123</div>
                            <div class="cell">Nguyen Thuy Duong</div>
                            <div class="cell">Duongthuy@gmail.com</div>
                            <div class="cell-sm">12345678</div>
                            <div class="cell-md">So 1, Nguyen Trai, Thanh Xuan, Ha Noi</div>
                            <div class="cell-sm action-icon">                                   
                                <i class="fas fa-search-plus" style="color: #ffffff;"></i>                                                                       
                                <i class="fas fa-edit" style="color: #ffffff;"></i>                         
                                <i class="fas fa-trash"></i>
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell-sm">123</div>
                            <div class="cell">Nguyen Thuy Duong</div>
                            <div class="cell">Duongthuy@gmail.com</div>
                            <div class="cell-sm">12345678</div>
                            <div class="cell-md">So 1, Nguyen Trai, Thanh Xuan, Ha Noi</div>
                            <div class="cell-sm action-icon">
                                <i class="fas fa-search-plus" style="color: #ffffff;"></i>                                                                      
                                <i class="fas fa-edit" style="color: #ffffff;"></i>                          
                                <i class="fas fa-trash"></i>
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell-sm">123</div>
                            <div class="cell">Nguyen Thuy Duong</div>
                            <div class="cell">Duongthuy@gmail.com</div>
                            <div class="cell-sm">12345678</div>
                            <div class="cell-md">So 1, Nguyen Trai, Thanh Xuan, Ha Noi</div>
                            <div class="cell-sm action-icon">
                                <i class="fas fa-search-plus" style="color: #ffffff;"></i>                                                                      
                                <i class="fas fa-edit" style="color: #ffffff;"></i>                         
                                <i class="fas fa-trash"></i>
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell-sm">123</div>
                            <div class="cell">Nguyen Thuy Duong</div>
                            <div class="cell">Duongthuy@gmail.com</div>
                            <div class="cell-sm">12345678</div>
                            <div class="cell-md">So 1, Nguyen Trai, Thanh Xuan, Ha Noi</div>
                            <div class="cell-sm action-icon">
                                <i class="fas fa-search-plus" style="color: #ffffff;"></i>                                                                        
                                <i class="fas fa-edit" style="color: #ffffff;"></i>                         
                                <i class="fas fa-trash"></i>
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
                        <div class="row">
                            <div class="col-6">
                                <div class="tbl">
                                    <div class="tb-title mb-3">Customer information</div>
                                    <div class="tb-row">
                                        <div class="cell-sm">NAME</div>
                                        <div class="cell">Nguyen Thuy Duong</div>
                                    </div>
                                    <div class="tb-row">
                                        <div class="cell-sm">PHONE</div>
                                        <div class="cell">12345678</div>
                                    </div>
                                    <div class="tb-row">
                                        <div class="cell-sm">EMAIL</div>
                                        <div class="cell">nthduong@gmail.com</div>
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
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>