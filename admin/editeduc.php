<?php
date_default_timezone_set('Asia/Manila');
include("db.php");


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
// Check if user_ID is null
$user_ID = $_POST["user_ID"];
if ($user_ID == null) {
    // Update resource if user_ID is null
    $query = "UPDATE educational_resource SET title='$title', content='$content', date_posted='$date_posted', img='$filename' WHERE resourceID='$resourceID' AND user_ID IS NULL";
} else {
    // Update resource if user_ID is not null
    $query = "UPDATE educational_resource SET title='$title', content='$content', date_posted='$date_posted', img='$filename' WHERE resourceID='$resourceID' AND user_ID='$user_ID'";
}
$result = mysqli_query($con, $query);
if ($result) {
    // Resource updated successfully
    echo "Save changes successfully!";
} else {
    // Error in updating
    echo "Update failed.";
}
