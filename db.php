<?php
$host = 'localhost';
$db = 'web_project';
$user = 'root'; // replace with your database username
$pass = 'wibu12345'; // replace with your database password

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
