<?php define('URLROOT', 'http://localhost:8888/project-php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Guide</title>
        <script src="https://kit.fontawesome.com/c813cf59a3.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/fonts.css">
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/guide.css">
        <link rel="stylesheet" href="<?php echo URLROOT?>/public/css/style.css">
    </head>
    <body>
        <?php require_once '../includes/header.php';?>
        
        <div>
            <!--Banner-->
            <div class="banner-img mbt-120">
            <div class="">
                <img src="../../../public/images/guide/banner.png"/>
            </div>
            <div class="banner-img-text">
                <h2 class="text-center">Jewellery Guide</h2>
                <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <h6 class="text-center">Welcome to our jewellery guide. Rare, precious, and everlasting, jewellery are fascinating gemological
                    curiosities with a rich history.</h6>
                </div>
                <div class="col-2"></div>
                </div>
            </div>
            </div>
            <div class="container-fluid mbt-120">
            <!--Jewelery-type-->
            <div class="jewellery-type">
                <!--lab-jewellery-->
                <div class="row mbt-120">
                <div class="col-2">
                    <h4 class="text-right">About</h4>
                    <h3 class="text-right">Lab - Grown Jewellery</h3>
                </div>
                <div class="col-5">
                    <div>
                    <img src="../../../public/images/guide/2.webp"/>
                    </div>
                </div>
                <div class="col-5 content">
                    <div class="content-inner">
                    <p class="mdt my-3">How Lab-Grown Jewellery Are Formed</p>
                    <p class="mb-2">Lab-grown jewelery are real diamonds grown in man-made environments. Current technology can recreate conditions
                        necessary for a diamond crystal to form, replicating the earth's natural process of diamond formation.</p>
                    <p class="">There are two common methods for growing diamonds in a lab: High Pressure High Temperature (HPHT) and
                        Chemical Vapor Deposition (CVD).An HPHT diamond starts as a small diamond seed that is placed into carbon.
                        Exposed to about 1500 degrees Celsius and pressurized to approximately 1.5 million pounds per square inch,
                        the pure carbon melts and begins to form around the starter seed. It is then carefully cooled to form a pure
                        carbon diamond.In the CVD method, a diamond seed is placed in carbon rich gasses that are ionized into plasma
                        using technology similar to that of microwaves and lasers.</p>
                    </div>
                </div>
                </div>
                <!--natural-jewellery-->
                <div class="row mbt-120 natural-j">
                <div class="col-7 ps-0 natural-j-img">
                    <img src="../../../public/images/guide/3.png"/>
                </div>
                <div class="col-5 pe-0 natural-j-content">
                    <div class="natural-d natural-inner">
                    <h4 class="mb-4">About Natural Jewellery</h4>
                    <p class="mdt my-3">How Earth-Created Jewelry Are Formed</p>
                    <p class="mb-2">Diamonds are crystalline carbon atoms that formed under the earth’s surface over 3 billion years ago. To be
                        more exact, they formed in the earth’s mantle about 90 miles below the surface under temperatures as high as
                        2000° F and a pressure of 45-60 kilobars.</p>
                    <p class="">After their formations, diamonds reach the earth’s surface during extremely rare and not yet observed
                        deep-source volcanic eruptions. Diamond is the only gemstone composed of a single element, as they are
                        typically about 99.95% carbon. The other 0.05% can include one or more trace elements, which are atoms that
                        aren’t part of a diamond’s essential chemistry. Some of them influence color.</p>
                    </div>
                </div>
                </div>
            </div>
            <!--diamond-and-4cs-->
            <div class="diamond-4cs mbt-120">
                <div class="row mt-40">
                <div class="col"></div>
                <div class="col-10 text-center">
                    <h4 class="mb-3">Diamond Characteristics and the 4 Cs</h4>
                    <p class="">Once the lab-grown or earth-created diamond is selected, the next step is to choose the quality of the diamond
                    and the shape of its cut. Both types of diamonds are graded by gemological institutes following exactly the same
                    process and are cut using exactly the same standards. To help guide your process, you can learn about diamond
                    grading and certification, the 4 C’s, diamond shapes, and more, below.</p>
                </div>
                <div class="col"></div>
                </div>
                <div>
                <div class="line my-3"></div>
                <!--Jewellery Carat-->
                <div class="carat-collapse">
                    <div class="togglebox">
                        <button class="togglebtn" onclick="toggleElement('myDIV4')">Jewellery Carat</button>
                    </div>
                    <div id="myDIV4" class="toggle-element mt-4">
                        <div class="">
                            <div class="card card-body my-5 px-0 py-0">
                                <div class="row">
                                    <div class="col-6 diamond-granding">
                                        <h6 class="text-center mb-4">DIAMOND CARAT GRADING</h6>
                                        <p class="mb-3 text-center">Diamond carat (ct) refers to a diamond’s weight. The most common and popular diamonds in the jewelry
                                        industry range up to 1 carat. Prices increase exponentially as the diamond's weight increases, as larger
                                        diamond crystals over 1 carat are more difficult to find.</p>
                                        <p class="text-center">Diamond cutters today use advanced technology to achieve the best proportions, ensuring that each diamond
                                        is cut following similar ratios. This allows them to estimate the diamond's diameter based on its carat weight.
                                        Though this is still an approximation, it can help you identify the best carat weight for your desired size.</p>
                                    </div>
                                    <div class="col-6 carat-tb">
                                        <div>
                                        <h6 class="text-center mb-3">DIAMOND CARAT SIZE CHART</h6>
                                        <p class="text-center smt">Below is a list of diamond carat weights and their approximate diameters to help determine the carat
                                            weight that might be the best size for you.</p>
                                        </div>
                                        <div class="line mb-3"></div>
                                        <div class="carat-table-inner row">
                                        <div class="col text-center">
                                            <p class="decor-text">0.25CT</p>
                                            <p class="smt">4mm</p>
                                        </div>
                                        <div class="col text-center">
                                            <p class="decor-text">0.25CT</p>
                                            <p class="smt">4mm</p>
                                        </div>
                                        <div class="col text-center">
                                            <p class="decor-text">0.25CT</p>
                                            <p class="smt">4mm</p>
                                        </div>
                                        <div class="col text-center">
                                            <p class="decor-text">0.25CT</p>
                                            <p class="smt">4mm</p>
                                        </div>
                                        <div class="col text-center">
                                            <p class="decor-text">0.25CT</p>
                                            <p class="smt">4mm</p>
                                        </div>
                                        </div>
                                        <div class="line my-3"></div>
                                        <p class="text-center mdt mt-3">Need a millimeter ruler? We’ll send you one.</p>
                                        <div class="row">
                                        <div class="col-3"></div>
                                        <div class="col-6">
                                            <button class="btn btn-pri w-100">Contact Us</button>
                                        </div>
                                        <div class="col-3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line my-3"></div>
                <!--Jewellery Color-->
                <div class="color-collapse">
                    <div class="togglebox">
                        <button class="togglebtn" onclick="toggleElement('myDIV1')">Jewellery Color</button>
                    </div>
                    <div id="myDIV1" class="toggle-element mt-4">
                        <div>
                            <div class="card card-body my-5 px-0 py-0">
                                <div class="row">
                                    <div class="col-6 color-left">
                                        <h6 class="text-center mb-4">DIAMOND COLOR GRADING</h6>
                                        <p class="mb-3 text-center">Gemological institutes grade white diamonds based on the absence of color. Though diamonds are primarily
                                        carbon, they often include trace elements that can affect their color. The most common trace element is
                                        nitrogen, which gives off a subtle shade of yellow. The richer the yellow hue, the more common the diamond crystal, which decreases their value.</p>
                                        <p class="text-center">To grade white diamond color, gemological institutes use letters of the alphabet, starting from D
                                        (colorless) all the way to Z (light yellow). Truly colorless diamonds are quite rare, therefore are
                                        the most expensive. However, you should note that subtle hints of color are difficult to spot outside
                                        of a laboratory environment. The most common color ranges are D through F and G through J.</p>
                                    </div>
                                    <div class="col-6">
                                        <img src="../../../public/images/guide/color.webp"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line my-3"></div>
                <!--Jewellery Clarity-->
                <div class="clarity-collapse">
                    <div class="togglebox">
                        <button class="togglebtn" onclick="toggleElement('myDIV2')">Jewellery Clarity</button>
                    </div>
                    <div id="myDIV2" class="toggle-element mt-4">
                        <div>
                            <div class="card card-body my-5 px-0 py-0">
                                <div class="row">
                                    <div class="col-6 color-left">
                                        <h6 class="text-center mb-4">DIAMOND COLOR GRADING</h6>
                                        <p class="mb-3 text-center">From formation of the crystal to cutting and polishing, diamonds undergo a long journey, leaving an
                                        individual mark on each stone. The diamond’s internal markings are called inclusions, while surface
                                        irregularities are called blemishes. Together, they’re called clarity characteristics. Gemologists grade diamond clarity based on the absence of inclusions and blemishes. After thorough examination, they prescribe a rating from flawless (no inclusions or blemishes) to included (some clarity characteristics will be visible even with the naked eye).  </p>
                                        <p class="text-center">The fewer inclusions and blemishes the diamond has, the more valuable it is considered to be. Nonetheless,
                                        clarity characteristics are like a natural diamond's 'birth marks' and are extraordinary gemological
                                        manifestations of its formation.</p>
                                    </div>
                                    <div class="col-6">
                                        <img src="../../../public/images/guide/clarity.webp"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line my-3"></div>
                <!--Jewellery Shape-->
                <div class="clarity-collapse">
                    <div class="togglebox">
                        <button class="togglebtn" onclick="toggleElement('myDIV3')">Jewellery Shape</button>
                    </div>
                    <div id="myDIV3" class="toggle-element mt-4">
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-6 color-left">
                                    <h6 class="text-end mb-4">DIAMOND COLOR GRADING</h6>
                                    <p class="mb-3 text-center">Gemological laboratories study a modern diamond’s cut based on how its facets interact with light,
                                    prescribing an excellent, very good, good, fair, or poor grade. Excellent and very good sparkle the most.
                                    Since this C determines the overall appearance of the modern day brilliant cut diamond, we consider it
                                    to be one of the most important. We recommend only selecting diamonds with an 'excellent' grading.</p>
                                    <p class="text-center">The modern round brilliant cut diamond has 57 facets, or sometimes 58 if the cutter included a culet,
                                    which is an additional facet at the bottom of the pavilion. Today, diamonds are cut with a precision up
                                    to 1/100th of a millimeter allowing the perfect balance of proportions to reveal a diamond's beauty.</p>
                                </div>
                                <div class="col-6">
                                    <img src="../../../public/images/guide/shape.webp"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line mt-3"></div>
                </div>
            </div>
            <!--jewellery-Care-->
            <div class="care mbt-120">
                <div class="text-end care-content">
                    <h5 class="mb-4">Jewellery Care</h5>
                    <p class="mtp type-j">Jewellery: Gold plated over sterling silver or brass</p>
                    <ul>
                    <li class="mb-1">Keep your jewellery dry. Don't do laundry or wash dishes with it on.</li>
                    <li class="mb-1">Don't wear it in pool, at the spa or in a seawater.</li>
                    <li class="mb-1">Take it off before working out.</li>
                    <li class="mb-1">Keep it away from body chemistry: your perfume, lotion, hand cream etc...</li>
                    <li class="mb-1">Don't use jewellery cleaner to clean it. it is too harsh, regular wipe with a soft cloth its all you need.</li>
                    <li class="">Keep it in our AGURI pouch and a box in a dry and clean environment when you don't wear it.</li>
                    </ul>
                    <p class="mt-3 type-j">Jewelry: Gold plated over stainless steel</p>
                    <ul>
                    <li class="">Jewellery is waterproof but please keep it away from harsh or sharp objects to avoid scratching.</li>
                    </ul>
                </div>
            </div>
            <!--bottom-text-->
            <div class="we">
                <div class="line2"></div>
                <h5 class="text-center we-content">AGURI is a fine jewelry destination for memorable pieces designed and crafted in
                    New York City. Our carefully considered selection of rings, necklaces, earrings and bracelets honors mindful
                    production and genuine materials.</h5>
            </div>
            </div>
            <!-- Back to top
            <div class="to-top" (click)="scrollToTop()" [ngClass]="{ 'show-scrollTop': windowScrolled }">
                <i class="fa-solid fa-circle-arrow-up fa-2xl"></i>
            </div> -->
        </div>
        <div>
            <?php require_once '../includes/footer.php';?>
        </div> 
        <!-- Toggle function -->
        <script>
            function toggleElement(elementId) {
                var x = document.getElementById(elementId);
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
            // window.addEventListener("DOMContentLoaded", function() {
            //     var elementId = "myElement"; // Replace "myElement" with the desired ID
            //     var x = document.getElementById(elementId);
            //     x.style.display = "none";
            // });
        </script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>