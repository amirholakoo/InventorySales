
<?php
include 'connect_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $customer_id = $conn->real_escape_string($_POST['customer_id']);
    $truck_id = $conn->real_escape_string($_POST['truck_id']);
    $weight = $conn->real_escape_string($_POST['weight']);
    $status = $conn->real_escape_string($_POST['status']);
    $invoice_details = $conn->real_escape_string($_POST['invoice_details']);

    $sql = "INSERT INTO transactions (customer_id, truck_id, weight, status, invoice_details) VALUES ('$c>

    if ($conn->query($sql) === TRUE) {
        echo "New transaction added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    closeDbConnection($conn);
}
?>





