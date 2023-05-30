<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign in</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="http://localhost:8888/project-php/public/css/style.css">
    </head>
    <body>
        <div>
            <?php include 'forgot-pass.php'; ?>
        </div>
        <div>
            <?php include 'sign-up.php'; ?>
        </div>
        <div class="modal fade" id="sign-in" tabindex="-1" aria-hidden="true" aria-labelledby="sign-in-modal">
            <div class="modal-dialog modal-dialog-centered first-steps">
                <div class="modal-content first-steps-inner">
                    <h5 class="modal-title mb-4 text-center">Welcome to AGURI!</h5>
                    <form method="post" name="frmlogin" id="frmlogin" action="xulylogin.php">
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
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>