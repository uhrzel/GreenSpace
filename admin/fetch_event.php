<?php
// Include your database connection file
include 'db.php';

if (isset($_POST['event_id'])) {
    // Sanitize the input to prevent SQL injection
    $event_id = mysqli_real_escape_string($con, $_POST['event_id']);

    // Query to fetch event details
    $sql = "SELECT * FROM events WHERE id = '$event_id'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        // Fetch event details
        $event = mysqli_fetch_assoc($result);

        // Initialize the modal body
        $modalBody = '<input type="hidden" id="editEventId" value="' . $event_id . '">'; // Add the hidden input for event ID here

        // Append title input
        $modalBody .= '<div class="form-group">';
        $modalBody .= '<label for="editTitle">Title</label>';
        $modalBody .= '<input type="text" class="form-control" id="editTitle" value="' . $event['title'] . '">';
        $modalBody .= '</div>';

        // Append description textarea
        $modalBody .= '<div class="form-group">';
        $modalBody .= '<label for="editDescription">Description</label>';
        $modalBody .= '<textarea class="form-control" id="editDescription" rows="5">' . $event['description'] . '</textarea>';
        $modalBody .= '</div>';

        // Append timing input
        $modalBody .= '<div class="form-group">';
        $modalBody .= '<label for="editTiming">Timing</label>';
        $modalBody .= '<input type="time" class="form-control" id="editTiming" value="' . $event['timing'] . '">';
        $modalBody .= '</div>';

        // Echo the modal body
        echo $modalBody;
    } else {
        echo "Error fetching event details: " . mysqli_error($con);
    }
} else {
    echo "Event ID not provided";
}
