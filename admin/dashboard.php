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
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
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
							<i class="fa-solid fa-gauge activeNav"></i>
							<span class="nav-text activeNav">Dashboard</span>
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

		<!--**********************************
            Content body start
        ***********************************-->



		<?php
		// Include your database connection file
		include 'db.php';

		// Query to count total users
		$sql_users = "SELECT COUNT(*) AS total_users FROM user";
		$result_users = mysqli_query($con, $sql_users);
		$total_users = 0;
		if ($result_users) {
			$row_users = mysqli_fetch_assoc($result_users);
			$total_users = $row_users['total_users'];
		}

		// Query to count total admin accounts
		$sql_admins = "SELECT COUNT(*) AS total_admins FROM admin_account";
		$result_admins = mysqli_query($con, $sql_admins);
		$total_admins = 0;
		if ($result_admins) {
			$row_admins = mysqli_fetch_assoc($result_admins);
			$total_admins = $row_admins['total_admins'];
		}

		// Close the database connection
		mysqli_close($con);
		?>

		<?php
		// Include your database connection file
		include 'db.php';

		// Query to count total shared links
		$sql_shared_links = "SELECT COUNT(*) AS total_shared_links FROM shared_clicks";
		$result_shared_links = mysqli_query($con, $sql_shared_links);
		$total_shared_links = 0;
		if ($result_shared_links) {
			$row_shared_links = mysqli_fetch_assoc($result_shared_links);
			$total_shared_links = $row_shared_links['total_shared_links'];
		}

		// Close the database connection
		mysqli_close($con);
		?>

		<div class="content-body">
			<!-- row -->
			<div class="container-fluid">
				<div class="form-head d-flex align-items-center mb-sm-4 mb-3">
					<div class="mr-auto">
						<h2 class="text-black font-w600">Dashboard</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-3">
										<h2 class="fs-34 text-black font-w600"><?php echo $total_admins; ?></h2>
										<span>Total Admins</span>
									</div>
									<i class="fas fa-user"></i>

								</div>
							</div>
							<div class="progress  rounded-0" style="height:4px;">
								<div class="progress-bar rounded-0 bg-primary progress-animated" style="width: 190%; height:4px;" role="progressbar">

								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3  col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-3">
										<h2 class="fs-34 text-black font-w600"><?php echo $total_users; ?></h2>

										<span>Total Users</span>
									</div>
									<i class="fas fa-users"></i>

								</div>
							</div>
							<div class="progress  rounded-0" style="height:4px;">
								<div class="progress-bar rounded-0 bg-primary progress-animated" style="width: 190%; height:4px;" role="progressbar">

								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3  col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-3">
										<h2 class="fs-34 text-black font-w600"><?php echo $total_shared_links; ?></h2>

										<span>Total Shared Link</span>
									</div>

									<i class="fas fa-link"></i>
								</div>
							</div>
							<div class="progress  rounded-0" style="height:4px;">
								<div class="progress-bar rounded-0 bg-primary progress-animated" style="width: 190%; height:4px;" role="progressbar">

								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="row">
					<div class="col-xl-6">
						<div class="row">
							<div class="col-xl-12">
								<div class="card">

									<div class="card-body">
										<div class="tab-content">
											<div class="tab-pane fade show active" id="Daily" role="tabpanel">
												<div class="d-flex flex-wrap align-items-center px-4 bg-light">
													<div class="mr-auto d-flex align-items-center py-3">
														<span class="heart-ai bg-primary mr-3">
															<i class="fa-solid fa-users"></i>
														</span>
														<div>
															<p class="fs-18 mb-2">Total Accounts</p>
															<span class="fs-26 text-primary font-w600">562,084</span>
														</div>
													</div>
													<ul class="users pl-3 py-2">
														<li><img src="images/users/1.png" alt=""></li>
														<li><img src="images/users/2.png" alt=""></li>
														<li><img src="images/users/3.png" alt=""></li>
														<li><img src="images/users/4.png" alt=""></li>
														<li><img src="images/users/5.png" alt=""></li>
													</ul>
												</div>
												<div class="row align-items-center">
													<div class="col-xl-6 col-xxl-12 col-md-6">
														<div id="radialBar"></div>
													</div>
													<div class="col-xl-6 col-xxl-12 col-md-6">
														<div class="d-flex mb-4 align-items-center">
															<span class="mr-auto pr-3 font-w500 fs-30 text-black">
																<svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#BDA25C" />
																</svg>
																64%
															</span>
															<span>New Patient</span>
														</div>
														<div class="d-flex  mb-4 align-items-center">
															<span class="mr-auto pr-3 font-w500 fs-30 text-black">
																<svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#209F84" />
																</svg>
																73%
															</span>
															<span>Recovered</span>
														</div>
														<div class="d-flex align-items-center">
															<span class="mr-auto pr-3 font-w500 fs-30 text-black">
																<svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#323232" />
																</svg>
																48%
															</span>
															<span>In Treatment</span>
														</div>
													</div>
												</div>
											</div>



										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-xxl-12 col-md-6">
								<div class="card">
									<div class="card-header d-block border-0 pb-0">
										<div class="d-flex mb-3">
											<h3 class="fs-20 text-black mb-0">Patient Overview</h3>
											<div class="dropdown ml-auto">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M13.0001 12C13.0001 11.4477 12.5523 11 12.0001 11C11.4478 11 11.0001 11.4477 11.0001 12C11.0001 12.5523 11.4478 13 12.0001 13C12.5523 13 13.0001 12.5523 13.0001 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
														<path d="M6.00006 12C6.00006 11.4477 5.55235 11 5.00006 11C4.44778 11 4.00006 11.4477 4.00006 12C4.00006 12.5523 4.44778 13 5.00006 13C5.55235 13 6.00006 12.5523 6.00006 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
														<path d="M20.0001 12C20.0001 11.4477 19.5523 11 19.0001 11C18.4478 11 18.0001 11.4477 18.0001 12C18.0001 12.5523 18.4478 13 19.0001 13C19.5523 13 20.0001 12.5523 20.0001 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item text-black" href="javascript:;">Info</a>
													<a class="dropdown-item text-black" href="javascript:;">Details</a>
												</div>
											</div>
										</div>
										<div class="d-flex">
											<div class="d-flex mr-auto align-items-center">
												<svg width="12" height="54" viewBox="0 0 12 54" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="12" height="54" fill="#BDA25C" />
												</svg>
												<div class="ml-2">
													<p class="mb-1">New</p>
													<span class="text-black font-w500">451</span>
												</div>
											</div>
											<div class="d-flex align-items-center">
												<svg width="12" height="54" viewBox="0 0 12 54" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="12" height="54" fill="#209F84" />
												</svg>
												<div class="ml-2">
													<p class="mb-1">Recovered</p>
													<span class="text-black font-w500">623</span>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body p-0">
										<div id="chartTimeline"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-xxl-12 col-md-6">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h3 class="fs-20 text-black mb-0">Visitors</h3>
										<div class="dropdown ml-auto">
											<div class="btn-link" data-toggle="dropdown">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M13.0001 12C13.0001 11.4477 12.5523 11 12.0001 11C11.4478 11 11.0001 11.4477 11.0001 12C11.0001 12.5523 11.4478 13 12.0001 13C12.5523 13 13.0001 12.5523 13.0001 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
													<path d="M6.00006 12C6.00006 11.4477 5.55235 11 5.00006 11C4.44778 11 4.00006 11.4477 4.00006 12C4.00006 12.5523 4.44778 13 5.00006 13C5.55235 13 6.00006 12.5523 6.00006 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
													<path d="M20.0001 12C20.0001 11.4477 19.5523 11 19.0001 11C18.4478 11 18.0001 11.4477 18.0001 12C18.0001 12.5523 18.4478 13 19.0001 13C19.5523 13 20.0001 12.5523 20.0001 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
												</svg>
											</div>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item text-black" href="javascript:;">Info</a>
												<a class="dropdown-item text-black" href="javascript:;">Details</a>
											</div>
										</div>
									</div>
									<div class="card-body pb-0">
										<ul class="users-sm mb-3">
											<li><img src="images/users/6.png" alt=""></li>
											<li><img src="images/users/7.png" alt=""></li>
											<li><img src="images/users/8.png" alt=""></li>
											<li><img src="images/users/9.png" alt=""></li>
											<li><img src="images/users/10.png" alt=""></li>
										</ul>
										<div class="d-flex align-items-center">
											<svg class="mr-3" width="30" height="19" viewBox="0 0 30 19" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M28.8124 0.990788C29.6459 1.71558 29.734 2.97884 29.0092 3.81236L20.2578 13.8765C18.859 15.4851 16.4444 15.7141 14.7681 14.397L10.6176 11.1359L3.37074 17.9564C2.56639 18.7134 1.30064 18.6751 0.543606 17.8707C-0.213427 17.0664 -0.175071 15.8006 0.629276 15.0436L7.8761 8.22306C9.317 6.86692 11.5329 6.76809 13.0888 7.99059L17.2394 11.2517L25.9908 1.18764C26.7156 0.354128 27.9788 0.265993 28.8124 0.990788Z" fill="#007A64" />
											</svg>
											<div>
												<p class="fs-12 mb-0">Customer</p>
												<span class="fs-22 text-black font-w600">765 Person</span>
											</div>
										</div>
										<div id="lineChart"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card rated-doctors">
									<div class="card-header border-0 pb-0">
										<h3 class="fs-20 text-black mb-0 mr-auto">Top Rated Doctors</h3>
										<a href="javascript:void(0)" class="btn-link">More >></a>
									</div>
									<div class="card-body">
										<div class="d-sm-flex pb-sm-4 pb-3 border-bottom mb-sm-4 mb-3 align-items-center">
											<div class="d-flex align-items-center mr-auto pr-2">
												<span class="num mr-sm-4 mr-3">#1</span>
												<img src="images/users/1.jpg" class="img-1 mr-sm-4 mr-3" alt="">
												<div>
													<h4 class="mb-sm-2 mb-1"><a href="doctor.html" class="text-black">Dr. Samantha Queque</a></h4>
													<span class="fs-14 text-primary font-w600">Gynecologist</span>
												</div>
											</div>
											<div class="text-sm-right mt-sm-0 mt-3 star-review">
												<ul>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
												</ul>
												<span class="fs-14 text-black">315 reviews</span>
											</div>
										</div>
										<div class="d-sm-flex pb-sm-4 pb-3 border-bottom mb-sm-4 mb-3 align-items-center">
											<div class="d-flex align-items-center mr-auto pr-2">
												<span class="num mr-sm-4 mr-3">#2</span>
												<img src="images/users/2.jpg" class="img-1 mr-sm-4 mr-3" alt="">
												<div>
													<h4 class="mb-sm-2 mb-1"><a href="doctor.html" class="text-black">Dr. Samuel Jr.</a></h4>
													<span class="fs-14 text-primary font-w600">Gynecologist</span>
												</div>
											</div>
											<div class="text-sm-right mt-sm-0 mt-3 star-review">
												<ul>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
												</ul>
												<span class="fs-14 text-black">221 reviews</span>
											</div>
										</div>
										<div class="d-sm-flex pb-sm-4 pb-3 border-bottom mb-sm-4 mb-3 align-items-center">
											<div class="d-flex align-items-center mr-auto pr-2">
												<span class="num mr-sm-4 mr-3">#3</span>
												<img src="images/users/3.jpg" class="img-1 mr-sm-4 mr-3" alt="">
												<div>
													<h4 class="mb-sm-2 mb-1"><a href="doctor.html" class="text-black">Dr. Jennifer Ruby</a></h4>
													<span class="fs-14 text-primary font-w600">Gynecologist</span>
												</div>
											</div>
											<div class="text-sm-right mt-sm-0 mt-3 star-review">
												<ul>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
												</ul>
												<span class="fs-14 text-black">181 reviews</span>
											</div>
										</div>
										<div class="d-sm-flex pb-sm-4 pb-3 border-bottom mb-sm-4 mb-3 align-items-center">
											<div class="d-flex align-items-center mr-auto pr-2">
												<span class="num mr-sm-4 mr-3">#4</span>
												<img src="images/users/4.jpg" class="img-1 mr-sm-4 mr-3" alt="">
												<div>
													<h4 class="mb-sm-2 mb-1"><a href="doctor.html" class="text-black">Dr. Abdul Aziz Lazis</a></h4>
													<span class="fs-14 text-primary font-w600">Gynecologist</span>
												</div>
											</div>
											<div class="text-sm-right mt-sm-0 mt-3 star-review">
												<ul>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
												</ul>
												<span class="fs-14 text-black">315 reviews</span>
											</div>
										</div>
										<div class="d-sm-flex pb-sm-4 pb-3 border-bottom mb-sm-4 mb-3 align-items-center">
											<div class="d-flex align-items-center mr-auto pr-2">
												<span class="num mr-sm-4 mr-3">#5</span>
												<img src="images/users/5.jpg" class="img-1 mr-sm-4 mr-3" alt="">
												<div>
													<h4 class="mb-sm-2 mb-1"><a href="doctor.html" class="text-black">Dr. Alex Siauw</a></h4>
													<span class="fs-14 text-primary font-w600">Gynecologist</span>
												</div>
											</div>
											<div class="text-sm-right mt-sm-0 mt-3 star-review">
												<ul>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
												</ul>
												<span class="fs-14 text-black">176 reviews</span>
											</div>
										</div>
										<div class="d-sm-flex pb-0 align-items-center">
											<div class="d-flex align-items-center mr-auto pr-2">
												<span class="num mr-sm-4 mr-3">#6</span>
												<img src="images/users/1.jpg" class="img-1 mr-sm-4 mr-3" alt="">
												<div>
													<h4 class="mb-sm-2 mb-1"><a href="doctor.html" class="text-black">Dr. Abdul Aziz Lazis</a></h4>
													<span class="fs-14 text-primary font-w600">Gynecologist</span>
												</div>
											</div>
											<div class="text-sm-right mt-sm-0 mt-3 star-review">
												<ul>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
												</ul>
												<span class="fs-14 text-black">315 reviews</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="row">
							<div class="col-xl-12">
								<div class="card appointment-schedule">
									<div class="card-header pb-0 border-0">
										<h3 class="fs-20 text-black mb-0">Appointment Schedule</h3>
										<div class="dropdown ml-auto">
											<div class="btn-link p-2 bg-light" data-toggle="dropdown">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
													<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
													<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
												</svg>
											</div>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item text-black" href="javascript:;">Info</a>
												<a class="dropdown-item text-black" href="javascript:;">Details</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-xl-6 col-xxl-12 col-md-6">
												<div class="appointment-calender">
													<input type='text' class="form-control d-none" id='datetimepicker1' />
												</div>
											</div>
											<div class="col-xl-6 col-xxl-12  col-md-6 height415 dz-scroll" id="appointment-schedule">
												<div class="d-flex pb-3 border-bottom mb-3 align-items-end">
													<div class="mr-auto">
														<p class="text-black font-w600 mb-2">Wednesday, June 3th</p>
														<ul>
															<li><i class="las la-clock"></i>09:00 - 10:30 AM</li>
															<li><i class="las la-user"></i>Dr. Samantha</li>
														</ul>
													</div>
													<a href="javascript:void(0)" class="text-success mr-3 mb-2">
														<i class="las la-check-circle scale5"></i>
													</a>
													<a href="javascript:void(0)" class="text-danger mb-2">
														<i class="las la-times-circle scale5"></i>
													</a>
												</div>
												<div class="d-flex pb-3 border-bottom mb-3 align-items-end">
													<div class="mr-auto">
														<p class="text-black font-w600 mb-2">Tuesday, June 16th</p>
														<ul>
															<li><i class="las la-clock"></i>09:00 - 10:30 AM</li>
															<li><i class="las la-user"></i>Dr. Samantha</li>
														</ul>
													</div>
													<a href="javascript:void(0)" class="text-success mr-3 mb-2">
														<i class="las la-check-circle scale5"></i>
													</a>
													<a href="javascript:void(0)" class="text-danger mb-2">
														<i class="las la-times-circle scale5"></i>
													</a>
												</div>
												<div class="d-flex pb-3 border-bottom mb-3 align-items-end">
													<div class="mr-auto">
														<p class="text-black font-w600 mb-2">Saturday, June 27th</p>
														<ul>
															<li><i class="las la-clock"></i>09:00 - 10:30 AM</li>
															<li><i class="las la-user"></i>Dr. Samantha</li>
														</ul>
													</div>
													<a href="javascript:void(0)" class="text-success mr-3 mb-2">
														<i class="las la-check-circle scale5"></i>
													</a>
													<a href="javascript:void(0)" class="text-danger mb-2">
														<i class="las la-times-circle scale5"></i>
													</a>
												</div>
												<div class="d-flex pb-3 border-bottom mb-3 align-items-end">
													<div class="mr-auto">
														<p class="text-black font-w600 mb-2">Wednesday, June 3th</p>
														<ul>
															<li><i class="las la-clock"></i>09:00 - 10:30 AM</li>
															<li><i class="las la-user"></i>Dr. Samantha</li>
														</ul>
													</div>
													<a href="javascript:void(0)" class="text-success mr-3 mb-2">
														<i class="las la-check-circle scale5"></i>
													</a>
													<a href="javascript:void(0)" class="text-danger mb-2">
														<i class="las la-times-circle scale5"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h3 class="fs-20 text-black mb-0 mr-2">Revenue Summary</h3>
										<div class="dropdown mt-sm-0 mt-3">
											<button type="button" class="btn bg-light text-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
												2020
											</button>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="javascript:void(0);">2020</a>
												<a class="dropdown-item" href="javascript:void(0);">2021</a>
												<a class="dropdown-item" href="javascript:void(0);">2022</a>
											</div>
										</div>
									</div>
									<div class="card-body pt-0">
										<div id="chartBar"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card patient-activity">
									<div class="card-header border-0 pb-0">
										<h3 class="fs-20 text-black mb-0">Recent Patient Activity</h3>
										<div class="dropdown ml-auto">
											<div class="btn-link" data-toggle="dropdown">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M13.0001 12C13.0001 11.4477 12.5523 11 12.0001 11C11.4478 11 11.0001 11.4477 11.0001 12C11.0001 12.5523 11.4478 13 12.0001 13C12.5523 13 13.0001 12.5523 13.0001 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													<path d="M6.00006 12C6.00006 11.4477 5.55235 11 5.00006 11C4.44778 11 4.00006 11.4477 4.00006 12C4.00006 12.5523 4.44778 13 5.00006 13C5.55235 13 6.00006 12.5523 6.00006 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													<path d="M20.0001 12C20.0001 11.4477 19.5523 11 19.0001 11C18.4478 11 18.0001 11.4477 18.0001 12C18.0001 12.5523 18.4478 13 19.0001 13C19.5523 13 20.0001 12.5523 20.0001 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</div>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item text-black" href="javascript:;">Info</a>
												<a class="dropdown-item text-black" href="javascript:;">Details</a>
											</div>
										</div>
									</div>
									<div class="card-body pb-0">
										<div class="table-responsive height720 dz-scroll" id="patient-activity">
											<table class="table table-responsive-sm">
												<tbody>
													<tr>
														<td>
															<div class="d-flex">
																<img src="images/users/6.jpg" alt="" class="img-2 mr-3">
																<div>
																	<h6 class="fs-16 mb-1"><a href="patient.html" class="text-black">Roby Romeo</a></h6>
																	<span class="fs-14">41 Years Old</span>
																</div>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Disease</p>
																<span class="text-primary font-w600 mb-auto">Allergies & Asthma</span>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Status</p>
																<span class="text-primary font-w600 mb-2 d-block text-nowrap">Recovered</span>
																<p class="mb-0 fs-12">22/03/2020 12:34 AM</p>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex">
																<img src="images/users/7.jpg" alt="" class="img-2 mr-3">
																<div>
																	<h6 class="fs-16 mb-1"><a href="patient.html" class="text-black">Angela Nurhayati</a></h6>
																	<span class="fs-14">21 Years Old</span>
																</div>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Disease</p>
																<span class="text-primary font-w600 mb-auto">Sleep Problem</span>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Status</p>
																<span class="text-danger font-w600 mb-2 text-nowrap d-block">New Patient</span>
																<p class="mb-0 fs-12">22/03/2020 12:34 AM</p>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex">
																<img src="images/users/8.jpg" alt="" class="img-2 mr-3">
																<div>
																	<h6 class="fs-16 mb-1"><a href="patient.html" class="text-black">James Robinson</a></h6>
																	<span class="fs-14">41 Years Old</span>
																</div>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Disease</p>
																<span class="text-primary font-w600 mb-auto">Dental Care</span>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Status</p>
																<span class="text-warning font-w600 mb-2 text-nowrap d-block">In Treatment</span>
																<p class="mb-0 fs-12">22/03/2020 12:34 AM</p>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex">
																<img src="images/users/9.jpg" alt="" class="img-2 mr-3">
																<div>
																	<h6 class="fs-16 mb-1"><a href="patient.html" class="text-black">Thomas Jaja</a></h6>
																	<span class="fs-14">7 Years Old</span>
																</div>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Disease</p>
																<span class="text-primary font-w600 mb-auto">Diabetes</span>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Status</p>
																<span class="text-danger font-w600 mb-2 text-nowrap d-block">New Patient</span>
																<p class="mb-0 fs-12">22/03/2020 12:34 AM</p>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex">
																<img src="images/users/10.jpg" alt="" class="img-2 mr-3">
																<div>
																	<h6 class="fs-16 mb-1"><a href="patient.html" class="text-black">Cindy Brownleee</a></h6>
																	<span class="fs-14">71 Years Old</span>
																</div>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Disease</p>
																<span class="text-primary font-w600 mb-auto">Covid-19 Suspect</span>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Status</p>
																<span class="text-warning font-w600 text-nowrap mb-2 d-block">In Treatment</span>
																<p class="mb-0 fs-12">22/03/2020 12:34 AM</p>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex">
																<img src="images/users/11.jpg" alt="" class="img-2 mr-3">
																<div>
																	<h6 class="fs-16 mb-1"><a href="patient.html" class="text-black">Oconner Jr.</a></h6>
																	<span class="fs-14">17 Years Old</span>
																</div>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Disease</p>
																<span class="text-primary font-w600 mb-auto">Dental Care</span>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Status</p>
																<span class="text-primary font-w600 mb-2 text-nowrap d-block">Recovered</span>
																<p class="mb-0 fs-12">22/03/2020 12:34 AM</p>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex">
																<img src="images/users/7.jpg" alt="" class="img-2 mr-3">
																<div>
																	<h6 class="fs-16 mb-1"><a href="patient.html" class="text-black">Angela Nurhayati</a></h6>
																	<span class="fs-14">21 Years Old</span>
																</div>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Disease</p>
																<span class="text-primary font-w600 mb-auto">Sleep Problem</span>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Status</p>
																<span class="text-danger font-w600 mb-2 text-nowrap d-block">New Patient</span>
																<p class="mb-0 fs-12">22/03/2020 12:34 AM</p>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex">
																<img src="images/users/8.jpg" alt="" class="img-2 mr-3">
																<div>
																	<h6 class="fs-16 mb-1"><a href="patient.html" class="text-black">James Robinson</a></h6>
																	<span class="fs-14">41 Years Old</span>
																</div>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Disease</p>
																<span class="text-primary font-w600 mb-auto">Dental Care</span>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Status</p>
																<span class="text-warning font-w600 mb-2 d-block text-nowrap">In Treatment</span>
																<p class="mb-0 fs-12">22/03/2020 12:34 AM</p>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex">
																<img src="images/users/9.jpg" alt="" class="img-2 mr-3">
																<div>
																	<h6 class="fs-16 mb-1"><a href="patient.html" class="text-black">Thomas Jaja</a></h6>
																	<span class="fs-14">7 Years Old</span>
																</div>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Disease</p>
																<span class="text-primary font-w600 mb-auto">Diabetes</span>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Status</p>
																<span class="text-danger font-w600 mb-2 d-block text-nowrap">New Patient</span>
																<p class="mb-0 fs-12">22/03/2020 12:34 AM</p>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="card-footer text-center border-0">
										<a href="patient.html" class="btn-link">See More >></a>
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
				<p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2020</p>
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