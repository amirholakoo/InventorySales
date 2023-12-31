<?php
include 'connect_db.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect post variables
    $reel_number = $_POST['reel_number'];
    $gsm = $_POST['gsm'];
    $grade = $_POST['grade'];
    $width = $_POST['width'];
    $length = $_POST['length'];
    $breaks = $_POST['breaks'];
    $comments = $_POST['comments'];

    $sql = "INSERT INTO rolls (reel_number, gsm, grade, width, length, breaks, comments)
    VALUES ('$reel_number', '$gsm', '$grade', '$width', '$length', '$breaks', '$comments')";

    if ($conn->query($sql) === TRUE) {
        echo "New roll added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    closeDbConnection($conn);
}
?>
