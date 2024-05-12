<?php
session_start();
include("db.php");

if (isset($_POST['email_or_username']) && isset($_POST['password'])) {
    // User login logic
    $email_or_username = mysqli_real_escape_string($con, $_POST['email_or_username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Check if the email_or_username exists in either user_email or user_name field
    $query = "SELECT * FROM user WHERE (user_email='$email_or_username' OR user_name='$email_or_username') AND password='$password'";

    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($row['status'] == 'Suspended') {
            echo "Your account is suspended temporarily. Please contact us for assistance.";
        } else {
            $_SESSION['user_email'] = $row['user_email']; // Set session variable
            $_SESSION['user_ID'] = $row['user_ID']; // Set user ID session variable

            echo "User login successful";
        }
    } else {
        // Admin login logic
        $query = "SELECT id FROM admin_account WHERE username='$email_or_username' AND password='$password'";

        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0) {
            $_SESSION["adminloggedin"] = true;
            echo "Admin login successful";
        } else {
            echo "Incorrect email/username or password. Please try again.";
        }
    }
}
