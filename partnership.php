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
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

  <!-- CSS here -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/slicknav.css">
  <link rel="stylesheet" href="assets/css/animate.min.css">
  <link rel="stylesheet" href="assets/css/hamburgers.min.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
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
  <!--? Preloader Start -->
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
                        <li><a href="about">About Us</a></li>
                        <li><a href="greenTips">GreenLiving Tips</a></li>
                        <li><a href="Educational">Educational Resources</a></li>
                        <li><a  style="color:#49C2B7">Community</a>

                          <ul class="submenu">
                            <li><a href="forums">Forums</a></li>
                            <li><a href="eventcalendar">Event Calendar</a></li>
                            <li><a href="partnership"style="color:#49C2B7">Partnership & Collaboration</a></li>
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

  <!--? Hero Start -->
  <div class="slider-area2">
    <div class="slider-height2 d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="hero-cap hero-cap2 pt-70" style="justify-content: center;text-align: center;">
              <h2>Partnership and Collaborations</h2>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="justify-content: center;text-align: center;">
                  <li class="breadcrumb-item"><a href="index">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Partnership & Collaborations</a></li>
                  <!-- <li class="breadcrumb-item"><a href="eventcalendar">Join Events</a></li> -->
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Hero End -->
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