<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $omschrijving = $_POST['omschrijving'];
    $prijs = $_POST['prijs'];

    $sql = "INSERT INTO Producten (omschrijving, prijs) VALUES (?, ?)";
    $args = [$omschrijving, $prijs];
    $db->run($sql, $args);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Toevoegen</title>
</head>
<body>
    <h2>Product Toevoegen</h2>
    <form action="product.php" method="POST">
        <label for="omschrijving">Omschrijving:</label><br>
        <input type="text" id="omschrijving" name="omschrijving"><br>
        <label for="prijs">Prijs:</label><br>
        <input type="text" id="prijs" name="prijs"><br><br>
        <input type="submit" value="Toevoegen">
    </form>
</body>
</html>
