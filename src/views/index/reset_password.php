<?php define('URLROOT', 'http://localhost:8888/project-php');
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Reset password</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/c813cf59a3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php echo URLROOT?>/public/css/fonts.css">
        <link rel="stylesheet" href="<?php echo URLROOT?>/public/css/style.css">
    </head>
    <body>
        <?php require '../includes/header.php';?>
        <div class="">
            <form action="../../controllers/controller_user_reset_password.php" method="post">
                <div class="row mt-60 mt-40">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <h5 class="modal-title mb-4 text-center">Reset Password</h5>
                        
                        <div class="mb-3">
                            <label for="email">Enter a new password</label>
                            <input class="inpu" type="password" name="newpass" id="newpass" required>
                        </div>
                        <div>
                            <label for="psw">Re-type password</label>
                            <input class="inpu" type="password" name="repass" id="repass" required>
                        </div>
                        <button type="submit" class="btn btn-pri my-4 w-100" name="b3" id="b3" value="Dong y">Reset password</button>
                        <div>
                            <div class="mdt">Make sure your password is at least 8 characters and contains:</div>
                            <ul class="mt-2">
                                <li>- At least 1 uppercase letter and 1 lowercase letter</li>
                                <li>- At least 1 number</li>
                                <li>- At least 1 special character (like @#%ˆ)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-4"></div>
                </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <?php require_once '../includes/footer.php';?>
    </body>
</html>