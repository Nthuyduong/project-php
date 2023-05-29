<!DOCTYPE html>
<html>
    <head>
        <title>Forgot password</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/fonts.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body>
        <div class="modal fade" id="sign-in">
            <div class="modal-dialog modal-dialog-centered first-steps">
                <div class="modal-content first-steps-inner">
                    <h5 class="modal-title mb-4 text-center">Welcome to AGURI!</h5>
                    <form>
                        <div class="mb-3">
                            <label for="email">Email address</label>
                            <input class="inpu" type="text" name="email" required>
                        </div>
                        <div>
                            <label for="psw">Password</label>
                            <input class="inpu" type="password" name="psw" required>
                        </div>
                            <button type="submit" class="btn btn-pri my-4 w-100">Sign in</button>
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