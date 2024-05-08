<?php
// Include your database connection file
include 'db.php';

// Check if the event ID and new event data are provided via POST
if (isset($_POST['event_id']) && isset($_POST['new_title']) && isset($_POST['new_description']) && isset($_POST['new_timing'])) {
    // Sanitize the input to prevent SQL injection
    $event_id = mysqli_real_escape_string($con, $_POST['event_id']);
    $new_title = mysqli_real_escape_string($con, $_POST['new_title']);
    $new_description = mysqli_real_escape_string($con, $_POST['new_description']);
    $new_timing = mysqli_real_escape_string($con, $_POST['new_timing']);

    $timing_12h = date('h:i a', strtotime($new_timing));

    // Construct the UPDATE query
    $sql = "UPDATE events SET title = '$new_title', description = '$new_description', timing = '$timing_12h' WHERE id = '$event_id'";

    // Execute the UPDATE query
    if (mysqli_query($con, $sql)) {
        // If the query is successful, return a success message
        echo "Event updated successfully";
    } else {
        // If there's an error, return an error message
        echo "Error updating event: " . mysqli_error($con);
    }
} else {
    // If event ID or new event data are not provided, return an error message
    echo "Event ID or new event data not provided";
}

// Close the database connection
mysqli_close($con);
