<?php
// Include your database connection file
include 'db.php';

// Check if the event ID is provided via POST
if(isset($_POST['event_id'])) {
    // Sanitize the input to prevent SQL injection
    $event_id = mysqli_real_escape_string($con, $_POST['event_id']);

    // Construct the DELETE query
    $sql = "DELETE FROM events WHERE id = '$event_id'";

    // Execute the DELETE query
    if(mysqli_query($con, $sql)) {
        // If the query is successful, return a success message
        echo "Event deleted successfully";
    } else {
        // If there's an error, return an error message
        echo "Error deleting event: " . mysqli_error($con);
    }
} else {
    // If event ID is not provided, return an error message
    echo "Event ID not provided";
}

// Close the database connection
mysqli_close($con);
?>
