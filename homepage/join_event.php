<?php
include 'db.php';

// Initialize response array
$response = array();

// Check if event ID and user ID are received
if (isset($_GET['event_id']) && isset($_GET['user_id'])) {
    $event_id = $_GET['event_id'];
    $user_id = $_GET['user_id'];

    // Check if the user has already joined this event
    $check_sql = "SELECT COUNT(*) AS count FROM join_users WHERE event_id = '$event_id' AND user_id = '$user_id'";
    $check_result = $con->query($check_sql);

    if ($check_result) {
        $check_row = $check_result->fetch_assoc();
        if ($check_row['count'] > 0) {
            // User has already joined this event
            $response['success'] = false;
            $response['message'] = "You have already joined this event.";
        } else {
            // Insert into event registration table
            $insert_sql = "INSERT INTO join_users (event_id, user_id, registration_date) VALUES ('$event_id', '$user_id', NOW())";

            if ($con->query($insert_sql) === TRUE) {
                // Registration successful
                $response['success'] = true;
                $response['message'] = "You successfully joined this event. We will contact you in your email for more info";
            } else {
                // Error occurred
                $response['success'] = false;
                $response['message'] = "Error: " . $con->error;
            }
        }
    } else {
        // Error occurred while checking if the user has already joined
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
