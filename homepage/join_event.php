<?php
include 'db.php';

// Initialize response array
$response = array();

// Check if event ID and user ID are received
if (isset($_GET['event_id']) && isset($_GET['user_id'])) {
    $event_id = $_GET['event_id'];
    $user_id = $_GET['user_id'];

    // Insert into event registration table
    $insert_sql = "INSERT INTO join_users (event_id, user_id, registration_date) VALUES ('$event_id', '$user_id', NOW())";

    if ($con->query($insert_sql) === TRUE) {
        // Registration successful
        $response['success'] = true;
        $response['message'] = "You successfully joined this event. We will contact you in your email for more info.";
    } else {
        // Error occurred
        $response['success'] = false;
        $response['message'] = "Error: " . $con->error;
    }
} else {
    // Parameters not received
    $response['success'] = false;
    $response['message'] = "Event ID and/or User ID not provided.";
}

// Close database connection
$con->close();

// Send response as JSON
echo json_encode($response);
