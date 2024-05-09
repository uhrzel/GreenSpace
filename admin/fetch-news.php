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
            echo '<img src="admin/uploads/' . $news['image'] . '" alt="">';
            echo '</div>';
            echo '<div class="blog-cap">';
            echo '<h3><a href="#" class="news-title" data-id="' . $news['id'] . '">' . $news['title'] . '</a></h3>';
            echo '<p style="font-family: \'Poppins\';">' . $news['description'] . '</p>';
            // Add "Read More" button triggering modal
            echo '<button type="button" class="btn btn-primary read-more" data-id="' . $news['id'] . '">Read More</button>';
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
?>

<!-- Modal -->
<div class="modal fade" id="newsModal" tabindex="-1" role="dialog" aria-labelledby="newsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newsModalLabel">News Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="newsModalBody">
                <!-- News details will be loaded here -->
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Handle click event for "Read More" buttons
        const readMoreButtons = document.querySelectorAll('.read-more');
        readMoreButtons.forEach(button => {
            button.addEventListener('click', function() {
                const newsId = this.getAttribute('data-id');
                fetchNewsDetails(newsId);
            });
        });

        // Function to fetch and display news details in modal
        function fetchNewsDetails(newsId) {
            fetch('./news-details.php?id=' + newsId)
                .then(response => response.text())
                .then(data => {
                    document.getElementById('newsModalBody').innerHTML = data;
                    $('#newsModal').modal('show');
                })
                .catch(error => console.error('Error fetching news details:', error));
        }
    });
</script>