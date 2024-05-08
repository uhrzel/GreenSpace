<?php
// Start session
session_start();

// Check if user is not logged in
if (!isset($_SESSION["adminloggedin"]) || $_SESSION["adminloggedin"] !== true) {
    // Redirect to login page
    header("Location: index.html");
    exit;
}


  // Include the database connection file
    include 'db.php';

   function getCount($con, $table, $status) {
    $status = mysqli_real_escape_string($con, $status); // Escape the status variable
    $sql = "SELECT COUNT(*) as count FROM $table WHERE status = '$status'";
    $result = mysqli_query($con, $sql);
    if (!$result) {
        die("Error: " . mysqli_error($con));
    }
    $count = mysqli_fetch_assoc($result);
    return $count['count'];
}

$pendingCount = getCount($con, 'educational_resource', 'pending');

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
	  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<style type="text/css">
	
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
      	.activeNav { color:#007A64 }
      	ul li { cursor:pointer; }
      </style>
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a href="dashboard">
							<i class="fa-solid fa-gauge"></i>
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

        <style>
        	    .cases-img { height:200px; width:100%; }
    .cases-img img { margin:0px; height:100%; width:100% }
    .truncate {
display: -webkit-box;
  -webkit-box-orient: vertical;
  overflow: hidden;
  -webkit-line-clamp: 8; 
  font-family: 'Poppins';
}


.editcentercon { margin: 10px auto; height:auto; padding-top: 10px;  max-width:300px; width: 90%; background:#f1f1f1; border-radius:20px; }

.editcenterimg { position: relative; margin:auto; width:95%; height:170px; background: transparent; border-radius: 14px;}
.editcenterimg img { margin: 0px; height: 100%; width: 100%;  background-position:top; background-size: cover}

.editfortitle {
    position: absolute; bottom: -25px; left: 50%; transform: translate(-50%, 0px); width: 95%; height: 50px; background: aqua; border-top-left-radius:7px; border-top-right-radius:7px; overflow: hidden;
}

.editfortitle input { margin:0px; height:100%; width:100%; border:none; outline:none; padding-left: 10px; padding-right: 10px;}

.editforcontent { margin:50px auto; width:90%; height:200px; margin-bottom: 0px; background:transparent; border-bottom-left-radius:7px; border-bottom-right-radius:7px; }

.editforcontent textarea { margin:0px; height:100%; padding: 10px; width:100%; border:none;border-bottom-left-radius:7px; border-bottom-right-radius:7px; outline:none; padding-left: 10px;}

.editforbtn { margin:10px auto; display:flex; justify-content:center; }

#btnflex { display:none; }

@media (max-width: 768px) {
  #btnflex { display:flex; }
  #approvediv {
   display: none;
    /* Add other styles as needed */
  }

  #pendingdiv { display:block; }


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
						<h2 class="text-black font-w600">All Pendings</h2>

						<div style="width:100%; justify-content:center" id="btnflex">
						<button type="button" class="btn btn-primary" style="margin: 5px; padding: 5px 20px; font-size: .9em;  color: #f1f1f1; border: none; box-shadow: none;" id="btnpending" onclick="displayPending()">Pending</button>
						</div>

						<script type="text/javascript">

							function displayPending(){
								let btnpending = document.getElementById('btnpending');
								btnpending.style.background = '#007A64';
								btnpending.style.color = '#f1f1f1';

								let btnapproved = document.getElementById('btnapproved');
								btnapproved.style.background = 'transparent';
								btnapproved.style.color = '#19181a';

								document.getElementById('approvediv').style.display = 'none';
								document.getElementById('pendingdiv').style.display = 'block';
								

							}

							function displayApproved(){
								let btnapproved = document.getElementById('btnapproved');
								btnapproved.style.background = '#007A64';
								btnapproved.style.color = '#f1f1f1';

								let btnpending = document.getElementById('btnpending');
								btnpending.style.background = 'transparent';
								btnpending.style.color = '#19181a';

								document.getElementById('approvediv').style.display = 'block';
								document.getElementById('pendingdiv').style.display = 'none';

							}

							



						</script>

					</div>
				</div>
											
<?php
include 'db.php';

// Fetch records from the educational_resource table
$query = "SELECT er.`resourceID`, er.`title`, er.`content`, er.`date_posted`, er.`user_ID`, er.`img`, u.`user_name`
          FROM `educational_resource` er
          INNER JOIN `user` u ON er.`user_ID` = u.`user_ID`
          WHERE er.`status` = 'approved'";



$result = mysqli_query($con, $query);

while ($resource = mysqli_fetch_assoc($result)) {
?>
    
<?php
}

echo "<script>
 function deleteResource(resourceID) {
            if (confirm('Are you sure you want to delete this resource?')) {
                $.ajax({
                    url: 'deleduc.php',
                    type: 'POST',
                    data: { resourceID: resourceID },
                    success: function(response) {
                        alert(response); // Show the response from the server
                        window.location.reload(); // Reload the page
                    },
                    error: function(xhr, status, error) {
                        alert('Error deleting resource: ' + error); // Show an error message
                    }
                });
            }
        }

        $(document).ready(function() {
       

            $(document).on('submit', '.editform2', function(event) {
                event.preventDefault(); // Prevent the default form submission

                // Create a FormData object from the form
                var formData = new FormData($(this)[0]);

                $.ajax({
                    url: 'editeduc.php',
                    type: 'POST',
                    data: formData,
                    async: true,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        // Display the message in an alert
                        alert(data);
                        // Remove the following line if you don't want to reload the page
                        window.location.reload(); // Reload the page
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            });
        });
    </script>";


mysqli_free_result($result);
mysqli_close($con);
?>


<script>
// const mediaQuery = window.matchMedia('(max-width: 768px)');
// const row = document.getElementById('myRow');

// function handleViewportChange() {
//   if (mediaQuery.matches) {
//     // Mobile view
//     if (row && row.classList.contains('flex-row-reverse')) {
//       row.classList.remove('flex-row-reverse');
//     }
//   } else {
//     // Desktop view
//     if (row && !row.classList.contains('flex-row-reverse')) {
//       row.classList.remove('flex-row-reverse');
//     }
//   }
// }

// // Run the function every second
// setInterval(handleViewportChange, 1000);





function updateDate() {
    // Get the current date and time in UTC
    const now = new Date();

    // Adjust the time to GMT+8 (Philippines timezone)
    now.setUTCHours(now.getUTCHours() + 8);

    // Format the date and time for display
    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric', second: 'numeric', hour12: true };
    const dateFormatted = new Intl.DateTimeFormat('en-PH', options).format(now);

    // Update the input value
    document.getElementById('date').value = dateFormatted;
}

// Update the date initially
updateDate();

// Update the date every second
setInterval(updateDate, 1000);


    
    






    function changeImage(event, resourceId) {
        var input = event.target;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                var imgSrc = document.getElementById('editimgsrc' + resourceId);
                imgSrc.style.backgroundImage = 'url(' + e.target.result + ')';
                var fileNameSelected = document.getElementById('fileNameSelected' + resourceId);
                fileNameSelected.value = input.files[0].name;
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

					<div class="col-xl-100" id="pendingdiv">
						<div class="row" >
							
						
							<div class="col-xl-12" >	
								<div class="card patient-activity">
									<div class="card-header border-0 pb-0">
										<h2 class="fs-50 text-black mb-0">Pending</h2>
										<div class="dropdown ml-auto">
											
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item text-black" href="javascript:;">Info</a>
												<a class="dropdown-item text-black" href="javascript:;">Details</a>
											</div>
										</div>
									</div>
										<div class="card-body" style="display: flex;flex-wrap: wrap;">


<?php
include 'db.php';

// Fetch records from the educational_resource table
$query = "SELECT er.`resourceID`, er.`title`, er.`content`, er.`date_posted`, er.`user_ID`, er.`img`, u.`user_name`
          FROM `educational_resource` er
          INNER JOIN `user` u ON er.`user_ID` = u.`user_ID`
          WHERE er.`status` = 'pending'";



$result = mysqli_query($con, $query);

while ($resource = mysqli_fetch_assoc($result)) {
?>
    <div class="editcentercon">
        <form class="editform" autocomplete="off" style="" enctype='multipart/form-data' action="approvededuc.php" method="POST">
            <div class="editcenterimg">
                <img style="background-image:url('../uploadEducRes/<?php echo $resource['img']; ?>'); background-position: center; border-radius: 15px; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px; border:none;outline: none;">
                <input readonly type="file" name="img" accept="image/*" onchange="changeImage(event, '<?php echo $resource['resourceID']; ?>')" style="position: absolute; left: -500000px; opacity: 0">
                <input readonly type="text"  name="filename" value="<?php echo $resource['img']; ?>" style="position: absolute; left: -500000px; opacity: 0">


                <input readonly  name="resourceID" value="<?php echo $resource['resourceID']; ?>" style="position: absolute; left: -500000px; opacity: 0">
                <input readonly name="user_ID" value="<?php echo $resource['user_ID']; ?>" style="position: absolute; left: -500000px; opacity: 0">
                <div class="editfortitle"><input readonly  name="title" value="<?php echo $resource['title']; ?>"></div>
            </div>

            <div class="editforcontent"><textarea readonly name="content"><?php echo $resource['content']; ?></textarea></div>

            <div style="font-size: .9em;padding-left:16px;margin-top: 10px;">From: <?php echo $resource['user_name']; ?></div>
            <div style="font-size: .9em;padding-left:16px;">Date: <?php echo date('F j, Y', strtotime($resource['date_posted'])); ?></div>
          

            <div class="editforbtn">
                <button type="button" class="btn btn-primary" style="margin: 5px; background: red;  outline: none; border:none; padding: 8px; border-radius:5px;  font-size: .8em" name="delete" onclick="deleteResource(<?php echo $resource['resourceID']; ?>)">Delete</button>
                <button type="submit" class="btn btn-primary" style="margin: 5px;  outline: none; border:none; padding: 8px 20px; border-radius:5px;  font-size: .8em">Approve</button>
            </div>
        </form>


    </div>



<?php
}

    
    echo "<script>

     function deleteResource(resourceID) {
            if (confirm('Are you sure you want to delete this resource?')) {
                $.ajax({
                    url: 'deleduc.php',
                    type: 'POST',
                    data: { resourceID: resourceID },
                    success: function(response) {
                        alert(response); // Show the response from the server
                        window.location.reload(); // Reload the page
                    },
                    error: function(xhr, status, error) {
                        alert('Error deleting resource: ' + error); // Show an error message
                    }
                });
            }
        }
        

        
        $(document).ready(function() {
            $(document).on('submit', '.editform', function(event) {
                event.preventDefault(); // Prevent the default form submission

                // Create a FormData object from the form
                var formData = new FormData($(this)[0]);

                $.ajax({
                    url: 'approvededuc.php',
                    type: 'POST',
                    data: formData,
                    async: true,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        // Display the message in an alert
                        alert(data);
                        // Remove the following line if you don't want to reload the page
                        window.location.reload(); // Reload the page
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            });
        });
    </script>";


mysqli_free_result($result);
mysqli_close($con);
?>


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
                <p>Copyright © <a >GreenSpace</a> 2024</p>
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
		$(function () {
			$('#datetimepicker1').datetimepicker({
				inline: true,
			});
		});
	</script>
</body>
</html>