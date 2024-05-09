<?php
include("db.php");

// Check if all required fields are set
if (isset($_POST['title'], $_POST['content'], $_FILES['img'])) {
    // Assign values to variables
    $title = $_POST["title"];
    $content = $_POST["content"];
    $user_ID = 1; // Assuming you have a default user ID here
    $date_posted = date("Y-m-d H:i:s"); // Get current date and time

    // Process uploaded image
    $imgFile = $_FILES['img']['name'];
    $tmp_dir = $_FILES['img']['tmp_name'];
    $imgSize = $_FILES['img']['size'];

    // Check if image is uploaded
    if ($imgFile) {
        $upload_dir = '../uploadEducRes/'; // Directory for storing images

        // Get image extension
        $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION));

        // Valid image extensions
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'jfif');

        // Rename uploaded image file
        $img = uniqid() . "." . $imgExt;

        // Check if image extension is valid
        if (in_array($imgExt, $valid_extensions)) {
            // Check image size less than 5MB
            if ($imgSize < 5000000) {
                // Move uploaded file to destination directory
                if (move_uploaded_file($tmp_dir, $upload_dir . $img)) {
                    // Insert new resource into database
                    $query = "INSERT INTO educational_resource (title, content, date_posted, img, status) VALUES ('$title', '$content', '$date_posted', '$img', 'approved')";
                    $result = mysqli_query($con, $query);

                    if ($result) {
                        // Resource inserted successfully
                        $response = array("status" => "success", "message" => "Your post is being processed. Feel free to check back later for updates.");
                        echo json_encode($response);
                    } else {
                        // Error in insertion
                        $response = array("status" => "error", "message" => "Insert failed.");
                        echo json_encode($response);
                    }
                } else {
                    // Error in moving file
                    $response = array("status" => "error", "message" => "Failed to move uploaded file.");
                    echo json_encode($response);
                }
            } else {
                // Error: File size too large
                $response = array("status" => "error", "message" => "Sorry, your file is too large.");
                echo json_encode($response);
            }
        } else {
            // Error: Invalid file format
            $response = array("status" => "error", "message" => "Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
            echo json_encode($response);
        }
    } else {
        // Error: No file uploaded
        $response = array("status" => "error", "message" => "Error: Required fields are missing.");
        echo json_encode($response);
    }
} else {
    // Error: Required fields are missing
    $response = array("status" => "error", "message" => "Error: User is not logged in.");
    echo json_encode($response);
}
