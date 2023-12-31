<?php
$servername = "localhost";
$username = "XXX";
$password = "XXX";
$dbname = "paper_mill_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to close the database connection
function closeDbConnection($conn) {
    $conn->close();
}
?>
