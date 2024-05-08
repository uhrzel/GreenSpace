<?php
include("db.php");

if(isset($_POST['user_email']) && isset($_POST['user_name']) && isset($_POST['password'])){
    // Perform your signup logic here
    $user_email = mysqli_real_escape_string($con, $_POST['user_email']);
    $user_name = mysqli_real_escape_string($con, $_POST['user_name']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Check if email or username already exists
    $check_query = "SELECT * FROM user WHERE user_email='$user_email' OR user_name='$user_name'";
    $check_result = mysqli_query($con, $check_query);

    if(mysqli_num_rows($check_result) > 0){
        // Email or username already exists
        echo "Email or username already exists. Please use a different email or username.";
    } else {
        // Email and username are unique, proceed with registration
        $query = "INSERT INTO user (user_email, user_name, password) VALUES ('$user_email', '$user_name', '$password')";
        $result = mysqli_query($con, $query);

        if($result){
            // User registered successfully
            echo "Signup successfully";
        } else {
            // Error in registration
            echo "Signup failed";
        }
    }
}
?>
