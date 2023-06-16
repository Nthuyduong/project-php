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
                            <i class="fas fa-user-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- THIS IS ALL CONTENT -->
            <div>
                <!-- Order here -->
                <div class="db-title mt-4">ORDERS</div>
                <p>Have a nice day!</p>
                <div>
                    <div class="row">
                        <div class="col-3">
                            <div className="search-bar d-flex">
                                <input className="search-input w-100" type="text" placeholder="Search text..." />
                                <FontAwesomeIcon className="icon-search" icon={faSearch}/>
                            </div>
                        </div>
                        <div class="col-3">
                            <select class="sl-box" name="status" id="status">
                                <option>choose status</option>
                                <option>Pending</option>
                                <option>Processing</option>
                                <option>Delivered</option>
                                <option>Cancel</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <input name="" id="" placeholder="Order date (dd/mm/yyyy)"/>
                        </div>
                        <div class="col-3">
                            <button class="btn-lg-pr-admin w-100">Download all order</button>
                        </div>
                    </div>
                    <div class="tbl">
                        <div class="tb-row title-row">
                            <div class="cell">
                                ORDER ID
                            </div>
                            <div class="cell-md">
                                ORDER TiME
                            </div>
                            <div class="cell-md">
                                CUSTOMER'S NAME
                            </div>
                            <div class="cell">
                                METHOD
                            </div>
                            <div class="cell">
                                AMOUNT
                            </div>
                            <div class="cell">
                                STATUS
                            </div>
                            <div class="cell">
                                ACTION
                            </div>
                            <div class="cell"></div>
                        </div>
                        <div class="tb-row">
                            <div class="cell">10123</div>
                            <div class="cell-md">12/04/2023</div>
                            <div class="cell-md">Nguyen Thuy Duong</div>
                            <div class="cell">Paypal</div>
                            <div class="cell">$30.000</div>
                            <div class="cell">
                                <div class="stt stt1">Pending</div>
                            </div>
                            <div class="cell">
                                <select class="w-100">
                                    <option>Pending</option>
                                    <option>Processing</option>
                                    <option>Delivered</option>
                                    <option>Cancel</option>
                                </select>
                            </div>
                            <div class="cell action-icon">
                                <i class="fas fa-print" style="color: #ffffff;"></i>
                                <i class="fas fa-search-plus ms-3" style="color: #ffffff;"></i>
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell">10124</div>
                            <div class="cell-md">14/05/2023</div>
                            <div class="cell-md">Vu Thi Hue</div>
                            <div class="cell">Master Card</div>
                            <div class="cell">$40.000</div>
                            <div class="cell">
                                <div class="stt stt2">Processing</div>
                            </div>
                            <div class="cell">
                                <select class="w-100">
                                    <option>Pending</option>
                                    <option>Processing</option>
                                    <option>Delivered</option>
                                    <option>Cancel</option>
                                </select>
                            </div>
                            <div class="cell action-icon">
                                <i class="fas fa-print" style="color: #ffffff;"></i>
                                <i class="fas fa-search-plus ms-3" style="color: #ffffff;"></i>
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell">10123</div>
                            <div class="cell-md">10/04/2023</div>
                            <div class="cell-md">Nguyen Thanh Thuy</div>
                            <div class="cell">Visa</div>
                            <div class="cell">$35.000</div>
                            <div class="cell">
                                <div class="stt stt1">Pending</div>
                            </div>
                            <div class="cell">
                                <select class="w-100">
                                    <option>Pending</option>
                                    <option>Processing</option>
                                    <option>Delivered</option>
                                    <option>Cancel</option>
                                </select>
                            </div>
                            <div class="cell action-icon">
                                <i class="fas fa-print" style="color: #ffffff;"></i>
                                <i class="fas fa-search-plus ms-3" style="color: #ffffff;"></i>
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell">10123</div>
                            <div class="cell-md">10/04/2023</div>
                            <div class="cell-md">Nguyen Thanh Thuy</div>
                            <div class="cell">Visa</div>
                            <div class="cell">$35.000</div>
                            <div class="cell">
                                <div class="stt stt1">Pending</div>
                            </div>
                            <div class="cell">
                                <select class="w-100">
                                    <option>Pending</option>
                                    <option>Processing</option>
                                    <option>Delivered</option>
                                    <option>Cancel</option>
                                </select>
                            </div>
                            <div class="cell action-icon">
                                <i class="fas fa-print" style="color: #ffffff;"></i>
                                <i class="fas fa-search-plus ms-3" style="color: #ffffff;"></i>
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell">10123</div>
                            <div class="cell-md">10/04/2023</div>
                            <div class="cell-md">Nguyen Thanh Thuy</div>
                            <div class="cell">Paypal</div>
                            <div class="cell">$35.000</div>
                            <div class="cell">
                                <div class="stt stt1">Pending</div>
                            </div>
                            <div class="cell">
                                <select class="w-100">
                                    <option>Pending</option>
                                    <option>Processing</option>
                                    <option>Delivered</option>
                                    <option>Cancel</option>
                                </select>
                            </div>
                            <div class="cell action-icon">
                                <i class="fas fa-print" style="color: #ffffff;"></i>
                                <i class="fas fa-search-plus ms-3" style="color: #ffffff;"></i>  
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell">10123</div>
                            <div class="cell-md">10/04/2023</div>
                            <div class="cell-md">Nguyen Thanh Thuy</div>
                            <div class="cell">Master Card</div>
                            <div class="cell">$35.000</div>
                            <div class="cell">
                                <div class="stt stt1">Pending</div>
                            </div>
                            <div class="cell">
                                <select class="w-100">
                                    <option>Pending</option>
                                    <option>Processing</option>
                                    <option>Delivered</option>
                                    <option>Cancel</option>
                                </select>
                            </div>
                            <div class="cell action-icon">
                                <i class="fas fa-print" style="color: #ffffff;"></i>
                                <i class="fas fa-search-plus ms-3" style="color: #ffffff;"></i>
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell">10123</div>
                            <div class="cell-md">10/04/2023</div>
                            <div class="cell-md">Nguyen Thanh Thuy</div>
                            <div class="cell">Paypal</div>
                            <div class="cell">$35.000</div>
                            <div class="cell">
                                <div class="stt stt1">Pending</div>
                            </div>
                            <div class="cell">
                                <select class="w-100">
                                    <option>Pending</option>
                                    <option>Processing</option>
                                    <option>Delivered</option>
                                    <option>Cancel</option>
                                </select>
                            </div>
                            <div class="cell action-icon">
                                <i class="fas fa-print" style="color: #ffffff;"></i>
                                <i class="fas fa-search-plus ms-3" style="color: #ffffff;"></i>
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell">10123</div>
                            <div class="cell-md">10/04/2023</div>
                            <div class="cell-md">Nguyen Thanh Thuy</div>
                            <div class="cell">Visa</div>
                            <div class="cell">$35.000</div>
                            <div class="cell">
                                <div class="stt stt1">Pending</div>
                            </div>
                            <div class="cell">
                                <select class="w-100">
                                    <option>Pending</option>
                                    <option>Processing</option>
                                    <option>Delivered</option>
                                    <option>Cancel</option>
                                </select>
                            </div>
                            <div class="cell action-icon">
                                <i class="fas fa-print" style="color: #ffffff;"></i>
                                <i class="fas fa-search-plus ms-3" style="color: #ffffff;"></i>
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell">10123</div>
                            <div class="cell-md">10/04/2023</div>
                            <div class="cell-md">Nguyen Thanh Thuy</div>
                            <div class="cell">Visa</div>
                            <div class="cell">$35.000</div>
                            <div class="cell">
                                <div class="stt stt1">Pending</div>
                            </div>
                            <div class="cell">
                                <select class="w-100">
                                    <option>Pending</option>
                                    <option>Processing</option>
                                    <option>Delivered</option>
                                    <option>Cancel</option>
                                </select>
                            </div>
                            <div class="cell action-icon">
                                <i class="fas fa-print" style="color: #ffffff;"></i>
                                <i class="fas fa-search-plus ms-3" style="color: #ffffff;"></i>
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell">10123</div>
                            <div class="cell-md">10/04/2023</div>
                            <div class="cell-md">Nguyen Thanh Thuy</div>
                            <div class="cell">Visa</div>
                            <div class="cell">$35.000</div>
                            <div class="cell">
                                <div class="stt stt1">Pending</div>
                            </div>
                            <div class="cell">
                                <select class="w-100">
                                    <option>Pending</option>
                                    <option>Processing</option>
                                    <option>Delivered</option>
                                    <option>Cancel</option>
                                </select>
                            </div>
                            <div class="cell action-icon">
                                <i class="fas fa-print" style="color: #ffffff;"></i>
                                <i class="fas fa-search-plus ms-3" style="color: #ffffff;"></i>
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell">10123</div>
                            <div class="cell-md">10/04/2023</div>
                            <div class="cell-md">Nguyen Thanh Thuy</div>
                            <div class="cell">Visa</div>
                            <div class="cell">$35.000</div>
                            <div class="cell">
                                <div class="stt stt1">
                                    Pending
                                </div>
                            </div>
                            <div class="cell">
                                <select class="w-100">
                                    <option>Pending</option>
                                    <option>Processing</option>
                                    <option>Delivered</option>
                                    <option>Cancel</option>
                                </select>
                            </div>
                            <div class="cell action-icon">
                                <i class="fas fa-print" style="color: #ffffff;"></i>
                                <i class="fas fa-search-plus ms-3" style="color: #ffffff;"></i>
                            </div>
                        </div>
                        <div class="tb-row">
                            <div class="cell">10123</div>
                            <div class="cell-md">10/04/2023</div>
                            <div class="cell-md">Nguyen Thanh Thuy</div>
                            <div class="cell">Visa</div>
                            <div class="cell">$35.000</div>
                            <div class="cell">
                                <div class="stt stt1">
                                    Pending
                                </div>
                            </div>
                            <div class="cell">
                                <select class="w-100">
                                    <option>Pending</option>
                                    <option>Processing</option>
                                    <option>Delivered</option>
                                    <option>Cancel</option>
                                </select>
                            </div>
                            <div class="cell action-icon">
                                <i class="fas fa-print" style="color: #ffffff;"></i>
                                <i class="fas fa-search-plus ms-3" style="color: #ffffff;"></i>
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
        </div>
    </body>
</html>