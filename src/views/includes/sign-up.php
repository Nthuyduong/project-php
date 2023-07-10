
<!DOCTYPE html>
<html>
    <head>
        <title>Sign up</title>
    </head>
    <body>

    <div class="modal fade" id="sign-up">
        <div class="modal-dialog modal-dialog-centered first-steps">
            <div class="modal-content first-steps-inner">
                <h5 class="modal-title mb-4 text-center">Hello, Friend!</h5>
                <form name="frmsignup" id="frmsignup" method="post" action="../../controllers/controller_user_add.php">
                    <div class="my-3">
                        <label for="address">Fullname</label> 
                        <input class="inpu" type="text" name="txtname" id="txtemail" value="<?=$_SESSION["sign_up_user_name_err"]?>" required>
                    </div>
                    <div class="my-3">
                        <label for="address">Address</label>
                        <input class="inpu" type="text" name="txtaddress" id="txtaddress" value="<?=$_SESSION["sign_up_user_address_err"]?>" required>
                    </div>
                    <div class="my-3">
                        <label for="phone">Phone number</label>
                        <input class="inpu" type="text" name="txtphone" id="txtphone" value="<?=$_SESSION["sign_up_user_phone_err"]?>" required>
                        <p style="color: red" ><?=$_SESSION["sign_up_user_phone_fail"]?></p>
                    </div>
                    <div class="my-3">
                        <label for="email">Email address</label>
                        <input class="inpu" type="text" name="txtemail" id="txtemail" value="<?=$_SESSION["sign_up_user_email_err"]?>" required>
                        <p style="color: red" ><?=$_SESSION["sign_up_user_email_fail"]?></p>
                    </div>
                    <div class="">
                        <label for="psw">Create Password</label>
                        <input class="inpu" type="password" name="txtpass" id="txtpass" value="<?=$_SESSION["sign_up_user_pass_err"]?>" required>
                    </div>
                    <div class="my-3">
                        <label for="psw-repeat">Re-type Password</label>
                        <input class="inpu" type="password" name="txt_repass" id="txt_repass" value="<?=$_SESSION["sign_up_user_repass_err"]?>" required>
                        <p style="color: red" ><?=$_SESSION["sign_up_user_repass_fail"]?></p>
                    </div>
                        <button type="submit" name="b2" id="b2" class="registerbtn signin btn btn-pri my-4 w-100">Sign up</button>
                    <div class="d-flex sign-in-content w-100">
                        <div class="signin-inner">
                            <span class="smt">Already have an account? <a class="sign-in smt" data-bs-toggle="modal" type="button" data-bs-target="#sign-in">Sign in</a></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </body>
</html>