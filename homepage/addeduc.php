<?php
include("db.php");

// File upload directory
$targetDir = "../uploadEducRes/";

if (isset($_POST['title']) && isset($_POST['content'])) {
    // Insert new resource
    $title = $_POST["title"];
    $content = $_POST["content"];
    $user_ID = $_POST["user_ID"];
    $date_posted = date("Y-m-d H:i:s"); // Get current date and time
    $filename = $_POST["filename"];

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

    // Insert new resource into database
    $query = "INSERT INTO educational_resource (title, content, date_posted, user_ID, img) VALUES ('$title', '$content', '$date_posted', '$user_ID', '$filename')";
    $result = mysqli_query($con, $query);

    if ($result) {
        // Resource inserted successfully
        echo json_encode(array("message" => "Your post is being processed. Feel free to check back later for updates."));
    } else {
        // Error in insertion
        echo json_encode(array("message" => "Insert failed."));
    }
}
