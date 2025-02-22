<?php
$servername = "localhost";
$username = "aman"; 
$password = "aman"; 
$dbname = "lms"; 


if (!class_exists('mysqli')) {
    die("MySQLi is not enabled. Please check your PHP installation.");
}

// Create MySQLi connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>