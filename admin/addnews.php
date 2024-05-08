<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $year = $_POST['year'];
    $month = $_POST['month'];
    $day = $_POST['day'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $timing = $_POST['timing'];

    // Convert timing to 24-hour format
    $timing_12h = date('h:i a', strtotime($timing));

    // Create a date string in the format YYYY-MM-DD
    $date = $year . '-' . $month . '-' . $day;

    // Insert data into events table
    $sql = "INSERT INTO news (year, month, day, title, description, timing) VALUES ('$year', '$month', '$day', '$title', '$description', '$timing_12h')";

    if ($con->query($sql) === TRUE) {
        echo "News added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

$con->close();
