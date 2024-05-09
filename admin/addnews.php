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

    $filename = $_FILES['photo']['name'];

    // Check if file was uploaded successfully
    if (!empty($filename)) {
        // Move the uploaded file to the target directory
        $targetFilePath = $targetDir . basename($filename);
        if (move_uploaded_file($_FILES['photo']['tmp_name'], $targetFilePath)) {
            // File uploaded successfully, insert data into the database
            $timing_12h = date('h:i a', strtotime($timing));

            // Insert data into news table
            $sql = "INSERT INTO news (year, month, day, title, description, timing, image) VALUES ('$year', '$month', '$day', '$title', '$description', '$timing_12h', '$filename')";

            if ($con->query($sql) === TRUE) {
                // News added successfully
                $newsID = $con->insert_id; // Retrieve the ID of the inserted news item
                echo "News added successfully";

            } else {
                // Error inserting data into the database
                echo "Error: " . $sql . "<br>" . $con->error;
            }
        } else {
            // Error uploading file
            echo "Error uploading file";
        }
    } else {
        // No file uploaded
        echo "Please select an image file";
    }
}

// Close the database connection
$con->close();
