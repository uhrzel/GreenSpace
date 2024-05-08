<?php
include 'db.php';
session_start(); // Start session

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION['user_email'])) {
    echo "<script>window.location.href='../index';</script>";
    exit();
}

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

// Close the database connection
mysqli_close($con);
?><!doctype html>
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
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
             * { font-family: 'Poppins'; }

              body { font-family: 'Poppins' }
               html { font-family: 'Poppins' }

    </style>
    <style>
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

           .cases-img { height:200px; width:100%; }
    .cases-img img { margin:0px; height:100%; width:100% }
    .truncate {
display: -webkit-box;
  -webkit-box-orient: vertical;
  overflow: hidden;
  -webkit-line-clamp: 8; 
  font-family: 'Poppins';
}

.editbigcon { position:fixed; left:0px; top:0px; width:100%; height:100%;  overflow:hidden;  background:rgba(0, 0, 0, 0.5); z-index:5555; transition: .5s}
.editcentercon { position:absolute;left:50%; top:50%; padding-top: 10px; transform:translate(-50%,-50%); height:600px; max-width:500px; width: 90%; background:#f1f1f1; border-radius:20px; }
.editcenterimg { position: relative; margin:auto; width:95%; height:170px; background: transparent; border-radius: 14px;}
.editcenterimg img { margin: 0px; height: 100%; width: 100%}

.editfortitle {
    position: absolute; bottom: -25px; left: 50%; transform: translate(-50%, 0px); width: 95%; height: 50px; background: aqua; border-top-left-radius:7px; border-top-right-radius:7px; overflow: hidden;
}

.editfortitle input { margin:0px; height:100%; width:100%; border:none; outline:none; padding-left: 10px; padding-right: 10px;}

.editforcontent { margin:50px auto; width:90%; height:300px; margin-bottom: 0px; background:transparent; border-bottom-left-radius:7px; border-bottom-right-radius:7px; }

.editforcontent textarea { margin:0px; height:100%; padding: 10px; width:100%; border:none;border-bottom-left-radius:7px; border-bottom-right-radius:7px; outline:none; padding-left: 10px;}

.editforbtn { margin:10px auto; display:flex; justify-content:center; }

    </style> 
    
</head>
<body style="width:100vw;overflow-x:hidden;">
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
                                                <li><a href="about" >About Us</a></li>
                                                <li><a href="greenTips">GreenLiving Tips</a></li>
                                                       <li><a href="educational" style="color:#49C2B7">Educational Resources</a></li>

                                                 <li><a style="cursor: pointer;">Community</a>
                                                    <ul class="submenu">
                                                        
                                                        <li><a href="forums">Forums</a></li>
                                                        <li><a href="elements">Event Calendar</a></li>
                                                        <li><a href="forum_details">Partnership & Collaboration</a></li>
                                                        <li><a href="elements">News & Updates</a></li>
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
                            <div class="hero-cap hero-cap2 pt-70" style="text-align:center;">
                                <h2  style="font-family: 'Poppins';text-align: center;"> <span style="text-align: center;font-size: .5em;font-weight: normal;">My Published</span><br>Educational Resources</h2>
                                
                                <nav aria-label="breadcrumb">
                                    <div class="col-lg-12 text-center mb-4" style="float:left;margin:0px;">
                    <button class="btn btn-primary" onclick="window.history.back()" style="margin:5px;margin-top: 0px;">< Back</button>
                    <button class="btn btn-primary" onclick="window.history.back()" style="margin:5px;margin-top: 0px;">Add ></button>
                </div>
                                   <!--  <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                                        <li class="breadcrumb-item"><a href="Educational">Educational Resources</a></li> 
                                    </ol> -->
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
   

    <main>  
         <!--? Our Cases Start -->
    <div class="our-cases-area section-padding30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 ">
                    
                </div>
            </div>


 <div class="row">   
          <div class="row" style="background-color: transparent; padding: 20px; width: 100%;">

<?php
include 'db.php'; // Include database connection file

// Fetch records from the educational_resource table
$query = "SELECT `resourceID`, `title`, `content`, `date_posted`, `user_ID`, `img` FROM `educational_resource` WHERE user_ID = '$user_ID' and status = 'approved'";
$result = mysqli_query($con, $query);

while ($resource = mysqli_fetch_assoc($result)) {
    ?>
         <div class="col-lg-4 col-md-6 col-sm-6" style="background:transparent; margin: 0px;width: 90%; " >
        <div class="single-cases mb-40" style="width: 100%; border: 2px solid transparent; margin:auto; ">
            <div class="cases-img">
                <img src="../uploadEducRes/<?php echo $resource['img']; ?>" alt="">
            </div>
            <div class="cases-caption">
                <h3><a href="#"><?php echo $resource['title']; ?></a></h3>
                <p class="truncate"><?php echo $resource['content']; ?></p>

        

                 <div class="col-lg-12 text-center mb-4">
            <button type="button" class="btn btn-primary" style="margin: 5px; padding: 5px 20px; font-size: .9em; background: transparent; color: #19181a; border: none; box-shadow: none;" onclick="readMore('<?php echo $resource['title']; ?>')">Read More</button>


            <button type="submit" class="btn btn-primary" style="margin: 5px; padding: 5px 20px; font-size: .9em"  onclick="editresource('<?php echo $resource['resourceID']; ?>', '<?php echo $resource['title']; ?>', '<?php echo $resource['content']; ?>', '<?php echo $resource['date_posted']; ?>', '<?php echo $resource['user_ID']; ?>', '<?php echo $resource['img']; ?>')">Edit</button>
        </div>
            </div>
        </div>
    </div>

    <?php
}
mysqli_free_result($result);
mysqli_close($con);
?>




 </div>
    </div>





<div class="row">   
       <h1 style="text-align:center;margin: auto;color: #19181a;">My Pending</h1>
           <div class="row" style="background-color: transparent; padding: 20px; width: 100%;">


<?php
include 'db.php'; // Include database connection file

// Fetch records from the educational_resource table
$query = "SELECT `resourceID`, `title`, `content`, `date_posted`, `user_ID`, `img` FROM `educational_resource` WHERE user_ID = '$user_ID' and status = 'pending'";
$result = mysqli_query($con, $query);

while ($resource = mysqli_fetch_assoc($result)) {
    ?>
    <div class="col-lg-4 col-md-6 col-sm-6" style="background:transparent; margin: 0px; width: 100%;" >
        <div class="single-cases mb-40" style="width: 100%; border: 2px solid transparent; margin:auto; ">
            <div class="cases-img">
                <img src="../uploadEducRes/<?php echo $resource['img']; ?>" alt="">
            </div>
            <div class="cases-caption">
                <h3><a href="#"><?php echo $resource['title']; ?></a></h3>
                <p class="truncate"><?php echo $resource['content']; ?></p>

        

                 <div class="col-lg-12 text-center mb-4">
            <button type="button" class="btn btn-primary" style="margin: 5px; padding: 5px 20px; font-size: .9em; background: transparent; color: #19181a; border: none; box-shadow: none;" onclick="readMore('<?php echo $resource['title']; ?>')">Read More</button>


            <button type="submit" class="btn btn-primary" style="margin: 5px; padding: 5px 20px; font-size: .9em"  onclick="editresource('<?php echo $resource['resourceID']; ?>', '<?php echo $resource['title']; ?>', '<?php echo $resource['content']; ?>', '<?php echo $resource['date_posted']; ?>', '<?php echo $resource['user_ID']; ?>', '<?php echo $resource['img']; ?>')">Edit</button>
        </div>
            </div>
        </div>
    </div>

    <?php
}
mysqli_free_result($result);
mysqli_close($con);
?>




 </div>
    </div>

            
        </div>
    </div>
    

     
    
    </main>





        


<div class="editbigcon" id="editbigcon">
    <div class="editcentercon">



    <form id="editform" autocomplete="off" style="" enctype='multipart/form-data' action="editeduc.php" method="POST">
        <div class="editcenterimg">
            <img id="editimgsrc" style="background-position: center; border-radius: 15px; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;">
            <input type="file" id="fileInputEdit" style="position: absolute; left: -500000px; opacity: 0" name="img" accept="image/*">
            <input type="text" id="fileNameSelected" name="filename" style="position: absolute; left: -500000px; opacity: 0">

            <button type="button" class="btn btn-primary" style="position: absolute; left: 50%; top: 50px; transform: translate(-50%, 0px); padding: 5px 20px; font-size: .9em" onclick="document.getElementById('fileInputEdit').click();">Upload image</button>

             <!-- style="position: absolute; left: -500000px; opacity: 0"  -->
            <input id="eddituser_ID" name="user_ID" value="<?php echo $user_ID; ?>" style="position: absolute; left: -500000px; opacity: 0" >
            <div class="editfortitle"><input id="editfortitle" name="title" required></div>
        </div>


        <div class="editforcontent"><textarea id="editforcontent" name="content" required></textarea></div>
        <div class="editforbtn">
            <button type="button" class="btn btn-primary" style="margin: 5px; padding: 5px 20px; font-size: .9em; background: white; color: #19181a; border: none; box-shadow: none;" onclick="window.location.href='myeducres'">Close</button>
          
            <button type="submit" class="btn btn-primary" style="margin: 5px; padding: 5px 20px; font-size: .9em">Upload</button>
        </div>
    </form>




    </div>
</div>











<script type="text/javascript">
 

       function readMore(title) {
        window.location.href = 'ViewEducRes.php?title=' + title;
    }


    function editresource(resourceID, title, content, date_posted, user_ID, img){



        let x = document.getElementById('editbigcon');
        x.style.height = '100%';
        x.style.overflow = 'visible';

        localStorage.setItem('editIMG', img);

        document.getElementById('eddituser_ID').value = user_ID;


document.getElementById('editimgsrc').style.backgroundImage = "url('../"  + img + "')";
    

    document.getElementById('editforcontent').value = content;
       document.getElementById('editfortitle').value = title;
       document.getElementById('editresourceID').value = resourceID;
    
    }

    function closeeditbigcon(){
          let x = document.getElementById('editbigcon');
        x.style.height = '0%';
        x.style.overflow = 'hidden';
    }



    function updateFileName() {
            var fileInput = document.getElementById('fileInputEdit');
            var fileName = document.getElementById('fileNameSelected');
            fileName.value = fileInput.files[0] ? fileInput.files[0].name : 'default.png';
        }

        setInterval(updateFileName, 1000); // Run updateFileName every second


    document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('#editform');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Create a FormData object from the form
        const formData = new FormData(form);

        // Send the form data using AJAX
        fetch('addeduc.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            // Handle the response from the server
            alert(data.message);
            window.location.reload();
            // You can add code here to update the UI or show a success message
        })
        .catch(error => {
            // Handle any errors that occur during the fetch
            console.error('Error:', error);
        });


        
    });
});



    const fileInput = document.getElementById('fileInputEdit');
const img = document.getElementById('editimgsrc');

fileInput.addEventListener('change', function() {
    const file = fileInput.files[0];
    const reader = new FileReader();

    reader.addEventListener('load', function() {
        img.style.backgroundImage = `url(${reader.result})`;
    });

    if (file) {
        reader.readAsDataURL(file);
    }
});

</script>























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