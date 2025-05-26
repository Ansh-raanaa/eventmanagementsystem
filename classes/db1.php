<?php
$servername = "localhost";  // default name and pass
$username = "root";
$password = "";
$dbname = "grafest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // Optional: Log successful connection
    // echo "Connected successfully";
}
?>
