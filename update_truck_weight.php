
<?php
include 'connect_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $truck_id = $_POST['truck_id_weight'];
    $weight = $_POST['weight'];
    $weight_type = $_POST['weight_type'];

    $weight_column = $weight_type == 'loaded' ? 'loaded_weight' : 'unloaded_weight';
    $sql = "UPDATE trucks SET $weight_column = $weight WHERE truck_id = $truck_id";

    if ($conn->query($sql) === TRUE) {
        echo "Truck weight updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    closeDbConnection($conn);
}
?>









