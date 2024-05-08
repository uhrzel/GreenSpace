<?php
// Start session
session_start();

// Check if user is not logged in
if (!isset($_SESSION["adminloggedin"]) || $_SESSION["adminloggedin"] !== true) {
    // Redirect to login page
    header("Location: index.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>GreenSpace</title>
    <!-- Favicon icon -->
    <script src="https://kit.fontawesome.com/a5a5789976.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.ico">
    <link href="./vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./vendor/chartist/css/chartist.min.css">
    <link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="./vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/styleEvents.css">
    <link rel="stylesheet" href="../assets/css/styleEventsCalendar.css">


    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

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

        .event .event-right h3.event-title {
            font-weight: 700;
            font-style: normal;
        }
    </style>
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="./images/logo.jpg" alt="">
                <img class="logo-compact" src="./images/logo-text.png" alt="">
                <img class="brand-title" src="./images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Chat box start
        ***********************************-->
        <div class="chatbox">
            <div class="chatbox-close"></div>
            <div class="custom-tab-1">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#notes">Notes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#alerts">Alerts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#chat">Chat</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="chat" role="tabpanel">
                        <div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
                                            <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1" />
                                        </g>
                                    </svg></a>
                                <div>
                                    <h6 class="mb-1">Chat List</h6>
                                    <p class="mb-0">Show All</p>
                                </div>
                                <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" cx="5" cy="12" r="2" />
                                            <circle fill="#000000" cx="12" cy="12" r="2" />
                                            <circle fill="#000000" cx="19" cy="12" r="2" />
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
                                <ul class="contacts">
                                    <li class="name-first-letter">A</li>
                                    <li class="active dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Archie Parker</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Alfie Mason</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>AharlieKane</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">B</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Bashid Samim</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Breddie Ronan</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Ceorge Carson</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">D</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Darry Parker</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Denry Hunter</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">J</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Jack Ronan</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Jacob Tucker</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>James Logan</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Joshua Weston</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">O</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Oliver Acker</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Oscar Weston</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card chat dz-chat-history-box d-none">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0)" class="dz-chat-history-back">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1" />
                                            <path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) " />
                                        </g>
                                    </svg>
                                </a>
                                <div>
                                    <h6 class="mb-1">Chat with Khelesh</h6>
                                    <p class="mb-0 text-success">Online</p>
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0)" data-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <circle fill="#000000" cx="5" cy="12" r="2" />
                                                <circle fill="#000000" cx="12" cy="12" r="2" />
                                                <circle fill="#000000" cx="19" cy="12" r="2" />
                                            </g>
                                        </svg></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item"><i class="fa fa-user-circle text-primary mr-2"></i> View profile</li>
                                        <li class="dropdown-item"><i class="fa fa-users text-primary mr-2"></i> Add to close friends</li>
                                        <li class="dropdown-item"><i class="fa fa-plus text-primary mr-2"></i> Add to group</li>
                                        <li class="dropdown-item"><i class="fa fa-ban text-primary mr-2"></i> Block</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        Hi, how are you samim?
                                        <span class="msg_time">8:40 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Hi Khalid i am good tnx how about you?
                                        <span class="msg_time_send">8:55 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        I am good too, thank you for your chat template
                                        <span class="msg_time">9:00 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        You are welcome
                                        <span class="msg_time_send">9:05 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        I am looking for your next templates
                                        <span class="msg_time">9:07 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Ok, thank you have a good day
                                        <span class="msg_time_send">9:10 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        Bye, see you
                                        <span class="msg_time">9:12 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        Hi, how are you samim?
                                        <span class="msg_time">8:40 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Hi Khalid i am good tnx how about you?
                                        <span class="msg_time_send">8:55 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        I am good too, thank you for your chat template
                                        <span class="msg_time">9:00 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        You are welcome
                                        <span class="msg_time_send">9:05 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        I am looking for your next templates
                                        <span class="msg_time">9:07 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Ok, thank you have a good day
                                        <span class="msg_time_send">9:10 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        Bye, see you
                                        <span class="msg_time">9:12 AM, Today</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer type_msg">
                                <div class="input-group">
                                    <textarea class="form-control" placeholder="Type your message..."></textarea>
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="alerts" role="tabpanel">
                        <div class="card mb-sm-3 mb-md-0 contacts_card">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" cx="5" cy="12" r="2" />
                                            <circle fill="#000000" cx="12" cy="12" r="2" />
                                            <circle fill="#000000" cx="19" cy="12" r="2" />
                                        </g>
                                    </svg></a>
                                <div>
                                    <h6 class="mb-1">Notications</h6>
                                    <p class="mb-0">Show All</p>
                                </div>
                                <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1">
                                <ul class="contacts">
                                    <li class="name-first-letter">SEVER STATUS</li>
                                    <li class="active">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont primary">KK</div>
                                            <div class="user_info">
                                                <span>David Nester Birthday</span>
                                                <p class="text-primary">Today</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">SOCIAL</li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont success">RU<i class="icon fa-birthday-cake"></i></div>
                                            <div class="user_info">
                                                <span>Perfection Simplified</span>
                                                <p>Jame Smith commented on your status</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">SEVER STATUS</li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont primary">AU<i class="icon fa fa-user-plus"></i></div>
                                            <div class="user_info">
                                                <span>AharlieKane</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont info">MO<i class="icon fa fa-user-plus"></i></div>
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer"></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="notes">
                        <div class="card mb-sm-3 mb-md-0 note_card">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
                                            <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1" />
                                        </g>
                                    </svg></a>
                                <div>
                                    <h6 class="mb-1">Notes</h6>
                                    <p class="mb-0">Add New Nots</p>
                                </div>
                                <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body2">
                                <ul class="contacts">
                                    <li class="active">
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>New order placed..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="javascript:void(0)" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>Youtube, a video-sharing website..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="javascript:void(0)" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>john just buy your product..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="javascript:void(0)" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="javascript:void(0)" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Chat box End
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">

                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                    <i class="fa-solid fa-power-off"></i>
                                    <!-- <span class="badge light text-white bg-primary">Off</span> -->
                                </a>

                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <style type="text/css">
            .activeNav {
                color: #007A64
            }

            ul li {
                cursor: pointer;
            }
        </style>
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a href="dashboard">
                            <i class="fa-solid fa-gauge "></i>
                            <span class="nav-text">Dashboard</span>
                        </a>

                    </li>
                    <li><a href="allpendings">
                            <i class="fa-regular fa-hourglass-half"></i>
                            <span class="nav-text">All Pendings</span>
                        </a>

                    </li>

                    <li><a href="useraccounts">
                            <i class="fa-solid fa-users"></i>
                            <span class="nav-text">User Accounts</span>
                        </a>

                    </li>
                    <li><a href="educationalresources">
                            <i class="fa-solid fa-book-open-reader"></i>
                            <span class="nav-text">Educational Resources</span>
                        </a>

                    </li>
                    <li><a href="communityforum">
                            <i class="fa-solid fa-comments"></i>
                            <span class="nav-text">Community Forum</span>
                        </a>

                    </li>
                    <li><a href="eventscalendar">
                            <i class="fa-solid fa-calendar-days"></i>
                            <span class="nav-text">Events Calender</span>
                        </a>

                    </li>
                    <li><a href="newsandupdates">
                            <i class="fa-solid fa-newspaper"></i>
                            <span class="nav-text">News and Updates</span>
                        </a>
                    </li>

                    <li><a href="logout">
                            <i class="fa-solid fa-power-off"></i>
                            <span class="nav-text">Logout</span>
                        </a>
                    </li>



                </ul>

                <div class="copyright">
                    <p>Made with <span style="color:green">♥</span> by GreenSpace</p>
                </div>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <style type="text/css">
            .feed-form {
                margin-top: 36px;
                display: flex;
                flex-direction: column;
                width: 90%;
                margin: auto;
                background: #F9F9F9;
                padding: 10px;
            }

            .feed-form input {
                height: 54px;
                border-radius: 5px;
                background: white;
                margin-bottom: 15px;
                border: none;
                padding: 0 20px;
                font-weight: 300;
                font-size: 14px;
                color: #4B4B4B;
            }

            .feed-form textarea {
                height: 170px;
                min-height: 170px;
                max-height: 170px;
                border-radius: 5px;
                background: white;
                margin-bottom: 15px;
                border: none;
                padding: 20px 20px;
                font-weight: 300;
                font-size: 14px;
                color: #4B4B4B;
            }



            .button_submit:hover,
            .feed-form input:hover {
                transform: scale(1.009);
                box-shadow: 0px 0px 3px 0px #212529;
            }

            .button_submit {
                width: 100%;
                height: 54px;
                font-size: 14px;
                color: white;
                background: #007A64;
                border-radius: 5px;
                border: none;
                font-weight: 500;
                text-transform: uppercase;
            }

            .forimg {
                margin: auto;
                height: 150px;
                width: 150px;
                border-radius: 100%;
                background: transparent;
                overflow: hidden;
            }

            .forimg img {
                margin: 0px;
                height: 100%;
                width: 100%;
            }
        </style>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="form-head d-flex align-items-center mb-sm-4 mb-3">
                    <div class="mr-auto">
                        <h2 class="text-black font-w600">News Calendar</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="row">


                            <div class="col-xl-12">
                                <div class="card rated-doctors">
                                    <div class="card-header border-0 pb-0">
                                        <h3 class="mb-0" id="textallusers" style="font-size: 1.05em;color: grey; font-weight:bold">Create a News</h3>
                                    </div>
                                    <div class="card-body">

                                        <form method="POST" id="addevent" action="addnews.php" enctype='multipart/form-data'>
                                            <div style="display: flex;flex-wrap: wrap;width: 100%;">



                                                <div class="feed-form">
                                                    <div style="display:flex;justify-content: space-between;">
                                                        <input style="width:49%" required type="date" id="dateInput">
                                                        <input style="width:49%; position: absolute;left: -500000px; opacity: 0;" id="getMonth" readonly name="month">
                                                        <input style="width:49%; position: absolute;left: -500000px; opacity: 0;" id="getDay" readonly name="day">
                                                        <input style="width:49%; position: absolute;left: -500000px; opacity: 0;" id="getYear" readonly name="year">

                                                        <input style="width:49%" required type="time" name="timing">



                                                    </div>

                                                    <input required placeholder="Title" type="text" name="title">
                                                    <textarea required placeholder="Description" name="description" type="email"></textarea>


                                                    <button class="button_submit">Submit</button>
                                                </div>

                                            </div>
                                        </form>

                                        <script>
                                            const dateInput = document.getElementById('dateInput');
                                            const getMonth = document.getElementById('getMonth');
                                            const getDay = document.getElementById('getDay');
                                            const getYear = document.getElementById('getYear');

                                            dateInput.addEventListener('input', function() {
                                                const selectedDate = new Date(dateInput.value + 'T00:00:00');
                                                const month = selectedDate.toLocaleString('default', {
                                                    month: 'short'
                                                });
                                                const day = selectedDate.getDate();
                                                const year = selectedDate.getFullYear();

                                                getMonth.value = month;
                                                getDay.value = day;
                                                getYear.value = year;
                                            });
                                        </script>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


                    <script>
                        // Function to handle form submission via AJAX
                        function submitForm(formId, url, successCallback) {
                            var xhr = new XMLHttpRequest();
                            var formData = new FormData(document.getElementById(formId));

                            xhr.open('POST', url, true);
                            xhr.onreadystatechange = function() {
                                if (xhr.readyState == 4 && xhr.status == 200) {
                                    successCallback(xhr.responseText);
                                }
                            };
                            xhr.send(formData);
                        }

                        // Function to handle signup form submission
                        document.getElementById("addevent").addEventListener("submit", function(event) {
                            event.preventDefault();
                            submitForm("addevent", "addnews.php", function(response) {
                                alert(response);

                                if (response == 'News added successfully') {
                                    window.location.reload();
                                }

                            });
                        });
                    </script>
                    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel">Edit Event</h5>
                                    <button type="button" class="btn-close" aria-label="Close">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                            <path d="M3.854 3.146a.5.5 0 0 1 0 .708L8.293 8l-4.44 4.44a.5.5 0 1 1-.708-.708L7.293 8 2.146 2.854a.5.5 0 0 1 .708-.708L8 7.293l4.44-4.44a.5.5 0 1 1 .708.708L8.707 8l4.147 4.146a.5.5 0 0 1-.708.708L8 8.707l-4.44 4.44a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854a.5.5 0 0 1 .708-.708L8 7.293z" />
                                        </svg>
                                    </button>

                                </div>
                                <div class="modal-body" id="editModalBody">
                                    <!-- Event details will be loaded here via AJAX -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-close" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn" id="saveChangesBtn" style="background-color: darkgreen; color: white">Save changes</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        $(document).ready(function() {
                            $('#saveChangesBtn').click(function() {
                                // Get the updated event details
                                var eventId = $('#editEventId').val();
                                var newTitle = $('#editTitle').val();
                                var newDescription = $('#editDescription').val();
                                var newTiming = $('#editTiming').val();

                                // Send AJAX request to edit_event.php
                                $.ajax({
                                    url: 'edit_news.php',
                                    type: 'POST',
                                    data: {
                                        event_id: eventId,
                                        new_title: newTitle,
                                        new_description: newDescription,
                                        new_timing: newTiming
                                    },
                                    success: function(response) {
                                        // Handle the response from edit_event.php
                                        alert(response);
                                        location.reload();

                                        $('#editModal').modal('hide');
                                    },
                                    error: function(xhr, status, error) {
                                        // Handle errors
                                        console.error(xhr.responseText);
                                    }
                                });
                            });
                        });





                        $(document).on('click', '#editModal .btn-close', function() {
                            $('#editModal').modal('hide');

                        });
                    </script>


                    <div class="col-xl-6">
                        <div class="row">


                            <div class="col-xl-12">
                                <div class="card patient-activity">
                                    <div class="card-header border-0 pb-0">
                                        <h3 class="mb-0" id="textallusers" style="font-size: 1.05em;color: grey; font-weight:bold">News Calendar</h3>
                                    </div>
                                    <div class="card-body pb-0">
                                        <div class="table-responsive height720 dz-scroll" id="patient-activity">
                                            <table class="table table-responsive-sm" style="overflow-x: auto; overflow-y: auto;">

                                                <tbody id="bodyapproved">



                                                    <div class="event-container" style="margin-top: -30px;">
                                                        <?php
                                                        // Include your database connection file
                                                        include 'db.php';

                                                        // JavaScript function to open the edit modal
                                                        $editModalFunction = <<<EOD
<script>
function openEditModal(newsId) {
    $.ajax({
        url: "fetch_news.php",
        type: "POST",
        data: { news_id: newsId },
        success: function(response) {
            $("#editModalBody").html(response);
            $("#editModal").modal("show");
        }
    });
}
</script>
EOD;

                                                        // Output the function
                                                        echo $editModalFunction;

                                                        $output = '';

                                                        $sql = "SELECT DISTINCT year FROM news ORDER BY year DESC";
                                                        $result = $con->query($sql);

                                                        if ($result->num_rows > 0) {
                                                            // output data of each row
                                                            while ($row = $result->fetch_assoc()) {
                                                                $year = $row["year"];
                                                                $output .= '<h3 class="year">' . $year . '</h3>';

                                                                // Get events for this year
                                                                $events_sql = "SELECT * FROM news WHERE year = '$year' ORDER BY month DESC, day ASC";
                                                                $events_result = $con->query($events_sql);
                                                                if ($events_result->num_rows > 0) {
                                                                    while ($event_row = $events_result->fetch_assoc()) {
                                                                        $output .= '<div class="event" style="overflow:hidden">';
                                                                        $output .= '<div class="event-left">';
                                                                        $output .= '<div class="event-date">';
                                                                        $output .= '<div class="date">' . $event_row["day"] . '</div>';
                                                                        $output .= '<div class="month">' . $event_row["month"] . '</div>';
                                                                        $output .= '</div>';
                                                                        $output .= '</div>';
                                                                        $output .= '<div class="event-right"  style="width:100%">';
                                                                        $output .= '<h3 class="event-title">' . $event_row["title"] . '</h3>';
                                                                        $output .= '<div class="event-description">' . $event_row["description"] . '</div>';

                                                                        $output .= '<div style="display:flex">';
                                                                        $output .= '<div class="event-timing" style="margin-right:10px;">';
                                                                        $output .= '<img src="assets/img/events/time.png" alt="" /> ' . $event_row["timing"];
                                                                        $output .= '</div>';

                                                                        // Add delete button with JavaScript function
                                                                        $output .= '<div class="event-timing delete-btn" style="margin-right:10px;background:#F22952;color:#f1f1f1" data-event-id="' . $event_row["id"] . '">';
                                                                        $output .= 'Delete';
                                                                        $output .= '</div>';

                                                                        $output .= '<div class="event-timing edit-btn" style="margin-right:10px;background:#007A64;color:#f1f1f1" data-event-id="' . $event_row["id"] . '" onclick="openEditModal(' . $event_row["id"] . ')">';
                                                                        $output .= 'Edit';
                                                                        $output .= '</div>';

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

                                                        <script>
                                                            $(document).ready(function() {
                                                                // Delete button click event
                                                                $('.delete-btn').on('click', function() {
                                                                    var eventId = $(this).data('event-id');
                                                                    if (confirm('Are you sure you want to delete this news?')) {
                                                                        // If user confirms deletion, send AJAX request to delete event
                                                                        $.ajax({
                                                                            url: 'delete_news.php',
                                                                            type: 'POST',
                                                                            data: {
                                                                                event_id: eventId
                                                                            },
                                                                            success: function(response) {
                                                                                // If deletion is successful, reload the page
                                                                                alert(response);
                                                                                window.location.reload();
                                                                            },
                                                                            error: function(xhr, status, error) {
                                                                                // If an error occurs, display an error message
                                                                                alert('Error deleting news: ' + error);
                                                                            }
                                                                        });
                                                                    }
                                                                });
                                                            });
                                                        </script>


                                                <tbody id="bodysuspended" style="display:none;">
                                                    <?php
                                                    // Assuming $con is your database connection
                                                    include 'db.php';

                                                    $sql = "SELECT user_img, user_name, user_email, password, user_ID FROM user WHERE status = 'Suspended'";
                                                    $result = mysqli_query($con, $sql);

                                                    if (mysqli_num_rows($result) > 0) {
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            echo "<tr>";
                                                            echo "<td>";
                                                            echo "<div class='d-flex'>";
                                                            echo "<img style='border-radius:100%;' src='../homepage/" . $row['user_img'] . "' alt='' class='img-2 mr-3'>";
                                                            echo "<div>";
                                                            echo "<h6 class='fs-16 mb-1'><a class='text-black'>" . $row['user_name'] . "</a></h6>";
                                                            echo "<span class='fs-14'>" . $row['user_email'] . "</span>";
                                                            echo "<div class='fs-14'>" . $row['password'] . "</div>";
                                                            echo "</div>";
                                                            echo "</div>";
                                                            echo "</td>";
                                                            echo "<td>";
                                                            echo "<div>";
                                                            echo "<p class='fs-14 mb-1'>&nbsp;</p>";
                                                            echo "<span class='text-primary font-w600 mb-auto'>&nbsp;</span>";
                                                            echo "</div>";
                                                            echo "</td>";
                                                            echo "<td>";
                                                            echo "<div style='margin-left:50px;'>";
                                                            echo "<p class='fs-14 mb-1'>Action</p>";
                                                            echo "<button type='button' class='btn btn-primary suspend-btn2' style='margin: 5px; background: #007A64; padding: 5px 20px; font-size: .9em' data-userid='" . $row['user_ID'] . "'>Remove Suspend</button>";
                                                            echo "</div>";
                                                            echo "</td>";
                                                            echo "</tr>";
                                                        }
                                                    }


                                                    echo "<script>
$(document).ready(function() {
    $('.suspend-btn2').on('click', function() {
        var userID = $(this).data('userid');

        $.ajax({
            url: 'removesuspend_user.php',
            type: 'POST',
            data: { user_ID: userID },
            success: function(response) {
                alert('Remove suspended successfully');
                window.location.reload();
            },
            error: function(xhr, status, error) {
                alert('Error suspending user: ' + error);
                // You can add further actions here, like displaying an error message
            }
        });
    });
});
</script>";

                                                    ?>


                                                </tbody>

                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © GreenSpace 2024</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->


    <script src="./vendor/global/global.min.js"></script>
    <script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="./vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="./js/custom.min.js"></script>
    <script src="./js/deznav-init.js"></script>
    <script src="vendor/bootstrap-datetimepicker/js/moment.js"></script>
    <script src="vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <!-- Chart piety plugin files -->
    <script src="./vendor/peity/jquery.peity.min.js"></script>

    <!-- Apex Chart -->
    <script src="./vendor/apexchart/apexchart.js"></script>

    <!-- Dashboard 1 -->
    <script src="./js/dashboard/dashboard-1.js"></script>
    <script>
        $(function() {
            $('#datetimepicker1').datetimepicker({
                inline: true,
            });
        });
    </script>
</body>

</html>