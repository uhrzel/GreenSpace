<?php
session_start(); // Start session
// Check if the user is not logged in, redirect to login page
if (isset($_SESSION['user_email'])) {
    echo "<script>window.location.href='homepage';</script>";
    exit();
}
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GreenSpace</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">


    <style type="text/css">
        * { font-family: 'Poppins' }

              body { font-family: 'Poppins' }
               html { font-family: 'Poppins' }

    </style>
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/newlogo.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index"><img src="assets/img/logo/greenlogo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">                                                                                          
                                                <li><a href="index">Home</a></li>
                                                <li><a href="about" style="color:#49C2B7">About Us</a></li>
                                                <li><a href="greenTips">GreenLiving Tips</a></li>
                                                <li><a href="educational">Educational Resources</a></li>
                                                <li><a style="cursor: pointer;">Community</a>
                                                    <ul class="submenu">
                                                        
                                                        <li><a href="forums">Forums</a></li>
                                                        <li><a href="eventcalendar">Event Calendar</a></li>
                                                        <li><a href="partnership">Partnership & Collaboration</a></li>
                                                        <li><a href="newsandupdates">News & Updates</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="login">Login</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- Header-btn -->
                                    <div class="header-right-btn d-none d-lg-block ml-20">
                                    <a href="eventcalendar" class="btn header-btn">Join Events</a>
                                    </div>
                                </div>
                            </div> 
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-70" style="justify-content: center;text-align: center;">
                                <h2  style="font-family: 'Poppins';">About Us</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb"  style="justify-content: center;text-align: center;">
                                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                                        <li class="breadcrumb-item"><a href="about">About Us</a></li> 
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Visit Our Tailor Start -->
        <div class="visit-tailor-area fix">
            <!--Right Contents  -->
            <div class="tailor-offers"></div>
            <!-- left Contents -->
            <div class="tailor-details">
                <span>GreenSpace: Where Passion Meets Purpose</span>
                <h2  style="font-family: 'Poppins';">In here, we're planting hope for a greener tomorrow.</h2>
                <p  style="font-family: 'Poppins';">At GreenSpace, we believe in the power of collective action to drive positive change. Our journey began with a simple yet profound realization: the urgent need to safeguard our planet's forests. With deforestation rates soaring and the impacts of climate change becoming increasingly evident, we knew that action couldn't wait.
<br> 
<br>
Founded by a group of dedicated environmentalists, GreenSpace is a platform built on a shared commitment to reforestation, afforestation, and forest conservation. Our team brings together diverse expertise, from forestry and conservation biology to community outreach and technology.
                    
<br> 
<br>
But GreenSpace is more than just an organization – it's a movement. We're driven by a deep love for nature and a profound sense of responsibility to future generations. Our work is guided by principles of sustainability, equity, and respect for all life forms.
                    <br> 
<br>
Through collaboration with local communities, governments, NGOs, and corporate partners, we're making strides towards our vision of a world where forests thrive and flourish. From planting trees in deforested areas to advocating for stronger environmental policies, every action we take is rooted in science, empathy, and a belief in the power of possibility.
                    
Join us on this journey to protect and restore the lungs of our planet. 
<br> <br> Together, we can make a difference that reverberates far beyond the bounds of our individual efforts. Welcome to GreenSpace – where passion meets purpose, and where every tree planted is a testament to our collective commitment to a greener, healthier world.</p>
                <p class="pera-bottom"></p>
                <div class="footer-tittles">
                    <p> </p>
                    <h2></h2>
                </div>
            </div>
        </div>
        <!-- Visit Our Tailor End -->
        <!--? Services Area Start -->
        <div class="service-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-11">
                        <div class="single-cat text-center mb-30">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/Reforestation.jpg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#"  style="font-family: 'Poppins';">Reforestation</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-11">
                        <div class="single-cat text-center mb-30">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/Afforestation.jpg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#"  style="font-family: 'Poppins';">Afforestation</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-11">
                        <div class="single-cat text-center mb-30">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/Conservation.jpg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#"  style="font-family: 'Poppins';">Conservation</a></h5>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Services Area End -->
        <!--? About Area Start -->
        <section class="support-company-area fix pb-padding">
            <div class="support-wrapper align-items-center">
                <div class="left-content">
                    <!-- section tittle -->
                    <div class="section-tittle section-tittle2 mb-30">
                        <span>Why You Should join us</span>
                        <h2  style="font-family: 'Poppins';">Many forests need protection!</h2>
                    </div>
                    <div class="support-caption">
                        <p class="pera-top"  style="font-family: 'Poppins';">Forests are essential habitats for countless species, and they face numerous threats. Join us to make a difference.</p>
                        
                        <a href="eventcalendar" class="btn header-btn">Join Us Now</a>
                    </div>
                </div>
                <div class="right-content">
                    <!-- img -->
                    <div class="right-img">
                        <img src="assets/img/gallery/boy hugging big tree.jpg" alt="">
                    </div>
                    <div class="support-img-cap text-center d-flex"> 
                        <div class="single-one">
                            <span>378+</span>
                            <p  style="font-family: 'Poppins';">Planting Partners</p>
                        </div>
                        <div class="single-two">
                            <span>230</span>
                            <p  style="font-family: 'Poppins';">Volunteers worldwide</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
    </main>
    <footer>
        <div class="footer-wrapper">
            <!-- Footer Start-->
            <div class="footer-area footer-padding">
                <div class="container ">
                    <div class="row justify-content-between">
                        <div class="col-xl-4 col-lg-3 col-md-8 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo mb-20">
                                        <a href="index"><img src="assets/img/logo/newlogo.jpg" alt="" style="width: 100px; height: 100px; margin-left: 75px;"></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p style="font-family: 'Poppins';">Let's make the world greener together!
                                            </p>
                                        </div>
                                    </div>
                                    <!-- social -->
                                    <div class="footer-social" style="margin-left: 55px;">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4">
                            <div class="single-footer-caption mt-0px">
                                <div class="footer-tittle">
                                    <h4 style="font-family: 'Poppins';">Our solutions</h4>
                                    <ul>
                                        <li><a href="#">Design & creatives</a></li>
                                        <li><a href="#">Telecommunication</a></li>
                                        <li><a href="#">Restaurant</a></li>
                                        <li><a href="#">Programing</a></li>
                                        <li><a href="#">Architecture</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4 style="font-family: 'Poppins';">Company</h4>
                                    <ul>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Review</a></li>
                                        <li><a href="#">Insights</a></li>
                                        <li><a href="#">Carrier</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4 style="font-family: 'Poppins';">Contact us</h4>
                                    <ul>
                                        <li><a href="#">consulto98@gmail.com</a></li>
                                        <li><a href="#">76/A, Green road, NYC</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li class="number"><a href="#">(80) 783 367-3904</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-bottom: 0px;height: 10px; background: transparent;text-align: center;color: white; margin-top: 80px">
                    <p style="color: white;font-family: 'Poppins', sans-serif;">Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> All rights reserved by GreenSpace.
                    </p>
                </div>
            </div>

        </div>
    </footer>
      <!-- Scroll Up -->
      <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="./assets/js/jquery.barfiller.js"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    
</body>
</html>