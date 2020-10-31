<?php
session_start();
$page = $_SERVER['PHP_SELF'];
$sec = "5";

// $file_handle = fopen("ct.txt", "r");

// //while (!feof($file_handle) ) {

//    $line_of_text = fgets($file_handle);
//    $parts = explode(',', trim($line_of_text) );
//     //echo $parts;
//    $data = implode(",",$parts);
//    echo $data;
// //}
// $_SESSION['lat_long'] = $data;
// fclose($file_handle);
$line = '';

$f = fopen('ct.txt', 'r');
$cursor = -1;

fseek($f, $cursor, SEEK_END);
$char = fgetc($f);

/**
 * Trim trailing newline chars of the file
 */
while ($char === "\n" || $char === "\r") {
    fseek($f, $cursor--, SEEK_END);
    $char = fgetc($f);
}

/**
 * Read until the start of file or first newline char
 */
while ($char !== false && $char !== "\n" && $char !== "\r") {
    /**
     * Prepend the new char
     */
    $line = $char . $line;
    fseek($f, $cursor--, SEEK_END);
    $char = fgetc($f);
}
$_SESSION['lat_long'] = $line;
echo $line;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Transcrew | Courier & Delivery Service HTML Template</title>
    <meta name="description" content="Transcrew | Courier & Delivery Service HTML Template" />
    <meta name="keywords"
        content="cargo, courier, delivery, freight, logistics, mover, moving company, packaging, responsive, shipment, shipping, transport, warehouse" />
    <!-- Plugins CSS -->
    <link href="css/plugins.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://use.fontawesome.com/c64ad24e38.js"></script>
</head>

<body>
    <!-- Pre Loader -->
    <div class="page-wrapper">
        <!-- Preloader -->
        <div id="dvLoading"></div>
        <header class="main-header">
            <!--Header Top-->
            <div class="header-top">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <div class="top-left">
                            <div class="text">Best Courier Services in the World </div>
                        </div>
                        <div class="top-right">
                            <ul class="list clearfix">
                                <li><a href="tel:+369-2900-4800"><span class="icon fa fa-user"></span><?php echo $_SESSION['username']; ?></a></li>
                                <!-- <li><a href="mailto:test@test.com"><span class="icon fa fa-envelope"></span>
                                        test@test.com</a></li> -->
                            </ul>
                            <ul class="social-icons">
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header Top -->
            <!-- Header Upper -->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <!--Info-->
                        <div class="logo-outer">
                            <div class="logo logo-1"> <a href="index.html"> <img src="images/logo.png" alt=""> </a>
                            </div>
                        </div>
                        <!--Nav Box-->
                        <div class="nav-outer clearfix">
                            <!--Mobile Navigation Toggler For Mobile-->
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="navbar-header">
                                    <!-- Togg le Button -->
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation"> <span
                                            class="icon flaticon-menu"></span> </button>
                                </div>
                                <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">

                                </div>
                            </nav>
                            <!-- Main Menu End-->
                            <!-- Main Menu End-->
                            <div class="outer-box clearfix">
                                <!--Search Box-->
                                <!-- <div class="search-box-outer">
                                    <div class="dropdown">
                                        <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu1"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                                class="ti ti-search"></span></button>
                                        <ul class="dropdown-menu pull-right search-panel"
                                            aria-labelledby="dropdownMenu1">
                                            <li class="panel-outer">
                                                <div class="form-container">
                                                    <form method="post" action="blog.html">
                                                        <div class="form-group">
                                                            <input type="search" name="field-name" value=""
                                                                placeholder="Search Here" required>
                                                            <button type="submit" class="search-btn"><span
                                                                    class="fa fa-search"></span></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div> -->
                                <!-- Button Box -->
                                <div class="btn-box"> <a href="index.html" class="theme-btn vendor-btn">Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->
            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon far fa-window-close"></span></div>
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                <nav class="menu-box">
                    <div class="nav-logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
                    <ul class="navigation clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </ul>
                </nav>
            </div>
            <!-- End Mobile Menu -->
            <!-- Quote Section -->
            <div class="quote-part mfp-hide" id="quote-popup">
                <div class="container">
                    <div class="section-title"> <span class="section-span">Get A Quote</span> </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="quote-form">
                                <div class="row">
                                    <div class="col-md">
                                        <input type="text" class="form-control" placeholder="Name" required>
                                    </div>
                                    <div class="col-md">
                                        <input type="text" class="form-control" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md">
                                        <input type="text" class="form-control" placeholder="Subject" required>
                                    </div>
                                    <div class="col-md">
                                        <select class="form-control" id="courier-type-box">
                                            <option>Standard</option>
                                            <option>Express</option>
                                            <option>International</option>
                                            <option>Pallet</option>
                                            <option>Ware Housing</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Message" rows="4" required></textarea>
                                </div>
                                <button type="submit" class="quote-contact-btn">SEND</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Main Header -->
        <!-- Page Title -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>Main Page</h2>
                    <ul>
                        <li> <a href="index.html">Home</a> </li>
                        <li> <i class='ti-angle-right'></i> </li>
                        <li>Main Page</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title -->
        <!-- Start About Section -->

        <!-- End About Section -->
        <!-- Start Quotation Area -->

        <!-- End Quotation Area -->
        <!-- Start Pricing Area -->
        <div class="row">
            <!--FIRST ROW-->

            <!--TABLE-->

            <div class=" table-responsive col-xl-6" style="background-color: white;">
                <h3 style="padding: 30px;">Delivery Status</h2>
                    <table class="table table-light">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Status</th>
                                <th scope="col">Date</th>
                                <th scope="col">Linked Account</th>
                                <th scope="col">History</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th scope="row">3</th>
                                <td style="border-radius: 10px;height: 10px;">
                                    Returned</td>
                                <td>August 8th, 2020</td>
                                <td>MobileDev</td>
                                <td><a>ersad7667r5r8d8asd90a</a></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td style="border-radius: 10px;height: 10px;">
                                    Returned</td>
                                <td>August 8th, 2020</td>
                                <td>MobileDev</td>
                                <td><a>ersad7667r5r8d8asd90a</a></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td style="border-radius: 10px;height: 10px;">
                                    Returned</td>
                                <td>August 8th, 2020</td>
                                <td>MobileDev</td>
                                <td><a>ersad7667r5r8d8asd90a</a></td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td style="border-radius: 10px;height: 10px;">
                                    Returned</td>
                                <td>August 8th, 2020</td>
                                <td>MobileDev</td>
                                <td><a>ersad7667r5r8d8asd90a</a></td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td style="border-radius: 10px;height: 10px;">
                                    Returned</td>
                                <td>August 8th, 2020</td>
                                <td>MobileDev</td>
                                <td><a>ersad7667r5r8d8asd90a</a></td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td style="border-radius: 10px;height: 10px;">
                                    Returned</td>
                                <td>August 8th, 2020</td>
                                <td>MobileDev</td>
                                <td><a>ersad7667r5r8d8asd90a</a></td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td style="border-radius: 10px;height: 10px;">
                                    Returned</td>
                                <td>August 8th, 2020</td>
                                <td>MobileDev</td>
                                <td><a>ersad7667r5r8d8asd90a</a></td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td style="border-radius: 10px;height: 10px;">
                                    Returned</td>
                                <td>August 8th, 2020</td>
                                <td>MobileDev</td>
                                <td><a>ersad7667r5r8d8asd90a</a></td>
                            </tr>
                        </tbody>
                    </table>
            </div>


            <div class="col-xl-6">
                <!--MAP START-->
                <!--Google map-->
                <div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 500px">
                    <iframe src="https://maps.google.com/maps?q=<?php echo $_SESSION['lat_long']; ?>&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" style="border:0; height: 100%;width: 100%;" allowfullscreen></iframe>
                </div>
                <!--Google Maps-->
            </div>
        </div>
        <!-- Start Services Area -->
        <!-- Start Footer Area -->
        <footer class="footer_dark">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="medium_divider clearfix"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="widget">
                                <div class="footer_logo"> <a href="#"><img src="images/footer-logo.png"
                                            alt="logo" /></a>
                                </div>
                                <p>If you are going to use a passage of Lorem Ipsum you need to be sure there isn't
                                    anything
                                    embarrassing hidden in the middle of text</p>
                                <ul class="social_icons social_white">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-6">
                            <div class="widget">
                                <h6 class="widget_title">Useful Links</h6>
                                <ul class="widget_links">
                                    <li><a href="about-us.html">About us</a></li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="login.html">Login</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-6">
                            <div class="widget">
                                <h6 class="widget_title">information</h6>
                                <ul class="widget_links">
                                    <li><a href="our-team.html">Our Team</a></li>
                                    <li><a href="faq.html">FAQs</a></li>
                                    <li><a href="error.html">Error Page</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="tables.html">Tables</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="widget">
                                <h6 class="widget_title">Subscribe Newsletter</h6>
                                <p>By subscribing to our mailing list you will always be update with the latest news
                                    from us.</p>
                                <div class="newsletter_form input_tran_white">
                                    <form>
                                        <input type="text" required class="form-control form-control-sm"
                                            placeholder="Enter Email Address">
                                        <button type="submit" title="Subscribe" class="bttn" name="submit"
                                            value="Submit">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bottom_footer border-top-tran">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="mb-md-0 text-center text-md-left">© 2020 All Rights Reserved by Transcrew.
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list_none footer_link text-center text-md-right">
                                        <li><a href="javascript:void(0)">Privacy Policy</a></li>
                                        <li><a href="javascript:void(0)">Terms &amp; Conditions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="waveWrapper">
                <div class="footer-wave waveTop"></div>
            </div>
        </footer>
    </div>
    <!-- End Footer Area -->
    <!-- jQuery Min JS -->
    <script src="js/jquery-min.js"></script>
    <!-- Popper Min JS -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap Min JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Owl Carousel Min JS -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Owl Plugins JS -->
    <script src="js/plugins.js"></script>
    <!-- Odometer min JS -->
    <script src="js/odometer.min.js"></script>
    <!-- Appear JS -->
    <script src="js/jquery.appear.js"></script>
    <!-- datepicker min JS -->
    <script src="js/datepicker.js"></script>
    <script src="js/datepicker.en.js"></script>
    <!--Fontawesome js -->
    <script src="js/fontawesome.js"></script>
    <!-- MagnificPopup JS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- Swiper Min JS -->
    <script src="js/swiper.min.js"></script>
    <!-- Venobox Min JS -->
    <script src="js/venobox.min.js"></script>
    <!-- Custom JS -->
    <script src="js/custom.js"></script>
</body>

</html>

