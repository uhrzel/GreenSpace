<?php
include 'db.php'; // Include database connection file

// Query for 'General Discussion'
$sql1 = "SELECT COUNT(*) AS category_count FROM allforums WHERE category = 'General Discussion' AND (replyTo IS NULL OR replyTo = '')";
$result1 = mysqli_query($con, $sql1);
$row1 = mysqli_fetch_assoc($result1);
$categoryCount1 = $row1['category_count'];

// Query for 'Green Initiatives'
$sql2 = "SELECT COUNT(*) AS category_count FROM allforums WHERE category = 'Green Initiatives' AND (replyTo IS NULL OR replyTo = '')";
$result2 = mysqli_query($con, $sql2);
$row2 = mysqli_fetch_assoc($result2);
$categoryCount2 = $row2['category_count'];

// Query for 'Tips & Tricks'
$sql3 = "SELECT COUNT(*) AS category_count FROM allforums WHERE category = 'Tips & Tricks' AND (replyTo IS NULL OR replyTo = '')";
$result3 = mysqli_query($con, $sql3);
$row3 = mysqli_fetch_assoc($result3);
$categoryCount3 = $row3['category_count'];

// Query for 'Green Technology'
$sql4 = "SELECT COUNT(*) AS category_count FROM allforums WHERE category = 'Green Technology' AND (replyTo IS NULL OR replyTo = '')";
$result4 = mysqli_query($con, $sql4);
$row4 = mysqli_fetch_assoc($result4);
$categoryCount4 = $row4['category_count'];

// Query for 'Gardening & Agriculture'
$sql5 = "SELECT COUNT(*) AS category_count FROM allforums WHERE category = 'Gardening & Agriculture' AND (replyTo IS NULL OR replyTo = '')";
$result5 = mysqli_query($con, $sql5);
$row5 = mysqli_fetch_assoc($result5);
$categoryCount5 = $row5['category_count'];

// Query for 'Wildlife Conservation'
$sql6 = "SELECT COUNT(*) AS category_count FROM allforums WHERE category = 'Wildlife Conservation' AND (replyTo IS NULL OR replyTo = '')";
$result6 = mysqli_query($con, $sql6);
$row6 = mysqli_fetch_assoc($result6);
$categoryCount6 = $row6['category_count'];

// Query for 'Climate Change & Policy'
$sql7 = "SELECT COUNT(*) AS category_count FROM allforums WHERE category = 'Climate Change & Policy' AND (replyTo IS NULL OR replyTo = '')";
$result7 = mysqli_query($con, $sql7);
$row7 = mysqli_fetch_assoc($result7);
$categoryCount7 = $row7['category_count'];

// Query for 'Green Travel'
$sql8 = "SELECT COUNT(*) AS category_count FROM allforums WHERE category = 'Green Travel' AND (replyTo IS NULL OR replyTo = '')";
$result8 = mysqli_query($con, $sql8);
$row8 = mysqli_fetch_assoc($result8);
$categoryCount8 = $row8['category_count'];

// Query for 'Community & Events'
$sql9 = "SELECT COUNT(*) AS category_count FROM allforums WHERE category = 'Community & Events' AND (replyTo IS NULL OR replyTo = '')";
$result9 = mysqli_query($con, $sql9);
$row9 = mysqli_fetch_assoc($result9);
$categoryCount9 = $row9['category_count'];

// Query for 'Seek Advice'
$sql10 = "SELECT COUNT(*) AS category_count FROM allforums WHERE category = 'Seek Advice' AND (replyTo IS NULL OR replyTo = '')";
$result10 = mysqli_query($con, $sql10);
$row10 = mysqli_fetch_assoc($result10);
$categoryCount10 = $row10['category_count'];


// Close the database connection
mysqli_close($con);
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <style>

        * { font-family: 'Poppins' }
        /* Center modal */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Position it absolutely within its containing element */
            z-index: 9999; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto; /* Enable scroll if needed */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            display: flex;
            justify-content: center;
            align-items: center;
        }
    
        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Adjust width as needed */
        }
    
        /* Close button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
    
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
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
                                                <li><a href="index">Home</a></li>
                                                <li><a href="about">About Us</a></li>
                                                <li><a href="greenTips">GreenLiving Tips</a></li>
                                                <li><a href="educational">Educational Resources</a></li>
                                                <li><a   style="color:#49C2B7">Community</a>
                                                    <ul class="submenu">

                                                        <li><a href="forums" style="color:#49C2B7">Forums</a></li>
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
        <div class="slider-area2" style="background-image: url('assets/images/forums.png'); background-position:center; ">
            
            <div class="slider-height2 d-flex align-items-center">
               
              
            </div>
        </div>
        <!-- Hero End -->
        <!--? Our Cases Start -->
 
    
        

                <!-- Display fetched educational resources -->
       
    </main>
   
<style>
    
    .cases-img { height:200px; width:100%; }
    .cases-img img { margin:0px; height:100%; width:100% }
    .truncate {
display: -webkit-box;
  -webkit-box-orient: vertical;
  overflow: hidden;
  -webkit-line-clamp: 8; 
  font-family: 'Poppins'
}

</style>


    <main>  
     
        <div style="margin: 50px auto; text-align: left; font-family:'Poppins'; max-width: 700px; width: 90%;">

   <!--   <div style="font-family:'Poppins'; text-align: left;  font-size:1.2em; font-weight: normal;"><?php echo $row['content']; ?></div >
     <br>
      <div style="font-family:'Poppins'; font-size:1.2em; font-weight: normal;">From: <?php echo $user_name; ?></div >
      <div style="font-family:'Poppins'; font-size:1.2em; font-weight: normal;">When: <?php echo $date_posted; ?></div >
 -->
 <!--     <div class="col-lg-12 text-center mb-4" style="margin-top: 20px;">
    <button class="btn btn-primary" id="shareButton">Share</button>
</div> -->


        
        </div>
    
    </main>

    <style>
    
    .cases-img { height:200px; width:100%; }
    .cases-img img { margin:0px; height:100%; width:100% }
    .truncate {
display: -webkit-box;
  -webkit-box-orient: vertical;
  overflow: hidden;
  -webkit-line-clamp: 8; 
}

.catflex { margin:auto; margin-bottom: 40px; display:flex; max-width:1500px; width:90%; flex-wrap:wrap; justify-content:center; }
.catcon { margin:10px; height:250px; width:450px; background:#FCFBEB; cursor:pointer; border:5px solid transparent; position: relative;}
.catcon img { margin:0px; height:100%; width:100%; }

.catconbtn { 
    position: absolute;
    left: 15px;
    bottom: 20px;
    padding: 5px 10px; 
    background-color: #00FF6E;
    font-size: 15px;
    color: #19181a;
    font-weight: 500;
    border-radius: 5px


 }

.catcon:hover { border:5px solid #00FF6E; }


@media only screen and (max-width: 767px) {
    /* Styles for mobile devices */
    .catcon { height:200px }
}

</style>


    <main>  


            <div style="font-size: 2em; text-align: center;margin-bottom: 10px;">Forum Categories</div>  

<div class="catflex">
    <a href="forums_topics.php?category=General Discussion&img=assets/images/ForumCat/1.png" class="catcon">
        <img src="assets/images/ForumCat/1.png">
        <div class="catconbtn"><?php echo $categoryCount1; ?> Topics</div>
    </a>
    <a href="forums_topics.php?category=Green Initiatives&img=assets/images/ForumCat/2.png" class="catcon">
        <img src="assets/images/ForumCat/2.png">
        <div class="catconbtn"><?php echo $categoryCount2; ?> Topics</div>
    </a>
    <a href="forums_topics.php?category=Tips%20%26%20Tricks&img=assets/images/ForumCat/3.png" class="catcon">
        <img src="assets/images/ForumCat/3.png">
        <div class="catconbtn"><?php echo $categoryCount3; ?> Topics</div>
    </a>
    <a href="forums_topics.php?category=Green Technology&img=assets/images/ForumCat/4.png" class="catcon">
        <img src="assets/images/ForumCat/4.png">
        <div class="catconbtn"><?php echo $categoryCount4; ?> Topics</div>
    </a>
    <a href="forums_topics.php?category=Gardening%20%26%20Agriculture&img=assets/images/ForumCat/5.png" class="catcon">
        <img src="assets/images/ForumCat/5.png">
        <div class="catconbtn"><?php echo $categoryCount5; ?> Topics</div>
    </a>
    <a href="forums_topics.php?category=Wildlife Conservation&img=assets/images/ForumCat/6.png" class="catcon">
        <img src="assets/images/ForumCat/6.png">
        <div class="catconbtn"><?php echo $categoryCount6; ?> Topics</div>
    </a>
    <a href="forums_topics.php?category=Climate Change%20%26%20Policy&img=assets/images/ForumCat/7.png" class="catcon">
        <img src="assets/images/ForumCat/7.png">
        <div class="catconbtn"><?php echo $categoryCount7; ?> Topics</div>
    </a>
    <a href="forums_topics.php?category=Green Travel&img=assets/images/ForumCat/8.png" class="catcon">
        <img src="assets/images/ForumCat/8.png">
        <div class="catconbtn"><?php echo $categoryCount8; ?> Topics</div>
    </a>
    <a href="forums_topics.php?category=Community%20%26%20Events&img=assets/images/ForumCat/9.png" class="catcon">
        <img src="assets/images/ForumCat/9.png">
        <div class="catconbtn"><?php echo $categoryCount9; ?> Topics</div>
    </a>
    <a href="forums_topics.php?category=Seek Advice&img=assets/images/ForumCat/10.png" class="catcon">
        <img src="assets/images/ForumCat/10.png">
        <div class="catconbtn"><?php echo $categoryCount10; ?> Topics</div>
    </a>
</div>



    

     
    
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
    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        // Get the modal
        var modal = document.getElementById('addResourceModal');
    
        // Get the button that opens the modal
        var btn = document.getElementById("addResourceBtn");
    
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
    
        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }
    
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>




<script>
    // Get the modal
    var modal = document.getElementById('addResourceModal');

    // Get the button that opens the modal
    var btn = document.getElementById("addResourceBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // Function to open the modal and center it
    function openModal() {
        modal.style.display = "block";
        centerModal();
    }

    // Function to center the modal
    function centerModal() {
        var modalContent = modal.querySelector('.modal-content');
        var windowHeight = window.innerHeight;
        var modalHeight = modalContent.offsetHeight;
        var topMargin = (windowHeight - modalHeight) / 2;
        modalContent.style.marginTop = topMargin + "px";
    }

    // When the user clicks the button, open the modal
    btn.onclick = openModal;

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    // Recenter the modal when the window is resized
    window.onresize = centerModal;
</script>

    
</body>
</html>