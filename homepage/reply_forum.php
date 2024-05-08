<?php
include("db.php");







if(isset($_POST['content']) && isset($_POST['replyTo']) && isset($_POST['user_ID'])){
    // Perform your signup logic here
    $content = mysqli_real_escape_string($con, $_POST['content']);
    $replyTo = mysqli_real_escape_string($con, $_POST['replyTo']);
    $user_ID = mysqli_real_escape_string($con, $_POST['user_ID']);

    // Check if email or username already exists
    $check_query = "SELECT * FROM allforums WHERE replyTo='$replyTo'";
    $check_result = mysqli_query($con, $check_query);

    if(mysqli_num_rows($check_result) > 0){
        // Email or username already exists
       // Email and username are unique, proceed with registration
        $query = "INSERT INTO allforums (content, replyTo, user_ID) VALUES ('$content', '$replyTo', '$user_ID')";
        $result = mysqli_query($con, $query);

        if($result){
            // User registered successfully
            echo "Forum reply successfully";
        } else {
            // Error in registration
            echo "Signup failed";
        }
    } else {
        // Email and username are unique, proceed with registration
        $query = "INSERT INTO allforums (content, replyTo, user_ID) VALUES ('$content', '$replyTo', '$user_ID')";
        $result = mysqli_query($con, $query);

        if($result){
            // User registered successfully
            echo "Forum reply successfully";
        } else {
            // Error in registration
            echo "Signup failed";
        }
    }
}
?>
