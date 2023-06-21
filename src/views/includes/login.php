
<!DOCTYPE html>
<html>
    <head>
        <title>Sign in</title>
    </head>
    <body>
        <div class="modal fade" id="sign-in" tabindex="-1" aria-hidden="true" aria-labelledby="sign-in-modal">
            <div class="modal-dialog modal-dialog-centered first-steps">
                <div class="modal-content first-steps-inner">
                    <h5 class="modal-title mb-4 text-center">Welcome to AGURI!</h5>
                    <form method="post" name="frmlogin" id="frmlogin" action="../controllers/xulylogin.php">
                        <div class="mb-3">
                            <label for="email">Email address</label>
                            <input class="inpu" type="text" name="temail" id="temail">
                        </div>
                        <div>
                            <label for="psw">Password</label>
                            <input class="inpu" type="password" name="tpass" id="tpass">
                        </div>
                            <button type="submit" class="btn btn-pri my-4 w-100" name="b1" id="id" value="Dong y">Sign in</button>
                        <div class="d-flex sign-in-content">
                            <div class="signin-inner">
                                <a class="forgot-pass smt me-5" data-bs-toggle="modal" type="submit" data-bs-target="#forgot-pass">Forgot password?</a>
                                <span class="smt">New member?<a class="sign-up smt" data-bs-toggle="modal" type="button" data-bs-target="#sign-up">Sign up</a></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </body>
</html>