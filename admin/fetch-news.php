<?php
// Include your database connection file
include 'db.php';

// Query to fetch news details
$sql = "SELECT * FROM news ORDER BY year DESC, month DESC, day DESC";
$result = mysqli_query($con, $sql);

if ($result) {
    // Check if there are any news available
    if (mysqli_num_rows($result) > 0) {
        // Loop through each news item
        while ($news = mysqli_fetch_assoc($result)) {
            // Generate HTML for each news item
            echo '<div class="col-xl-6 col-lg-6 col-md-6">';
            echo '<div class="home-blog-single mb-30">';
            echo '<div class="blog-img-cap">';
            echo '<div class="blog-img">';
            echo '<img src="uploads/' . $news['image'] . '" alt="">';
            echo '</div>';
            echo '<div class="blog-cap">';
            echo '<h3><a href="#">' . $news['title'] . '</a></h3>';
            echo '<p style="font-family: \'Poppins\';">' . $news['description'] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        // If no news available
        echo '<div class="col-xl-12">';
        echo '<p>No news available.</p>';
        echo '</div>';
    }
} else {
    // If there's an error fetching news
    echo '<div class="col-xl-12">';
    echo '<p>Error fetching news details: ' . mysqli_error($con) . '</p>';
    echo '</div>';
}

// Close the database connection
mysqli_close($con);
