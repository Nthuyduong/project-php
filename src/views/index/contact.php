<?php define('URLROOT', 'http://localhost:8888/project-php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contact</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/fonts.css">
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/contact.css">
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/style.css">
    </head>
    <body>
        <div>
            <?php require_once '../includes/header.php';?>
        </div> 
        <div class="container-fluid contact-form">
            <div class="contact-inner">
                <div class="row">
                    <div class="col"></div>
                    <div class="col-6 contact-form">
                        <form ngNativeValidate onsubmit="alert('Thank you for your message!! We will contact you soon.')">
                            <div class="row name-user">
                                <div class="col-6 firstname ps-0">
                                <label>First name</label>
                                <input class="inpu" type="text">
                                </div>
                                <div class="col-6 lastname pe-0">
                                <label>Last name</label>
                                <input class="inpu" type="text">
                                </div>
                            </div>
                            <div class="email-user user-input">
                                <label>Email address (*)</label>
                                <input class="inpu" type="email" required><br>
                            </div>
                            <div class="subj-user user-input">
                                <label>Subject</label>
                                <input class="inpu" type="text"><br>
                            </div>
                            <div class="mess-user">
                                <label>Message (*)</label>
                                <textarea class="inpu" rows="4" required></textarea>
                            </div>
                            <div class="text-center">
                                <button class="d-inline-block btn btn-pri btlg" type="submit">Send it</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-4 contact-text">
                        <h6>Drop us a line</h6>
                        <p class="smt">For questions regarding our products and services you can also contact us by filling out the form below.</p>
                        <p class="decor-text mail-info">info@AGURI&PIJ2022.com for appointment</p>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
        <div id="googleMap" style="width:100%;height:400px;"></div>
            <script>
                function myMap() {
                    var mapProp = {
                    center: new google.maps.LatLng(34.101516, -118.338284),
                    zoom: 15
                    };
                    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
                }
            </script>
        <div>
            <?php require_once '../includes/footer.php';?>
        </div>
        <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>