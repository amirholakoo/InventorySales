<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Rolls - Paper Mill Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <!-- Similar Navigation Bar as in index.html -->
    </header>
    <main>
        <h1>Add a New Roll</h1>
        <form action="add_roll.php" method="post">
            <label for="reel_number">Reel Number:</label>
            <input type="number" id="reel_number" name="reel_number" required><br><br>

            <label for="gsm">GSM:</label>
            <input type="number" id="gsm" name="gsm" required><br><br>

            <label for="grade">Grade:</label>
            <input type="text" id="grade" name="grade" required><br><br>

            <label for="width">Width (cm):</label>
            <input type="number" id="width" name="width" required><br><br>

            <label for="length">Length:</label>
            <input type="number" id="length" name="length" required><br><br>

            <label for="breaks">Breaks:</label>
            <input type="number" id="breaks" name="breaks" required><br><br>

            <label for="comments">Comments:</label>
            <textarea id="comments" name="comments"></textarea><br><br>

            <input type="submit" value="Add Roll">
        </form>
    </main>
    <footer>
        <p>© 2023 Paper Mill Dashboard</p>
    </footer>
</body>
</html>
