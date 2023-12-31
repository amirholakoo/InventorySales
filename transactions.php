<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta viewport="width=device-width, initial-scale=1.0">
    <title>Transaction Management - Paper Mill Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <!-- Similar Navigation Bar as in index.html -->
    </header>
    <main>
        <h1>Transaction Management</h1>

        <!-- Section 1: Adding New Transactions -->
        <section>
            <h2>Add New Transaction</h2>
            <form action="add_transaction.php" method="post">
                <!-- Dropdown for selecting customer -->
                <label for="customer_id">Select Customer:</label>
                <select name="customer_id" id="customer_id">
                    <!-- PHP code to populate customers -->

<?php
include 'connect_db.php';

$sql = "SELECT customer_id, name FROM customers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<option value='" . $row["customer_id"] . "'>" . $row["name"] . "</option>";
    }
} else {
    echo "<option value=''>No customers available</option>";
}
?>

                </select><br><br>

                <!-- Dropdown for selecting truck -->
<?php

$sql = "SELECT truck_id, license_number FROM trucks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<option value='" . $row["truck_id"] . "'>" . $row["license_number"] . "</option>";
    }
} else {
    echo "<option value=''>No trucks available</option>";
}

?>
                <label for="truck_id">Select Truck:</label>
                <select name="truck_id" id="truck_id">
                    <!-- PHP code to populate trucks -->
<?php
$sql = "SELECT truck_id, license_number FROM trucks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<option value='" . $row["truck_id"] . "'>" . $row["license_number"] . "</option>";
    }
} else {
    echo "<option value=''>No trucks available</option>";
}
?>

                </select><br><br>


                <!-- Other transaction details -->
                <label for="weight">Weight (kg):</label>
                <input type="number" id="weight" name="weight" required><br><br>

                <label for="status">Status:</label>
                <select name="status" id="status">
                    <option value="Pending">Pending</option>
                    <option value="Completed">Completed</option>
                </select><br><br>

                <label for="invoice_details">Invoice Details:</label>
                <textarea id="invoice_details" name="invoice_details"></textarea><br><br>

                <input type="submit" value="Add Transaction">
            </form>
        </section>

        <!-- Section 2: Displaying Transactions -->
        <section>
            <h2>Existing Transactions</h2>
            <!-- PHP code to display transactions in a table -->
<h2>Existing Transactions</h2>
<table border="1">
    <tr>
        <th>Transaction ID</th>
        <th>Customer Name</th>
        <th>Truck License</th>
        <th>Weight</th>
        <th>Status</th>
        <th>Invoice Details</th>
    </tr>

    <?php
    $sql = "SELECT transaction_id, customer_id, truck_id, status, invoice_details FROM transactions t LEF>
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["transaction_id"]. "</td>
                    <td>" . $row["customer_name"]. "</td>
                    <td>" . $row["license_number"]. "</td>
                    <td>" . $row["weight"]. "</td>
                    <td>" . $row["status"]. "</td>
                    <td>" . $row["invoice_details"]. "</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No transactions found</td></tr>";
    }

closeDbConnection($conn);

    ?>
</table>


        </section>
    </main>
    <footer>
        <p>© 2023 Paper Mill Dashboard</p>
    </footer>
</body>
</html>
