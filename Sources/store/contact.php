<!DOCTYPE html>
<html>
    <head>
        <title>Contact</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/c813cf59a3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="../css/fonts.css">
        <Link rel="stylesheet" type="text/css" href="../css/contact.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <div class="">
            <?php include 'header.php';?>
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
        <div class="">
            <?php include 'footer.php';?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>

</html>