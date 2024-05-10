<?php
$host = 'localhost'; // MySQL server hostname
$user = 'root'; // MySQL username
$password = ''; // MySQL password
$database = 'greenspace'; // MySQL database name


//  $host = 'sql303.infinityfree.com'; // MySQL server hostname
// $user = 'if0_36155592'; // MySQL username
// $password = 'gyq5wgGk08K'; // MySQL password
// $database = 'if0_36155592_ardent_db'; // MySQL database name

$con = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno()) {
    die("Failed to connect with MySQL: " . mysqli_connect_error());
}
