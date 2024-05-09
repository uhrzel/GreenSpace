<?php
// Include your database connection file
include 'db.php';

// Check if the 'id' parameter is present in the URL
if (isset($_GET['id'])) {
    // Sanitize the ID input to prevent SQL injection
    $news_id = mysqli_real_escape_string($con, $_GET['id']);

    // Query to fetch the news details based on the provided ID
    $sql = "SELECT * FROM news WHERE id = '$news_id'";
    $result = mysqli_query($con, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        // Fetch the news details
        $news_details = mysqli_fetch_assoc($result);
        // Combine year, month, day, and timing to display date and time
        $date_time = $news_details['day'] . ' ' . $news_details['month'] . ', ' . $news_details['year'] . ' ' . $news_details['timing'];
        // Display the news details
        echo '<div class="container">';
        echo '<h2>' . 'News Title: ' . $news_details['title'] . '</h2>';
        echo '<p>Date and Time: ' . $date_time . '</p>';
        echo '<img src="../admin/uploads/' . $news_details['image'] . '" alt="">';
        echo '<p>' . 'News Description: ' . $news_details['description'] . '</p>';

        echo '</div>';
    } else {
        // If no news found with the provided ID
        echo '<div class="container">';
        echo '<p>No news found with the provided ID.</p>';
        echo '</div>';
    }
} else {
    // If the 'id' parameter is not present in the URL
    echo '<div class="container">';
    echo '<p>Invalid request. Please provide a valid news ID.</p>';
    echo '</div>';
}


// Close the database connection
mysqli_close($con);
