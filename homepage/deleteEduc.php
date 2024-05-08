<?php
include("db.php");

// Check if resourceID is set in the POST data
if(isset($_POST["resourceID"])) {
    // Sanitize the input to prevent SQL injection
    $resourceID = mysqli_real_escape_string($con, $_POST["resourceID"]);

    // Delete resource
    $query = "DELETE FROM educational_resource WHERE resourceID='$resourceID'";
    $result = mysqli_query($con, $query);

    if ($result) {
        // Resource deleted successfully
        echo json_encode(array("message" => "Deleted Successfully!"));
    } else {
        // Error in deleting
        echo json_encode(array("message" => "Deletion failed."));
    }
} else {
    // Error: resourceID not provided
    echo json_encode(array("message" => "Missing resourceID."));
}
?>
