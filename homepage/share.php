<?php
// Include your database connection file
include 'db.php';

// Initialize variable to track if sharing was successful
$sharedSuccess = false;

// Check if the share button is clicked
if (isset($_POST['shareButton'])) {
    // Retrieve resourceID and user_ID from the POST data
    $resourceID = $_POST['resourceID'];
    $user_ID = $_POST['user_ID'];

    // Prepare and execute the SQL statement to insert a new record into shared_clicks table
    $sql_insert_click = "INSERT INTO shared_clicks (resourceID, user_ID) VALUES (?, ?)";
    $stmt = $con->prepare($sql_insert_click);
    $stmt->bind_param("ii", $resourceID, $user_ID);
    $stmt->execute();

    // Check if the record is inserted successfully
    if ($stmt->affected_rows > 0) {
        // Set sharedSuccess to true
        $sharedSuccess = true;
    } else {
        echo "Failed to insert shared click record.";
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the database connection
$con->close();

// Display JavaScript alert if sharing was successful
if ($sharedSuccess) {
    echo "<script>alert('Link copied to clipboard');</script>";
    // Redirect to ViewEducRes.php after displaying the alert
    echo "<script>window.location.href = 'ViewEducRes.php?title=Afforestation';</script>";
}