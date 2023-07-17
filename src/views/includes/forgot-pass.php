
<!DOCTYPE html>
<html>
    <head>
        <title>Forgot password</title>
    </head>
    <body>

        <div class="modal fade" id="forgot-pass">
            <div class="modal-dialog modal-dialog-centered first-steps">
                <div class="modal-content first-steps-inner">
                <h5 class="modal-title mb-4 text-center">Forgot your password?</h5>
                <!--name="myFormBottom" onsubmit="return validateFormBottom()"-->
                <form name="frmforgotpass" id="frmforgotpass" method="post" action="../../controllers/controller_user_forgotpassword.php">
                    <label for="email">Email address</label>
                    <input class="inpu" type="text" name="txtemail" required>
                    <button type="submit" name="b1" id="b1" class="btn btn-pri my-4 w-100">Reset Password</button>
                    <div class="text-center">
                        <a class="smt" data-bs-toggle="modal" type="submit" data-bs-target="#sign-in">Back to Sign in</a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </body>
</html>