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
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            font-family: 'Poppins'
        }

        body {
            font-family: 'Poppins'
        }

        html {
            font-family: 'Poppins'
        }
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
                                                <li><a href="index" style="color:#49C2B7">Home</a></li>
                                                <li><a href="about">About Us</a></li>
                                                <li><a href="greenTips">GreenLiving Tips</a></li>
                                                <li><a href="Educational">Educational Resources</a></li>
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
        <!-- slider Area Start-->
        <div class="slider-area position-relative">
            <div class="slider-active dot-style">
                <!-- Single Slider -->
                <div class="single-slider hero-overly slider-height slider-bg1 d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".2s" style="font-family: 'Poppins';">Did
                                        You Know?</h1>
                                    <P data-animation="fadeInUp" data-delay=".4s" style="font-family: 'Poppins';">
                                        Deforestation kills 15 billion trees each year.<br> Stop deforestation. </P>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn">
                                        <a href="eventcalendar" class="hero-btn mb-10" data-animation="fadeInUp" data-delay=".8s">Join Us Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider hero-overly slider-height slider-bg1 d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".2s" style="font-family: 'Poppins';">How
                                        about this?</h1>
                                    <P data-animation="fadeInUp" data-delay=".4s" style="font-family: 'Poppins';">A tree
                                        can absorb up to 48 lbs of carbon dioxide a year. Plant a tree.<br> Reduce
                                        global warming. </P>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn">
                                        <a href="eventcalendar" class="hero-btn mb-10" data-animation="fadeInUp" data-delay=".8s">Join Us Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider hero-overly slider-height slider-bg1 d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".2s" style="font-family: 'Poppins';">Fun
                                        Fact</h1>
                                    <P data-animation="fadeInUp" data-delay=".4s" style="font-family: 'Poppins';">
                                        Planting one tree in an open field can increase bird biodiversity from zero to
                                        80.<br> </P>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn">
                                        <a href="eventcalendar" class="hero-btn mb-10" data-animation="fadeInUp" data-delay=".8s">Join Us Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--? video_start -->
            <div class="video-area d-flex align-items-center justify-content-center">
                <div class="video-wrap position-relative">
                    <div class="video-icon">
                        <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=7nUnGhwR6jM"><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
            <!-- video_end -->

        </div>
        <!-- slider Area End-->
        <!--? Visit Our Tailor Start -->
        <div class="visit-tailor-area fix">
            <!--Right Contents  -->
            <div class="tailor-offers"></div>
            <!-- left Contents -->
            <div class="tailor-details">
                <span>Welcome to GreenSpace</span>
                <h2 style="font-family: 'Poppins';">GreenSpace: Your gateway to a greener world</h2>
                <p style="font-family: 'Poppins';">We're dedicated to preserving and expanding community forests,
                    combating deforestation, wildfires, and climate change. Join us in protecting and restoring our
                    planet's vital ecosystems.
                    <!--<br> 
<br>
Our mission is simple yet profound: to protect and restore the world's forests, ensuring they thrive for generations to come. With a focus on reforestation, afforestation, and forest conservation, we leverage innovative strategies and collaborative efforts to make a meaningful impact on a global scale.
                    
<br> 
<br>
At the heart of our work lies a deep respect for nature and a recognition of the interconnectedness between all living beings. We believe that by safeguarding forests, we not only preserve essential habitats for wildlife but also secure clean air, fresh water, and a stable climate for humanity.
                    
                    Driven by this belief, we are committed to transparency, accountability, and inclusivity in all aspects of our operations. 
                    <br> 
<br>
We collaborate with diverse stakeholders, including local communities, governments, NGOs, and corporate partners, to develop holistic solutions that address the complex challenges facing our planet.
                    
                    As stewards of the Earth, we invite you to join us on this journey of conservation and renewal. Together, let's make a difference and leave a legacy of sustainability for future generations.</p>
                <p class="pera-bottom">-->
                </p>
            </div>
        </div>
        </div>
        <!-- Visit Our Tailor End -->
        <!--? Services Area Start -->
        <!--<div class="service-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-11">
                        <div class="single-cat text-center mb-30">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/Reforestation.jpg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Reforestation</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-11">
                        <div class="single-cat active text-center mb-30">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/Afforestation.jpg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Afforestation</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-11">
                        <div class="single-cat text-center mb-30">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/Conservation.jpg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Conservation</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- Services Area End -->
        <!--? About Area Start -->
        <!--<section class="support-company-area fix pt-10">
            <div class="support-wrapper align-items-center">
                <div class="left-content">-->
        <!-- section tittle -->
        <!--<div class="section-tittle section-tittle2 mb-30">
                        <span>Why You Should join us</span>
                        <h2>Many forests need protection</h2>
                    </div>
                    <div class="support-caption">
                        <p class="pera-top">Forests are essential habitats for countless species, and they face numerous threats. Join us to make a difference.</p>
                        <a href="#" class="border-btn">Join Us Now</a>
                    </div>
                </div>
                <div class="right-content">-->
        <!-- img -->
        <!--<div class="right-img">
                        <img src="assets/img/gallery/boy hugging big tree.jpg" alt="">
                    </div>
                    <div class="support-img-cap text-center d-flex">
                        <div class="single-one">
                            <span>378+</span>
                            <p>Planting Partners</p>
                        </div>
                        <div class="single-two">
                            <span>230</span>
                            <p>Volunteers worldwide</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!-- About Area End -->
        <!--? Our Cases Start -->
        <!--<div class="our-cases-area section-padding30">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-10 ">-->
        <!-- Section Tittle -->
        <!--<div class="section-tittle text-center mb-80">
                            <h2>Every day, 6000 hectares of forest vanish</h2>
                            <p class="pl-20 pr-20">

                                Yet, there's hope. We're dedicated to conservation efforts.
                                
                                Join us in our mission to protect these vital ecosystems.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cases mb-40">
                            <div class="cases-img">
                                <img src="assets/img/gallery/reforestationimage.jpg" alt="">
                            </div>
                            <div class="cases-caption">
                                <h3><a href="#">Reforestation Initiative</a></h3>
                                <p>aims to restore degraded areas and enhance biodiversity by organizing tree planting projects. Partnering with local communities, schools, and businesses, we mobilize volunteers to plant trees and raise awareness about the importance of reforestation. By replanting trees in areas that have been cleared or damaged, we contribute to the restoration of forest cover and the preservation of vital ecosystems for future generations.</p>-->
        <!-- Progress Bar -->
        <!--<div class="single-skill mb-15">
                                    <div class="bar-progress">
                                        <div id="bar1" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="70"></span>
                                        </div>
                                    </div>
                                </div>-->
        <!-- / progress -->
        <!--<div class="prices">
                                    <p><span>47,589 of 74,574</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cases mb-40">
                            <div class="cases-img">
                                <img src="assets/img/gallery/forestconservationprogram.jpg" alt="">
                            </div>
                            <div class="cases-caption">
                                <h3><a href="#">Forest Conservation</a></h3>
                                <p>dedicated to protecting existing forests from threats such as deforestation, habitat destruction, and illegal logging. Through habitat assessments, wildlife monitoring, and anti-poaching patrols, we work to safeguard forest ecosystems and the species that depend on them. By implementing measures to address these threats, we aim to ensure the long-term health and resilience of forest habitats.</p>-->
        <!-- Progress Bar -->
        <!--<div class="single-skill mb-15">
                                    <div class="bar-progress">
                                        <div id="bar2" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="25"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="prices">
                                    <p><span>47,589 of 74,574</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cases">
                            <div class="cases-img">
                                <img src="assets/img/gallery/environmental-education.jpg" alt="">
                            </div>
                            <div class="cases-caption">
                                <h3><a href="#">Environmental Education</a></h3>
                                <p>aims to raise awareness about forest conservation and inspire action among students, teachers, and community members. We develop educational materials, workshops, and interactive activities to engage participants in learning about the importance of forests and their role in sustaining life on Earth. Through field trips to local forests and nature reserves, we provide hands-on learning experiences that foster a deeper connection to nature and a commitment to conservation.</p>-->
        <!-- Progress Bar -->
        <!--<div class="single-skill mb-15">
                                    <div class="bar-progress">
                                        <div id="bar3" class="barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div>
                                            <span class="fill" data-percentage="50"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="prices">
                                    <p><span>47,589 of 74,574</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->

        <section class="home-blog-area pb-padding">
            <div class="container">
                <!-- Section Title -->
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9 col-md-11">
                        <div class="section-tittle text-center mb-90 mt-40">
                            <h2 style="margin:0px; font-family: 'Poppins';">Latest News and Updates</h2>
                            <span>Bringing to you the updates and events involving the community.</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- News Placeholder -->
                    <!-- News items will be dynamically inserted here -->
                    <?php
                    // Include your PHP code to fetch and display news details here
                    include './admin/fetch-news.php';
                    ?>
                </div>
            </div>
        </section>

        <!-- Blog Area End -->

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
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved by GreenSpace.
                    </p>
                </div>
            </div>

        </div>
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
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