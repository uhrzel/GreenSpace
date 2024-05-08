<?php
session_start();
include("db.php");

// File upload directory
$targetDir = "uploadUserImg/";

if(isset($_POST['user_ID']) && isset($_POST['user_email']) && isset($_POST['user_name']) && isset($_POST['password'])){
    // Perform your signup logic here

    $user_ID = mysqli_real_escape_string($con, $_POST['user_ID']);
    $user_email = mysqli_real_escape_string($con, $_POST['user_email']);
    $user_name = mysqli_real_escape_string($con, $_POST['user_name']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $thefilename = mysqli_real_escape_string($con, $_POST['thefilename']);


    
    $fileNames = array();

    // Process each uploaded file
    foreach ($_FILES as $fileKey => $fileArray) {
        // Check if file input is empty
        if (!empty($fileArray['name'])) {
            $fileName = basename($fileArray["name"]);
            $targetFilePath = $targetDir . $fileName;

            // Upload file to server
            if (move_uploaded_file($fileArray["tmp_name"], $targetFilePath)) {
                // Store file name in array
                $fileNames[$fileKey] = $targetFilePath;
            } else {
                echo "Sorry, there was an error uploading your $fileKey file.<br>";
            }
        } else {
            // If no file is selected, assign a default value
            $fileNames[$fileKey] = $targetDir . 'newlogo.jpg';
        }
    }

    // Check if email or username already exists
    $check_query = "SELECT * FROM user WHERE (user_email='$user_email' OR user_name='$user_name') AND user_ID != '$user_ID'";
    $check_result = mysqli_query($con, $check_query);

    if(mysqli_num_rows($check_result) > 0){
        // Email or username already exists
        echo "Email or username already exists. Please use a different email or username.";
    } else {
        // Email and username are unique, proceed with registration
        $user_img = isset($fileNames['fileimage']) ? $fileNames['fileimage'] : 'default_image.jpg';
        $query = "UPDATE user SET user_img='$thefilename', user_email='$user_email', user_name='$user_name', password='$password' WHERE user_ID='$user_ID'";
        $result = mysqli_query($con, $query);

        if($result){
            // User registered successfully
            echo "Updated Successfully!";

              $_SESSION['user_email'] = $user_name; // Set session variable
        } else {
            // Error in registration
            echo "Updated failed";
        }
    }
}
?>