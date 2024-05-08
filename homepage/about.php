<?php
session_start();
include 'db.php';


$myemail = $_SESSION['user_email']; // Assign the value of $_SESSION['user_email'] to $myemail

// Query the database to retrieve the full name of the logged-in team leader
$query = "SELECT user_img, user_name, user_email, status,  user_ID, password FROM user WHERE user_email = '$myemail' or user_name = '$myemail'";
$result = mysqli_query($con, $query);



if ($result) {

    // Fetch the row from the result
    $row = mysqli_fetch_assoc($result);
    $status = $row['status'];
        if ($status == 'Suspended') {
            echo "<script>alert('Your account is suspended temporarily. Please contact us for assistance.');</script>";
            echo "<script>window.location.href = 'logout.php';</script>";
            exit; // Optional: Exit to prevent further execution
        }
    $user_img = $row['user_img'];
    $user_name = $row['user_name'];
    $user_email = $row['user_email'];
    $user_ID = $row['user_ID'];
    $password = $row['password'];
} else {
    echo "Error: " . mysqli_error($con);
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
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.css">
    <link rel="stylesheet" href="../assets/css/flaticon.css">
    <link rel="stylesheet" href="../assets/css/progressbar_barfiller.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/gijgo.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/animated-headline.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/slick.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/style.css">


    <style type="text/css">
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

<!-- CSS for Partner Section -->
<style>
    .partner {
      display: hidden;
      flex-direction: column;
      align-items: center;
      margin-bottom: 20px;
      /* Space between partners */
      cursor: pointer;
      /* Change cursor to pointer on hover */
      background-color: white;
      padding: 50px 0;
      text-align: center;
      position: relative;
      /* Add relative positioning for absolute positioning of description */
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 15px;
    }

    .partner-logos {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      gap: 0px;
    }

    .partner-logo {
      width: 200px;
      /* Adjust as needed */
      height: 200px;
      /* Adjust as needed */
      display: flex;
      align-items: center;
      justify-content: center;
      border: 0px solid #e0e0e0;
      border-radius: 5px;
      overflow: hidden;
      position: relative;
      /* Add relative positioning for absolute positioning of description */
    }

    .partner-logo img {
      max-width: 60%;
      max-height: 60%;
      object-fit: contain;
      transition: transform 0.3s ease, opacity 0.3s ease;
    }

    .partner-logo:hover img {
      transform: scale(1.1);
      /* Scale the image by 10% */
      opacity: 0.8;
      /* Reduce opacity to 80% */
    }

    .image-container {
      position: relative;
      cursor: pointer;
    }

    .partner-desc {
      font-size: 16px;
      text-align: center;
      display: none;
      /* Initially hide the description */
      position: absolute;
      /* Position description absolutely */
      background-color: rgba(255, 255, 255, 0.9);
      padding: 10px;
      font-family: 'Georgia', serif;
      overflow: hidden;
      max-width: 100%;
      /* Set a maximum height for short description */
    }

    .partner-desc.show {
      display: block;
    }

    .more-text {
      color: green;
      cursor: pointer;
      text-decoration: underline;
      font-family: 'Georgia', serif
    }

    .full-description {
      display: none;
      /* Initially hide the full description */
      margin-top: 10px;
      font-family: 'Georgia', serif;
      max-height: auto;
      transition: 0.3s ease-out;
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
                    <img src="../assets/img/logo/newlogo.jpg" alt="">
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
                                    <a href="index"><img src="../assets/img/logo/greenlogo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                   <div class="main-menu d-none d-lg-block">
                                        <nav>
                                                                                                                                    
                                            <ul id="navigation">
                                                <li><a href="index">Home</a></li>
                                                <li><a href="about" style="color:#49b2c7">About Us</a></li>
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
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- Header-btn -->
                                    <div class="header-right-btn d-none d-lg-block ml-20">
                                        <a href="logout" class="btn header-btn">Logout</a>
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
                            <div class="hero-cap hero-cap2 pt-70" style="justify-content: center; text-align: center;">
                                <h2 style="font-family: 'Poppins';">About Us</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb" style="justify-content: center; text-align: center;">
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
                <h2 style="font-family: 'Poppins';">In here, we're planting hope for a greener tomorrow.</h2>
                <p style="font-family: 'Poppins';">At GreenSpace, we believe in the power of collective action to drive
                    positive change. Our journey began with a simple yet profound realization: the urgent need to
                    safeguard our planet's forests. With deforestation rates soaring and the impacts of climate change
                    becoming increasingly evident, we knew that action couldn't wait.
                    <br>
                    <br>
                    Founded by a group of dedicated environmentalists, GreenSpace is a platform built on a shared
                    commitment to reforestation, afforestation, and forest conservation. Our team brings together
                    diverse expertise, from forestry and conservation biology to community outreach and technology.

                    <br>
                    <br>
                    But GreenSpace is more than just an organization – it's a movement. We're driven by a deep love for
                    nature and a profound sense of responsibility to future generations. Our work is guided by
                    principles of sustainability, equity, and respect for all life forms.
                    <br>
                    <br>
                    Through collaboration with local communities, governments, NGOs, and corporate partners, we're
                    making strides towards our vision of a world where forests thrive and flourish. From planting trees
                    in deforested areas to advocating for stronger environmental policies, every action we take is
                    rooted in science, empathy, and a belief in the power of possibility.

                    Join us on this journey to protect and restore the lungs of our planet.
                    <br> <br> Together, we can make a difference that reverberates far beyond the bounds of our
                    individual efforts. Welcome to GreenSpace – where passion meets purpose, and where every tree
                    planted is a testament to our collective commitment to a greener, healthier world.
                </p>
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
                                <img src="../assets/img/gallery/Reforestation.jpg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#"
                                        style="font-family: 'Poppins';">Reforestation</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-11">
                        <div class="single-cat text-center mb-30">
                            <div class="cat-icon">
                                <img src="../assets/img/gallery/Afforestation.jpg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#"
                                        style="font-family: 'Poppins';">Afforestation</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-11">
                        <div class="single-cat text-center mb-30">
                            <div class="cat-icon">
                                <img src="../assets/img/gallery/Conservation.jpg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#"
                                        style="font-family: 'Poppins';">Conservation</a></h5>
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
                        <h2 style="font-family: 'Poppins';">Many forests need protection!</h2>
                    </div>
                    <div class="support-caption">
                        <p class="pera-top" style="font-family: 'Poppins';">Forests are essential habitats for countless
                            species, and they face numerous threats. Join us to make a difference.</p>
                        <a href="eventcalendar" class="border-btn">Join Us Now</a>
                    </div>
                </div>
                <div class="right-content">
                    <!-- img -->
                    <div class="right-img">
                        <img src="../assets/img/gallery/boy hugging big tree.jpg" alt="">
                    </div>
                    <div class="support-img-cap text-center d-flex">
                        <div class="single-one">
                            <span>378+</span>
                            <p style="font-family: 'Poppins';">Planting Partners</p>
                        </div>
                        <div class="single-two">
                            <span>230</span>
                            <p style="font-family: 'Poppins';">Volunteers worldwide</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
    </main>
    <footer>

    <div style="margin:50px 0px;"></div>
    <h1 style="text-align: center;font-family: 'Poppins';font-size: 2em;">Our Partners</h1>

    <section class="partner">
      <div class="container">
        <div class="image-container">
          <div class="partner-logos">
            <div class="partner-logo">
              <img src="https://climate-wise.com/wp-content/uploads/2023/08/Eden_LogoV_RGB.jpg" alt="Description"
                class="show-description">
              <div class="partner-desc"><b>Eden Reforestation Projects</b> is a nonprofit NGO that works in developing
                countries to rebuild natural landscapes destroyed by deforestation.</div>
            </div>
            <div class="partner-logo">
              <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWqUu8lPs7rrcRh-zPDqOhF5Odtj1XnCMmBcMh-Ry7Vw&s"
                alt="Description" class="show-description">
              <div class="partner-desc"><b>Forest for the Future</b> is a non-profit association intended to promote
                the protection, valorisation and conservation of primary forests.</div>
            </div>
            <div class="partner-logo">
              <img
                src="https://images.squarespace-cdn.com/content/v1/5f9323e965b0950d66514484/1613922114948-EVR8HYA44QI2GJHXAW1T/PE-Brand-Toolkit.png"
                alt="Description" class="show-description">
              <div class="partner-desc"><b>Protect Earth</b> is a registered charity in England and Wales that aims to
                plant, and help people plant, as many trees as possible in the UK to help mitigate the climate crisis.
              </div>
            </div>
            <div class="partner-logo">
              <img
                src="https://cdn.shopify.com/s/files/1/0326/7189/files/onetreeplanted-logo-square_5a86a431-c201-42e4-a6a5-95f7b5a431f2.png?v=1668780964"
                alt="Description" class="show-description">
              <div class="partner-desc"><b>One Tree Planted</b> is a nonprofit organization focused on global
                reforestation, create habitat for biodiversity, and make a positive social impact around the world.
              </div>
            </div>
            <div class="partner-logo">
              <img src="https://trees.org/wp-content/uploads/2023/04/image.png" alt="Description"
                class="show-description">
              <div class="partner-desc"><b>Trees for the Future</b> is a nonprofit organization that provides
                smallholder farmers with pathways out of poverty and hunger by planting trees in forest gardens around
                the world.</div>
            </div>
            <div class="partner-logo">
              <img
                src="https://cdn.filestackcontent.com/resize=width:600,height:315,fit:max/quality=value:90/tmQEApQS4qpzl3TCQ9Fg"
                alt="Description" class="show-description">
              <div class="partner-desc"><b>Global Forest Generation</b> unites local leaders and their communities
                across national borders to bring lost and degraded forest ecosystems back to life.</div>
            </div>
            <div class="partner-logo">
              <img
                src="https://images.squarespace-cdn.com/content/v1/6197abe80515bc685501422b/bb053c0a-ee44-4b54-a6cb-2794b00481c6/ITF_Logo_Primary_RGB%402x.png"
                alt="Description" class="show-description">
              <div class="partner-desc"><b>International Tree Foundation</b> is a nonprofit organization inspiring
                communities to plant, protect and promote trees for the benefit of people and planet.</div>
            </div>
            <div class="partner-logo">
              <img src="https://www.peacecorpsconnect.org/wp-content/uploads/2024/02/400x400fPNG-19.png"
                alt="Description" class="show-description">
              <div class="partner-desc"><b>High Atlas Foundation</b> promotes community-designed initiatives for
                sustainable agriculture, women’s and youth empowerment, education, health, and capacity-building.
              </div>
            </div>
            <div class="partner-logo">
              <img src="https://www.hommesetterre.com/wp-content/uploads/2021/04/Global_RGB.png" alt="Description"
                class="show-description">
              <div class="partner-desc"><b>Hommes et Terre</b> missions to develop and carry out restoration of
                degraded land, ensuring that communities have sustainable access to fertile land.</div>
            </div>
            <div class="partner-logo">
              <img
                src="https://ebacoy2g8cy.exactdn.com/wp-content/uploads/2020/12/WF_Logo-color.png?strip=all&lossy=1&ssl=1"
                alt="Description" class="show-description">
              <div class="partner-desc"><b>WeForest</b> is a non-profit organisation that restores and conserves
                forests at the landscape level – with the aim of maximising the impact of trees for People, Nature,
                and Climate.</div>
            </div>
            <!-- Add more partner logos here -->
          </div>
        </div>
      </div>
    </section>


    <div class="footer-wrapper">
      <!-- Footer Start-->


      <div class="Wrapper_wrapper__TlrIR"
        style="margin: auto;justify-content: center;align-content: center;align-items: center; display: flex; flex-direction: column; width: 100%; height: auto;">
      </div>
      <div style="margin:0px 0px;height: 80px; background: white;"></div>



      <div class="css-1rnbtew">
        <div>
          <div
            style="background-image:url(https://offsetearth.imgix.net/app/uploads/20220316113625/Blog_Reforestation_Partners_Header_01.jpg?w=2000&amp;auto=format&amp;h=1000)"
            title="" class="css-pxmcit">
          </div>
        </div>

      </div>




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
                                        <li><a style="font-family: 'Poppins';" href="#">Design & creatives</a></li>
                                        <li><a style="font-family: 'Poppins';" href="#">Telecommunication</a></li>
                                        <li><a style="font-family: 'Poppins';" href="#">Restaurant</a></li>
                                        <li><a style="font-family: 'Poppins';" href="#">Programing</a></li>
                                        <li><a style="font-family: 'Poppins';" href="#">Architecture</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4 style="font-family: 'Poppins';">Company</h4>
                                    <ul>
                                        <li><a style="font-family: 'Poppins';" href="#">About</a></li>
                                        <li><a style="font-family: 'Poppins';" href="#">Review</a></li>
                                        <li><a style="font-family: 'Poppins';" href="#">Insights</a></li>
                                        <li><a style="font-family: 'Poppins';" href="#">Carrier</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4 style="font-family: 'Poppins';">Contact us</h4>
                                    <ul>
                                        <li><a style="font-family: 'Poppins';" href="#">consulto98@gmail.com</a></li>
                                        <li><a style="font-family: 'Poppins';" href="#">76/A, Green road, NYC</a></li>
                                        <li><a style="font-family: 'Poppins';" href="#">Privacy Policy</a></li>
                                        <li class="number"><a style="font-family: 'Poppins';" href="#">(80) 783 367-3904</a></li>
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
  <div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
  </div>

    <!-- JS here -->

    <script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="../assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/animated.headline.js"></script>
    <script src="../assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="../assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="../assets/js/jquery.nice-select.min.js"></script>
    <script src="../assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="../assets/js/jquery.barfiller.js"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/waypoints.min.js"></script>
    <script src="../assets/js/jquery.countdown.min.js"></script>
    <script src="../assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="../assets/js/contact.js"></script>
    <script src="../assets/js/jquery.form.js"></script>
    <script src="../assets/js/jquery.validate.min.js"></script>
    <script src="../assets/js/mail-script.js"></script>
    <script src="../assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>


    <script>
    document.addEventListener('DOMContentLoaded', function () {
      const images = document.querySelectorAll('.show-description');
      const descriptions = document.querySelectorAll('.partner-desc');

      images.forEach(function (img) {
        img.addEventListener('click', function (event) {
          const description = this.nextElementSibling;

          // Toggle description visibility
          if (description.style.display === 'none' || description.style.display === '') {
            description.style.display = 'block';
          } else {
            description.style.display = 'none';
          }

          // Close other descriptions
          const otherDescriptions = document.querySelectorAll('.partner-desc');
          otherDescriptions.forEach(function (desc) {
            if (desc !== description && desc.style.display === 'block') {
              desc.style.display = 'none';
            }
          });

          // Stop event propagation to prevent closing all descriptions
          event.stopPropagation();
        });
        // Stop event propagation to prevent description toggle
        event.stopPropagation();
      });

      // Close description when hovering over another image
      img.addEventListener('mouseover', function () {
        // Close all descriptions
        descriptions.forEach(function (desc) {
          desc.style.display = 'none';
        });
      });
    });

    // Close all descriptions when clicking anywhere outside of the images
    document.addEventListener('click', function () {
      const descriptions = document.querySelectorAll('.partner-desc');
      descriptions.forEach(function (desc) {
        desc.style.display = 'none';
      });
    });


    $(document).ready(function () {
      $('.partners').click(function () {

        // Hide all descriptions
        $('.partner-desc').hide();

        // Show description for clicked partner
        $(this).find('.partner-desc').show();
      });
    });


  </script>

</body>

</html>