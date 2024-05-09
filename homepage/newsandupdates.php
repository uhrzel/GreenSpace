<?php
session_start(); // Start session
// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION['user_email'])) {
    echo "<script>window.location.href='index';</script>";
    exit();
}


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
                                                <li><a href="educational">Educational Resource</a></li>
                                                <li><a style="cursor: pointer;color:#49C2B7">Community</a>
                                                    <ul class="submenu">

                                                        <li><a href="forums">Forums</a></li>
                                                        <li><a href="eventcalendar">Event Calendar</a></li>
                                                        <li><a href="partnership">Partnership & Collaboration</a></li>
                                                        <li><a href="newsandupdates" style="color:#49C2B7">News & Updates</a></li>
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
                            <div class="hero-cap hero-cap2 pt-70" style="justify-content: center;text-align: center;">
                                <h2>News & Updates</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb" style="text-align: center; justify-content: center;">
                                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Elements</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Start Sample Area -->

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
                    // Include your database connection file
                    include 'db.php';

                    // Query to fetch news details
                    $sql = "SELECT * FROM news ORDER BY year DESC, month DESC, day DESC";
                    $result = mysqli_query($con, $sql);

                    if ($result) {
                        // Check if there are any news available
                        if (mysqli_num_rows($result) > 0) {
                            // Loop through each news item
                            while ($news = mysqli_fetch_assoc($result)) {
                                // Generate HTML for each news item
                                echo '<div class="col-xl-6 col-lg-6 col-md-6">';
                                echo '<div class="home-blog-single mb-30">';
                                echo '<div class="blog-img-cap">';
                                echo '<div class="blog-img">';
                                echo '<img src="../admin/uploads/' . $news['image'] . '" alt="">';
                                echo '</div>';
                                echo '<div class="blog-cap">';
                                echo '<h3><a href="#">' . $news['title'] . '</a></h3>';
                                echo '<p style="font-family: \'Poppins\';">' . $news['description'] . '</p>';
                                echo '<button type="button" class="btn btn-primary read-more" data-id="' . $news['id'] . '">Read More</button>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                            }
                        } else {
                            // If no news available
                            echo '<div class="col-xl-12">';
                            echo '<p>No news available.</p>';
                            echo '</div>';
                        }
                    } else {
                        // If there's an error fetching news
                        echo '<div class="col-xl-12">';
                        echo '<p>Error fetching news details: ' . mysqli_error($con) . '</p>';
                        echo '</div>';
                    }

                    // Close the database connection
                    mysqli_close($con);
                    ?>
                </div>
            </div>
        </section>

        <div class="modal fade" id="newsModal" tabindex="-1" role="dialog" aria-labelledby="newsModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newsModalLabel">News Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="newsModalBody">
                        <!-- News details will be loaded here -->
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Handle click event for "Read More" buttons
                const readMoreButtons = document.querySelectorAll('.read-more');
                readMoreButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        const newsId = this.getAttribute('data-id');
                        fetchNewsDetails(newsId);
                    });
                });

                // Function to fetch and display news details in modal
                function fetchNewsDetails(newsId) {
                    fetch('./news-details.php?id=' + newsId)
                        .then(response => response.text())
                        .then(data => {
                            document.getElementById('newsModalBody').innerHTML = data;
                            $('#newsModal').modal('show');
                        })
                        .catch(error => console.error('Error fetching news details:', error));
                }
            });
        </script>

        <!-- Blog Area End -->
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

        <script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <!-- Jquery, Popper, Bootstrap -->
        <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <!-- Jquery Mobile Menu -->
        script src="../assets/js/jquery.slicknav.min.js"></script>

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

</body>

</html>