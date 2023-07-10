<?php
session_start();
if(isset($_SESSION["logined_user"])==false || $_SESSION["logined_user"]=="")
{
?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/admin-style.css">

    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div id="AlertLogin">
                <div class="alert-dialog">
                    <div class="alert-content">
                        <div class="db-title alg-center mb-3">LOGIN ERROR</div>
                        <div class="alg-center mb-3">You need to login first to access AGURI's Admin page!</div>
                        <div class="alg-center">
                            <a href='../index/admin_login.php'>Click here to login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
<?php
die();
}
?>