<?php
include("db.php");
date_default_timezone_set('Asia/Manila');

// File upload directory
$targetDir = "../uploadEducRes/";

    


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
            $statusMsg .= "Sorry, there was an error uploading your $fileKey file.<br>";
        }
    } else {
        // If no file is selected, assign a default value
        $fileNames[$fileKey] = 'empty.png';
    }
}



    // Update resource
    $resourceID = $_POST["resourceID"];
    $title = $_POST["title"];
    $content = $_POST["content"];
    $user_ID = $_POST["user_ID"];
    $date_posted = date("Y-m-d H:i:s"); // Get current date and time
    $filename = $_POST["filename"];

    // Update resource
    $query = "UPDATE educational_resource SET title='$title', content='$content', date_posted='$date_posted', user_ID='$user_ID', img='$filename', status='pending' WHERE resourceID='$resourceID'";
    $result = mysqli_query($con, $query);

    if ($result) {
        // Resource updated successfully
        echo json_encode(array("message" => "Your post is being processed. Feel free to check back later for updates."));
    } else {
        // Error in updating
        echo json_encode(array("message" => "Update failed."));
    }

?>
