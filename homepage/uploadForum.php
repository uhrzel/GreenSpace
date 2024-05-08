<?php
include("db.php");





if(isset($_POST['category']) && isset($_POST['title']) && isset($_POST['user_ID'])){
    // Perform your signup logic here
    $category = mysqli_real_escape_string($con, $_POST['category']);
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $user_ID = mysqli_real_escape_string($con, $_POST['user_ID']);

    // Check if email or username already exists
    $check_query = "SELECT * FROM allforums WHERE title='$title'";
    $check_result = mysqli_query($con, $check_query);

    if(mysqli_num_rows($check_result) > 0){
        // Email or username already exists
        echo "Title already exists. Please provide a new title";
    } else {
        // Email and username are unique, proceed with registration
        $query = "INSERT INTO allforums (category, title, user_ID) VALUES ('$category', '$title', '$user_ID')";
        $result = mysqli_query($con, $query);

        if($result){
            // User registered successfully
            echo "Forum uploaded successfully";
        } else {
            // Error in registration
            echo "Signup failed";
        }
    }
}
?>
