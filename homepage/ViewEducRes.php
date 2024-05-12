<?php
session_start(); // Start session
// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION['user_email'])) {
    header("Location: index.php");
    exit();
}

include 'db.php'; // Include database connection file

// Retrieve the user_ID associated with the logged-in user's email
$user_email = $_SESSION['user_email'];
$query_user_id = "SELECT `user_ID` FROM `user` WHERE `user_email` = ?";
$stmt_user_id = mysqli_prepare($con, $query_user_id);
mysqli_stmt_bind_param($stmt_user_id, "s", $user_email);
mysqli_stmt_execute($stmt_user_id);
$result_user_id = mysqli_stmt_get_result($stmt_user_id);
$user_id_row = mysqli_fetch_assoc($result_user_id);
$user_ID = $user_id_row['user_ID'];
mysqli_stmt_close($stmt_user_id);

// Check if resourceID is set in the URL
if (isset($_GET['title'])) {
    $title = $_GET['title'];

    // Prepare and execute the query to fetch educational resource data
    $query = "SELECT `resourceID`, `title`, `content`, `date_posted`, `user_ID`, `img` FROM `educational_resource` WHERE `title` = ?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "s", $title);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    mysqli_stmt_close($stmt);

    // Check if the resource exists
    if ($row) {
        // Format the date_posted
        $date_posted = date('F j, Y', strtotime($row['date_posted']));

        // Get the user_name associated with the user_ID
        if (is_null($row['user_ID'])) {
            $user_name = "Admin";
        } else {
            // Prepare and execute the query to fetch user_name
            $query_user = "SELECT `user_name` FROM `user` WHERE `user_ID` = ?";
            $stmt_user = mysqli_prepare($con, $query_user);
            mysqli_stmt_bind_param($stmt_user, "i", $row['user_ID']);
            mysqli_stmt_execute($stmt_user);
            $result_user = mysqli_stmt_get_result($stmt_user);
            $user_row = mysqli_fetch_assoc($result_user);
            $user_name = $user_row['user_name'];
            mysqli_stmt_close($stmt_user);
        }

        // Prepare and execute the query to count shares
        $query_share_count = "SELECT COUNT(*) AS share_count FROM `shared_clicks` WHERE `resourceID` = ?";
        $stmt_share_count = mysqli_prepare($con, $query_share_count);
        mysqli_stmt_bind_param($stmt_share_count, "i", $row['resourceID']);
        mysqli_stmt_execute($stmt_share_count);
        $result_share_count = mysqli_stmt_get_result($stmt_share_count);
        $share_count_row = mysqli_fetch_assoc($result_share_count);
        $share_count = $share_count_row['share_count'];
        mysqli_stmt_close($stmt_share_count);
    } else {
        // Resource not found
        echo "Resource not found.";
        exit();
    }
} else {
    // Resource title not provided
    echo "Resource title not provided.";
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
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- CSS here -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.css">
    <link rel="stylesheet" href="../assets/css/flaticon.css">
    <link rel="stylesheet" href="../assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="../assets/css/gijgo.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/animated-headline.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/slick.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <style>
        * {
            font-family: 'Poppins'
        }

        /* Center modal */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Position it absolutely within its containing element */
            z-index: 9999;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            /* Adjust width as needed */
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

    <?php
    // Fetch the users who shared the educational resource
    $query_shared_users = "SELECT u.user_name FROM shared_clicks s JOIN user u ON s.user_ID = u.user_ID WHERE s.resourceID = ?";
    $stmt_shared_users = mysqli_prepare($con, $query_shared_users);
    mysqli_stmt_bind_param($stmt_shared_users, "i", $row['resourceID']);
    mysqli_stmt_execute($stmt_shared_users);
    $result_shared_users = mysqli_stmt_get_result($stmt_shared_users);

    // Store the shared users in an array
    $shared_users = [];
    while ($shared_user = mysqli_fetch_assoc($result_shared_users)) {
        $shared_users[] = $shared_user['user_name'];
    }
    mysqli_stmt_close($stmt_shared_users);
    ?>

    <!-- Display shared users in the modal -->
    <div class="modal fade" id="shareModal" tabindex="-1" aria-labelledby="shareModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="shareModalLabel">Users who shared this resource</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php if (!empty($shared_users)) : ?>
                        <ul>
                            <?php foreach ($shared_users as $user) : ?>
                                <li><?php echo $user; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php else : ?>
                        <p>No users have shared this resource yet.</p>
                    <?php endif; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <!-- Additional modal buttons can be added here -->
                </div>
            </div>
        </div>
    </div>








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
                                                <li><a href="about">About Us</a></li>
                                                <li><a href="greenTips">GreenLiving Tips</a></li>
                                                <li><a href="educational" style="color:#49C2B7">Educational Resources</a></li>
                                                <li><a style="cursor: pointer;color:#49C2B7">Community</a>
                                                    <ul class="submenu">
                                                        <li><a href="tryforum">Forum</a></li>
                                                        <li><a href="forum_details">Forum Details</a></li>
                                                        <li><a href="elements">Element</a></li>
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
        <div class="slider-area2" style="background-image: url('../uploadEducRes/<?php echo $row['img']; ?>'); background-position:center; ">

            <div class="slider-height2 d-flex align-items-center">

                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-70" style="text-align: center;">
                                <h2 style="font-family:'Poppins'"><?php echo $row['title']; ?></h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <div class="col-lg-12 mb-4" style="margin-top: 0px;float: left;">
                                            <button class="btn btn-primary" onclick="window.history.back()">
                                                < back</button>
                                        </div>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Our Cases Start -->




        <!-- Display fetched educational resources -->

    </main>

    <style>
        .cases-img {
            height: 200px;
            width: 100%;
        }

        .cases-img img {
            margin: 0px;
            height: 100%;
            width: 100%
        }

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
            <div style="font-family:'Poppins'; text-align: left;  font-size:1.2em; font-weight: normal;"><?php echo $row['content']; ?></div>
            <br>
            <div style="font-family:'Poppins'; font-size:1.2em; font-weight: normal;">From: <?php echo $user_name; ?></div>
            <div style="font-family:'Poppins'; font-size:1.2em; font-weight: normal;">When: <?php echo $date_posted; ?></div>

            <div class="col-lg-12 text-center mb-4" style="margin-top: 20px;">
                <form method="post" action="share.php">

                    <input type="hidden" name="resourceID" value="<?php echo $row['resourceID']; ?>">
                    <input type="hidden" name="user_ID" value="<?php echo $_SESSION['user_ID']; ?>">

                    <button type="submit" id="shareButton" name="shareButton" class="btn btn-primary">Share</button>
                    <button id="viewSharesBtn" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#shareModal">Total Shares: <?php echo $share_count; ?></button>

                </form>

            </div>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <!-- Your custom JavaScript -->
    <script>
        // JavaScript code for handling modal
        document.addEventListener("DOMContentLoaded", function() {
            var modal = document.getElementById('shareModal');
            var btn = document.getElementById("viewSharesBtn");

            btn.addEventListener("click", function() {
                modal.style.display = "block";
            });

            // Close modal when close button is clicked
            var closeBtn = modal.querySelector('.btn-close');
            closeBtn.addEventListener("click", function() {
                modal.style.display = "none";
            });

            // Close modal when clicking outside the modal
            window.addEventListener("click", function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            });
        });
    </script>


    <style>
        .cases-img {
            height: 200px;
            width: 100%;
        }

        .cases-img img {
            margin: 0px;
            height: 100%;
            width: 100%
        }

        .truncate {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
            -webkit-line-clamp: 8;
        }
    </style>


    <main>


        <!--? Our Cases Start -->
        <div class="our-cases-area section-padding30">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-10 ">

                    </div>
                </div>

                <h1 style="text-align:center;margin: auto;color: #19181a;">Other Educational Resources</h1>
                <div class="row">
                    <div class="row" style="background-color: transparent; padding: 20px; width: 100%;">


                        <?php
                        include 'db.php'; // Include database connection file

                        $title = mysqli_real_escape_string($con, $_GET['title']); // Escape the title parameter to prevent SQL injection

                        // Fetch records from the educational_resource table
                        $query = "SELECT `resourceID`, `title`, `content`, `date_posted`, `user_ID`, `img` FROM `educational_resource` WHERE `title` != '$title'";

                        $result = mysqli_query($con, $query);

                        while ($resource = mysqli_fetch_assoc($result)) {
                        ?>
                            <div class="col-lg-4 col-md-6 col-sm-6" style="background:transparent; margin: 0px;width: 90%; ">
                                <div class="single-cases mb-40" style="width: 100%; border: 2px solid transparent; margin:auto; ">
                                    <div class="cases-img">
                                        <img src="../uploadEducRes/<?php echo $resource['img']; ?>" alt="">
                                    </div>
                                    <div class="cases-caption">
                                        <h3><a onclick="readMore('<?php echo $resource['title']; ?>')" style="cursor: pointer;"><?php echo $resource['title']; ?></a></h3>
                                        <p class="truncate"><?php echo $resource['content']; ?></p>

                                        <div class="col-lg-12 text-center mb-4">
                                            <button class="btn btn-primary" style=" padding: 5px 20px; font-size: .9em;" onclick="readMore('<?php echo $resource['title']; ?>')">Read More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php
                        }
                        mysqli_free_result($result);
                        mysqli_close($con);
                        ?>

                        <script type="text/javascript">
                            function readMore(title) {
                                window.location.href = 'ViewEducRes.php?title=' + title;
                            }
                        </script>


                    </div>
                </div>



            </div>
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
    <!-- Progress -->
    <script src="./../assets/js/jquery.barfiller.js"></script>

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