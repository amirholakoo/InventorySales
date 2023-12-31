
<?php
include 'connect_db.php';
include 'phpqrcode/qrlib.php';


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
$qrData = "Roll Number: $reel_number, GSM: $gsm, Grade: $grade, Width: $width, Length: $length";

    $sql = "INSERT INTO rolls (reel_number, gsm, grade, width, length, breaks, comments, qr_code)
    VALUES ('$reel_number', '$gsm', '$grade', '$width', '$length', '$breaks', '$comments', '$qrData')";
if ($conn->query($sql) === TRUE) {
    echo "New roll added successfully<br>";

    // Generate QR code
    $qrCodeFile = 'qrcodes/roll_' . $reel_number . '.png';


    // Check if qrcodes directory exists, if not create it
    if (!file_exists('qrcodes')) {
        mkdir('qrcodes', 0777, true);
    }

    // Generate and save the QR code image
    QRcode::png($qrData, $qrCodeFile);

    echo "QR Code generated!";
echo "<br><br><a href='$qrCodeFile'>Download QR Code</a>";
echo "<br><img src='$qrCodeFile' />";

echo "<br><br><a href='rolls.html'>Enter Another Roll</a>";
        echo "<br><a href='index.html'>Return to Dashboard</a>";


} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


    // Close database connection
    closeDbConnection($conn);
}
?>


