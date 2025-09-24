<?php
// Database connection settings
$host = "localhost";
$user = "root";      // default XAMPP username
$pass = "";          // default XAMPP password is empty
$db   = "grand_retreat";

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
