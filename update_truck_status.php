
<?php
include 'connect_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $truck_id = $_POST['truck_id'];
    $status = $_POST['status'];

    $sql = "UPDATE trucks SET status = '$status' WHERE truck_id = $truck_id";

    if ($conn->query($sql) === TRUE) {
        echo "Truck status updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    closeDbConnection($conn);
}
?>


