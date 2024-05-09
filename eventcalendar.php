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
  <link rel="stylesheet" href="assets/css/styleEvents.css">
  <link rel="stylesheet" href="assets/css/styleEventsCalendar.css">
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
                        <li><a style="color:#49C2B7">Community</a>

                          <ul class="submenu">
                            <li><a href="forums">Forums</a></li>
                            <li><a href="eventcalendar" style="color:#49C2B7">Event Calendar</a></li>
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
                <h2>Event Calendar</h2>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb" style="justify-content: center;text-align: center;">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item"><a href="eventcalendar">Event Calendar</a></li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Hero End -->
    <!--? Services Area Start -->

    <div class="event-container">

      <?php
      include 'db.php';

      $sql = "SELECT DISTINCT year FROM events ORDER BY year DESC";
      $result = $con->query($sql);

      $output = "";
      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
          $year = $row["year"];
          $output .= '<h3 class="year">' . $year . '</h3>';

          // Get events for this year
          $events_sql = "SELECT * FROM events WHERE year = '$year' ORDER BY month ASC";
          $events_result = $con->query($events_sql);
          if ($events_result->num_rows > 0) {
            while ($event_row = $events_result->fetch_assoc()) {
              $output .= '<div class="event" style="overflow:hidden">';
              $output .= '<div class="event-left" >';
              $output .= '<div class="event-date">';
              $output .= '<div class="date">' . $event_row["day"] . '</div>';
              $output .= '<div class="month">' . $event_row["month"] . '</div>';
              $output .= '</div>';
              $output .= '</div>';
              $output .= '<div class="event-right" style="width:100%">';
              $output .= '<h3 class="event-title">' . $event_row["title"] . '</h3>';
              $output .= '<div class="event-description">' . $event_row["description"] . '</div>';

              // Add the event timing
              $output .= '<div class="event-timing">';
              $output .= '<img src="assets/img/events/time.png" alt="" /> &nbsp;' . $event_row["timing"];
              $output .= '</div>';

              $output .= '<div>';
              $output .= '<button class="btn btn-primary"  onclick="joinEvent()">Join Us</button>';

              $output .= '</div>';

              $output .= '</div>';
              $output .= '</div>';
            }
          }
        }
      } else {
        $output = "0 results";
      }

      echo $output;

      $con->close();
      ?>

    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <script>
    function joinEvent() {
      // Show SweetAlert message
      Swal.fire({
        title: 'Success!',
        text: 'You successfully joined this event. We will contact you in your email for more info.',
        icon: 'success',
        confirmButtonText: 'OK'
      });
    }
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


  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const calendar = document.getElementById('calendar');

      // Sample events data
      const events = [{
          date: '2024-04-15',
          title: 'Event 1',
          description: 'Description for Event 1'
        },
        {
          date: '2024-04-20',
          title: 'Event 2',
          description: 'Description for Event 2'
        },
        {
          date: '2024-04-25',
          title: 'Event 3',
          description: 'Description for Event 3'
        }
      ];

      // Render calendar
      renderCalendar(events);
    });

    function renderCalendar(events) {
      const currentDate = new Date();
      const currentMonth = currentDate.getMonth();
      const currentYear = currentDate.getFullYear();

      let calendarHtml = '';

      // Generate calendar header
      calendarHtml += '<div class="month">';
      calendarHtml += '<ul>';
      calendarHtml += `<li>${currentMonthName()}</li>`;
      calendarHtml += `<li>${currentYear}</li>`;
      calendarHtml += '</ul>';
      calendarHtml += '</div>';

      // Generate days of the week
      calendarHtml += '<ul class="weekdays">';
      const weekdays = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
      weekdays.forEach(day => {
        calendarHtml += `<li>${day}</li>`;
      });
      calendarHtml += '</ul>';

      // Generate calendar days
      calendarHtml += '<ul class="days">';
      const totalDays = new Date(currentYear, currentMonth + 1, 0).getDate();
      for (let i = 1; i <= totalDays; i++) {
        calendarHtml += `<li>${i}`;

        // Check if there is an event on this day
        const eventOnThisDay = events.find(event => {
          const eventDate = new Date(event.date);
          return eventDate.getFullYear() === currentYear && eventDate.getMonth() === currentMonth && eventDate.getDate() === i;
        });

        if (eventOnThisDay) {
          calendarHtml += `<span class="event" title="${eventOnThisDay.description}">${eventOnThisDay.title}</span>`;
        }

        calendarHtml += '</li>';
      }
      calendarHtml += '</ul>';

      // Append calendar HTML to the DOM
      calendar.innerHTML = calendarHtml;
    }

    function currentMonthName() {
      const currentDate = new Date();
      const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
      return months[currentDate.getMonth()];
    }
  </script>

</body>

</html>