<?php
$servername = "localhost";
$username = "testuser";
$password = "Password123";

// Create new connection
$conn = new mysqli($servername, $username, $password);

// Check if connection is established
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// the connection is automatically closed when the script ends

// if you want to close the connection before the script ends
$conn->close();
?>
