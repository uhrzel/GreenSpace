<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $message = $_POST["message"];

    // Save the message to a file or database
    $file = fopen("messages.txt", "a");
    fwrite($file, "$username: $message\n");
    fclose($file);
    
    // Redirect back to the forum page after posting
    header("Location: trytry.html");
}
?>
