
<!DOCTYPE html>
<html>
    <head>
        <title>Sign up</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css/fonts.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
    <div class="modal fade" id="sign-up">
        <div class="modal-dialog modal-dialog-centered first-steps">
            <div class="modal-content first-steps-inner">
                <h5 class="modal-title mb-4 text-center">Hello, Friend!</h5>
                <form>
                    <div class="row">
                        <div class="col-6 ps-0">
                            <label>First name</label>
                            <input class="inpu" type="text" required><br>
                        </div>
                        <div class="col-6 pe-0">
                            <label>Last name</label>
                            <input class="inpu" type="text" required><br>
                        </div>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>