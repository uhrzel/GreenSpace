<?php
include 'db.php'; // Include your database connection script

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if forum_ID is set and is a valid number
    if (isset($_POST['forum_ID']) && is_numeric($_POST['forum_ID'])) {
        $forum_ID = $_POST['forum_ID'];

        // Delete the forum post from the database
        $delete_query = "DELETE FROM allforums WHERE forum_ID = $forum_ID";
        if (mysqli_query($con, $delete_query)) {
            echo "Forum post deleted successfully";
        } else {
            echo "Error deleting forum post: " . mysqli_error($con);
        }
    } else {
        echo "Invalid forum ID";
    }
} else {
    echo "Invalid request method";
}

mysqli_close($con); // Close the database connection
?>
