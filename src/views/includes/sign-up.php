
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
                <form name="frmsignup" id="frmsignup" method="post" action="">
                    <div class="row">
                        <div class="col-6 ps-0">
                            <label>First name</label>
                            <input class="inpu" type="text" name="fname" id="fname" required><br>
                        </div>
                        <div class="col-6 pe-0">
                            <label>Last name</label>
                            <input class="inpu" type="text" name="lname" id="lname" required><br>
                        </div>
                    </div>
                    <div class="my-3">
                        <label for="address">Address</label>
                        <input class="inpu" type="text" name="txtemail" id="txtemail" required>
                    </div>
                    <div class="my-3">
                        <label for="phone">Phone number</label>
                        <input class="inpu" type="text" name="txtemail" id="txtemail" required>
                    </div>
                    <div class="my-3">
                        <label for="email">Email address</label>
                        <input class="inpu" type="text" name="txtemail" id="txtemail" required>
                    </div>
                    <div class="">
                        <label for="psw">Create Password</label>
                        <input class="inpu" type="password" name="txtpass" id="txtpass" required>
                    </div>
                    <div class="my-3">
                        <label for="psw-repeat">Re-type Password</label>
                        <input class="inpu" type="password" name="psw-repeat" id="psw-repeat" required>
                    </div>
                        <button type="submit" class="registerbtn signin btn btn-pri my-4 w-100">Sign up</button>
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