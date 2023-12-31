<?php
include 'connect_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $driver_name = $_POST['driver_name'];
    $license_number = $_POST['license_number'];

    $sql = "INSERT INTO trucks (driver_name, license_number) VALUES ('$driver_name', '$license_number')";

    if ($conn->query($sql) === TRUE) {
        echo "New truck added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    closeDbConnection($conn);
}
?>




