<?php define('URLROOT', 'http://localhost:8888/project-php'); ?>
<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Search</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/c813cf59a3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php echo URLROOT?>/public/css/fonts.css">
        <link rel="stylesheet" href="<?php echo URLROOT?>/public/css/search.css">
        <link rel="stylesheet" href="<?php echo URLROOT?>/public/css/style.css">
    </head>
    <body>
        <div>
            <?php require_once '../includes/header.php';?>
        </div> 
        <div class="container-fluid mb-5">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <form>
                        <input class="inpu" type="text" name="keyword" id="keyword" placeholder="enter product name..." value="<?=$_SESSION["keywordprd"]?>">
                    </form>
                </div>
                <div class="col-3">
            </div>
            
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="">
                        <div id="ketqua">
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
        <div>
            <?php require_once '../includes/footer.php';?>
        </div> 
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script>
            function timkiemAJAX()
            {
                keyword = $("#keyword").val(); //lấy giá trị của input có id=keyword_productname
                
                //$("#ketqua").html("Đang tìm kiếm...");
                $("#ketqua").html("<div style='text-align:center'><img src='loading.gif' width='80'></div>");
                //xử dụng AJAX bằng JQuery để gửi request tới trang ListBook.php và hiển thị kết quả
                $.ajax({
                    url: "seachProductAjax.php",
                    type: "POST",
                    data: {keyword: keyword},
                    success: function(responseData,status) {
                        if(status=="success")
                            $("#ketqua").html(responseData);
                        else
                            $("#ketqua").html("<h3>Lỗi gửi request</h3>");
                    }
                });
            }
            //$(document).ready(function(){...} ); để đảm bảo các lệnh chỉ thực hiện khi nội dung web đã tải xong   
            $(document).ready(function () {
                $("#keyword").keyup(timkiemAJAX);
            });  
        </script>
    </body>
</html>
