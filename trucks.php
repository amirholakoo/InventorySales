<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Truck Management - Paper Mill Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <!-- Similar Navigation Bar as in index.html -->
    </header>
    <main>
        <h1>Truck Management</h1>

        <!-- Section 1: Updating Existing Trucks -->
        <section>
            <h2>Update Existing Truck Status</h2>
            <form action="update_truck_status.php" method="post">
                <!-- PHP code to generate dropdown of trucks -->
                <label for="truck_id">Select Truck:</label>
                <select name="truck_id" id="truck_id">
                    <!-- PHP code to populate trucks -->
<?php
include 'connect_db.php';

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

                <label for="status">Status:</label>
                <select name="status" id="status">
                    <option value="incoming">Incoming</option>
                    <option value="outgoing">Outgoing</option>
                </select><br><br>

                <input type="submit" value="Update Status">
            </form>
        </section>

        <!-- Section 2: Adding New Trucks -->
        <section>
            <h2>Add New Truck</h2>
            <form action="add_truck.php" method="post">
                <label for="driver_name">Driver Name:</label>
                <input type="text" id="driver_name" name="driver_name" required><br><br>

                <label for="license_number">License Number:</label>
                <input type="text" id="license_number" name="license_number" required><br><br>

                <input type="submit" value="Add Truck">
            </form>
        </section>

        <!-- Section 3: Weigh Station -->
<!-- Section 3: Weigh Station -->
<section>
    <h2>Weigh Station</h2>
    <form action="update_truck_weight.php" method="post">
        <!-- PHP code to generate dropdown of trucks -->
        <label for="truck_id_weight">Select Truck:</label>
        <select name="truck_id_weight" id="truck_id_weight">
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

        <label for="weight">Weight (kg):</label>
        <input type="number" id="weight" name="weight" required><br><br>

        <label for="weight_type">Weight Type:</label>
        <select name="weight_type" id="weight_type">
            <option value="loaded">Loaded Weight</option>
            <option value="unloaded">Unloaded Weight</option>
        </select><br><br>

        <input type="submit" value="Update Weight">
    </form>
</section>


    </main>
    <footer>
        <p>© 2023 Paper Mill Dashboard</p>
    </footer>
</body>
</html>
