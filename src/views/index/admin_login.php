<?php define('URLROOT', 'http://localhost:8888/project-php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/c813cf59a3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/fonts.css">
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/admin-style.css">
    </head>
    <body>
        <div class="row w-100 ad-login">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="offcanvas-body">
                    <div class="nav nav-tabs mb-5" id="myTab" role="tablist">
                        <ul class="nav nav-tabs row w-100" id="myTab" role="tablist">
                            <li class="nav-item col-6 alg-center" role="presentation">
                                <a class="nav-link active" id="signin-tab" data-bs-toggle="tab" data-bs-target="#signintab" type="button" role="tab" aria-controls="signintab" aria-selected="true">
                                    SIGN IN
                                </a>
                            </li>
                            <li class="nav-item col-6 alg-center" role="presentation">
                                <a class="nav-link" id="fgpass-tab" data-bs-toggle="tab" data-bs-target="#fgpasstab" type="button" role="tab" aria-controls="fgpasstab" aria-selected="false">
                                    FORGOT PASSWORD
                                </a>
                            </li>
                        </ul>
                    </div>  
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="signintab" role="tabpanel" aria-labelledby="signin-tab">
                            <div>
                                <div class="alg-center my-5">
                                    <div class="db-title mb-2">WELCOME BACK!</div>
                                    <div>Have a nice day!</div>
                                </div>
                                <div class="mb-4">
                                    <label for="admail">Email address *</label>
                                    <input class="forlog" name="admail" id="admail"/>
                                </div>
                                <div>
                                    <label for="adpass">Password *</label>
                                    <input class="forlog" name="adpass" id="adpass"/>
                                </div>
                                <button class="mt-5 w-100 btn-lg-pr-admin">Log in</button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="fgpasstab" role="tabpanel" aria-labelledby="fgpass-tab">
                            <div>
                                <div class="alg-center my-5">
                                    <div class="db-title mb-2">FORGOT PASSWORD?</div>
                                    <div>That's okay, it happens! Enter email address!</div>
                                </div>
                                <div class="">
                                    <label for="admail">Email address *</label>
                                    <input class="forlog" name="admail" id="admail"/>
                                </div>
                                <button class="mt-5 w-100 btn-lg-pr-admin">Reset password</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>