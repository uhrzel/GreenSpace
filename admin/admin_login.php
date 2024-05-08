<?php
// Start session
session_start();

// Include database connection
include 'db.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username and password are provided
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        // Prepare SQL statement to select username and password from admin_account table
        $stmt = $con->prepare("SELECT id FROM admin_account WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $_POST["username"], $_POST["password"]);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if there is a match
        if ($result->num_rows > 0) {
            // Set session variable
            $_SESSION["adminloggedin"] = true;
            echo "Login Successfully!";

            exit;
        } else {
            echo "Invalid username or password";
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Please provide username and password";
    }
}
?>
