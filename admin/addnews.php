<?php
include("db.php");

// File upload directory
$targetDir = "uploads/";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $year = $_POST['year'];
    $month = $_POST['month'];
    $day = $_POST['day'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $timing = $_POST['timing'];

    // File upload handling
    $image = $_FILES['image']['name'];
    $image_temp = $_FILES['image']['tmp_name'];
    $image_destination = $targetDir . $image; // Define your destination folder for uploaded images

    // Check if the uploaded file is an image
    if (exif_imagetype($image_temp)) {
        // Move uploaded file to destination
        if (move_uploaded_file($image_temp, $image_destination)) {
            // Convert timing to 24-hour format
            $timing_12h = date('h:i a', strtotime($timing));

            // Create a date string in the format YYYY-MM-DD
            $date = $year . '-' . $month . '-' . $day;

            // Insert data into news table
            $sql = "INSERT INTO news (year, month, day, title, description, timing, image) VALUES ('$year', '$month', '$day', '$title', '$description', '$timing_12h', '$image_destination')";

            if ($con->query($sql) === TRUE) {
                echo "News added successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $con->error;
            }
        } else {
            echo "Error uploading image.";
        }
    } else {
        echo "Invalid file format. Please upload an image.";
    }
}

$con->close();
