<?php
session_start();
include("db.php");

if(isset($_POST['user_email']) && isset($_POST['password'])){
    // Perform your login logic here
    $user_email = mysqli_real_escape_string($con, $_POST['user_email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Example query (you should use prepared statements or a secure authentication method)
    $query = "SELECT * FROM user WHERE (user_email='$user_email' OR user_name='$user_email') AND password='$password'";

    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        if($row['status'] == 'Suspended'){
            echo "Your account is suspended temporarily. Please contact us for assistance.";
        } else {
            // User authenticated
            $_SESSION['user_email'] = $user_email; // Set session variable
            echo "Login successfully";
        }
    } else {
        // User not found or credentials incorrect
        echo "Incorrect username or password. Please try again.";
    }
}
?>
