<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $klant_id = $_POST['klant_id'];

    $sql = "INSERT INTO Tafels (klant_id) VALUES (?)";
    $args = [$klant_id];
    $db->run($sql, $args);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tafel Toevoegen</title>
</head>
<body>
    <h2>Tafel Toevoegen</h2>
    <form action="tafel.php" method="POST">
        <label for="klant_id">Klant ID:</label><br>
        <input type="text" id="klant_id" name="klant_id"><br><br>
        <input type="submit" value="Toevoegen">
    </form>
</body>
</html>
