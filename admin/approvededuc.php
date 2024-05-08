<?php
date_default_timezone_set('Asia/Manila');
include("db.php");

// Update resource
$resourceID = $_POST["resourceID"];

// Update resource
$query = "UPDATE educational_resource SET status='approved' WHERE resourceID='$resourceID'";
$result = mysqli_query($con, $query);

if ($result) {
    // Resource updated successfully
    echo "Approve successfully!";
} else {
    // Error in updating
    echo "Update failed.";
}

?>
