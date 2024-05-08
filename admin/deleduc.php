<?php
    include 'db.php';
// Check if the resourceID parameter is set and not empty
if (isset($_POST['resourceID']) && !empty($_POST['resourceID'])) {
    $resourceID = $_POST['resourceID'];

    // Perform the deletion operation (assuming $con is your database connection)
    $sql = "DELETE FROM educational_resource WHERE resourceID = $resourceID";
    if (mysqli_query($con, $sql)) {
        echo "Resource deleted successfully";
    } else {
        echo "Error deleting resource: " . mysqli_error($con);
    }
} else {
    echo "Invalid request";
}
?>
