<?php
session_start(); // Start session
// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION['user_email'])) {
    echo "<script>window.location.href='index';</script>";
    exit();
}

include 'db.php'; 
// Include database connection file

$imgparams = $_GET['img'];

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

$totalCategories = $categoryCount1 + $categoryCount2 + $categoryCount3 + $categoryCount4 + $categoryCount5 + $categoryCount6 + $categoryCount7 + $categoryCount8 + $categoryCount9 + $categoryCount10;


?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
 <meta charset="utf-8">
 <meta http-equiv="x-ua-compatible" content="ie=edge">
 <title>GreenSpace</title>
 <meta name="description" content="">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">

 <!-- CSS here -->
 <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
 <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
 <link rel="stylesheet" href="../assets/css/slicknav.css">
 <link rel="stylesheet" href="../assets/css/animate.min.css">
 <link rel="stylesheet" href="../assets/css/hamburgers.min.css">
 <link rel="stylesheet" href="../assets/css/magnific-popup.css">
 <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
 <link rel="stylesheet" href="../assets/css/themify-icons.css">
 <link rel="stylesheet" href="../assets/css/slick.css">
 <link rel="stylesheet" href="../assets/css/nice-select.css">
 <link rel="stylesheet" href="../assets/css/style.css">

     <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
             * { font-family: 'Poppins' }

              body { font-family: 'Poppins' }
               html { font-family: 'Poppins' }

    </style>
</head>

<body>
 <!--? Preloader Start -->
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
                                                <li><a href="about">About Us</a></li>
                                                <li><a href="greenTips">GreenLiving Tips</a></li>
                                                 <li><a href="educational" >Educational Resources</a></li>
                                                 <li><a style="cursor: pointer;color:#49C2B7">Community</a>
                                                    <ul class="submenu">
                                                        <li><a href="forums" style="color:#49C2B7">Forums</a></li>
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

<style>
    .slider-area2 {  background-position: center -150px; }

    .blog-author { border:2px solid transparent; cursor:pointer; }
    .blog-author:hover { border:2px solid #00FF6E; }

        .truncate {
display: -webkit-box;
  -webkit-box-orient: vertical;
  overflow: hidden;
  -webkit-line-clamp: 3; 
}

    @media only screen and (max-width: 600px) {
  .slider-area2 {  background-position: 0px center;
    background-size: cover;
   }
}

</style>
<main>
  <!--? Hero Start -->
  <div class="slider-area2" style="background-image:url('<?php echo $imgparams; ?>');">
    <div class="slider-height2 d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="hero-cap hero-cap2 pt-70">
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Hero End -->
  <!--? Blog Area Start -->

   
  <section class="blog_area single-post-area section-padding" style="margin-top:20px;padding-top: 30px;">

   <div class="container">

    <div class="row">

     <div class="col-lg-8 posts-list" style="margin-bottom: 50px;">
      <div class="single-post">
       
     
 </div>

 <div class="navigation-top" style="padding-top: 30px;">
  
<div style="display:flex;justify-content: space-between;">
 <p style="margin-top:10px;font-weight: 500;">Select a topic</p>
   <div style="margin-top: 0px;">
    <button class="btn btn-primary"  style="padding:10px 20px;" onclick="window.location.href='forums'">Add a topic</button>
</div>
</div>


</div>

<!-- <p style="font-weight: bold">' . $row['title'] . '</p> -->
<?php
include 'db.php'; // Include database connection file


$categoryEncoded = $_GET['category']; // Get the encoded category value from the URL
$category = urldecode($categoryEncoded); // Decode the category value


$sql = "SELECT af.title, af.user_ID, af.forum_ID, af.content, af.date_posted, u.user_img, u.user_name, af.category
        FROM allforums AS af
        INNER JOIN user AS u ON af.user_ID = u.user_ID
        WHERE af.category = '$category'
        ORDER BY af.date_posted DESC";

$result = mysqli_query($con, $sql);

// echo '<h4>'. $category .'</h4>';

$forumImages = [
    "General Discussion" => "1.png",
    "Green Initiatives" => "2.png",
    "Tips & Tricks" => "3.png",
    "Green Technology" => "4.png",
    "Gardening & Agriculture" => "5.png",
    "Wildlife Conservation" => "6.png",
    "Climate Change & Policy" => "7.png",
    "Green Travel" => "8.png",
    "Community & Events" => "9.png",
    "Seek Advice" => "10.png"
];

echo "<script>
function redirectToSelectedForum(forumID, category) {
    var img = '" . (isset($forumImages[$category]) ? "../assets/images/ForumCat/" . $forumImages[$category] : "") . "';
    window.location.href = 'selected_forum.php?forum_ID=' + forumID + '&category=' + category + '&img=' + img;
}
</script>";


if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="blog-author" style="background:#FCFBEB;padding:20px;"  onclick="redirectToSelectedForum(\'' . $row['forum_ID'] . '\', \'' . $row['category'] . '\')">
      <div class="media align-items-center">
                      <img src="' . $row['user_img'] . '" alt="">
                      <div class="media-body">
                              <div style="display:flex;justify-content: space-between;">
                              <h4 style="color: #19181a">' . $row['user_name'] . '</h4>
                                 <h4 style="color: #19181a">' . date('F j, Y', strtotime($row['date_posted'])) . '</h4>
                
                            </div>  
                          
                          <p class="truncate">' . $row['title'] . '</p>
                      </div>
                  </div>
              </div>';
    }
} else {
    echo "No results found.";
}

mysqli_close($con);
?>


</div>
<div class="col-lg-4">
  <div class="blog_right_sidebar">
  
<aside class="single_sidebar_widget post_category_widget" style="background:#FCFBEB">
  <h4 class="widget_title" style="color: #2d2d2d;">Category</h4>
  <ul class="list cat-list">

<!--     <li>
        <a href="forums" class="d-flex">
          <p>All</p>
          <p>&nbsp;(<?php echo $totalCategories; ?>)</p>
        </a>

    </li>
     -->

   <li>
    <a href="forums_topics.php?category=General Discussion&img=../assets/images/ForumCat/1.png" class="d-flex">
     <p>General Discussion</p>
     <p>&nbsp;(<?php echo $categoryCount1; ?>)</p>
   </a>
 </li>

 <li>
  <a href="forums_topics.php?category=Green Initiatives&img=../assets/images/ForumCat/2.png" class="d-flex">
   <p>Green Initiatives</p>
   <p>&nbsp;(<?php echo $categoryCount2; ?>)</p>
 </a>
</li>

<li>
  <a href="forums_topics.php?category=Tips%20%26%20Tricks&img=../assets/images/ForumCat/3.png" class="d-flex">
    <p>Tips & Tricks</p>
    <p>&nbsp;(<?php echo $categoryCount3; ?>)</p>
  </a>
</li>

<li>
  <a href="forums_topics.php?category=Green Technology&img=../assets/images/ForumCat/4.png" class="d-flex">
    <p>Green Technology</p>
    <p>&nbsp;(<?php echo $categoryCount4; ?>)</p>
  </a>
</li>

<li>
  <a href="forums_topics.php?category=Gardening%20%26%20Agriculture&img=../assets/images/ForumCat/5.png" class="d-flex">
    <p>Gardening & Agriculture</p>
    <p>&nbsp;(<?php echo $categoryCount5; ?>)</p>
  </a>
</li>

<li>
  <a href="forums_topics.php?category=Wildlife Conservation&img=../assets/images/ForumCat/6.png" class="d-flex">
    <p>Wildlife Conservation</p>
    <p>&nbsp;(<?php echo $categoryCount6; ?>)</p>
  </a>
</li>

<li>
  <a href="forums_topics.php?category=Climate Change%20%26%20Policy&img=../assets/images/ForumCat/7.png" class="d-flex">
    <p>Climate Change & Policy</p>
    <p>&nbsp;(<?php echo $categoryCount7; ?>)</p>
  </a>
</li>

<li>
  <a href="forums_topics.php?category=Green Travel&img=../assets/images/ForumCat/8.png" class="d-flex">
    <p>Green Travel</p>
    <p>&nbsp;(<?php echo $categoryCount8; ?>)</p>
  </a>
</li>

<li>
  <a href="forums_topics.php?category=Community%20%26%20Events&img=../assets/images/ForumCat/9.png" class="d-flex">
    <p>Community & Events</p>
    <p>&nbsp;(<?php echo $categoryCount9; ?>)</p>
  </a>
</li>

<li>
  <a href="forums_topics.php?category=Seek Advice&img=../assets/images/ForumCat/10.png" class="d-flex">
    <p>Seek Advice</p>
    <p>&nbsp;(<?php echo $categoryCount10; ?>)</p>
  </a>
</li>



</ul>
</aside>



</div>
</div>
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

<script src="./../assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./../assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./../assets/js/popper.min.js"></script>
<script src="./../assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./../assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./../assets/js/owl.carousel.min.js"></script>
<script src="./../assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./../assets/js/wow.min.js"></script>
<script src="./../assets/js/animated.headline.js"></script>
<script src="./../assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="./../assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="./../assets/js/jquery.nice-select.min.js"></script>
<script src="./../assets/js/jquery.sticky.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="./../assets/js/jquery.counterup.min.js"></script>
<script src="./../assets/js/waypoints.min.js"></script>
<script src="./../assets/js/jquery.countdown.min.js"></script>
<script src="./../assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="./../assets/js/contact.js"></script>
<script src="./../assets/js/jquery.form.js"></script>
<script src="./../assets/js/jquery.validate.min.js"></script>
<script src="./../assets/js/mail-script.js"></script>
<script src="./../assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="./../assets/js/plugins.js"></script>
<script src="./../assets/js/main.js"></script>

</body>
</html>