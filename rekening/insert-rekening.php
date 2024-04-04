<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $klant_id = $_POST['klant_id'];
    $product_id = $_POST['product_id'];
    $aantal = $_POST['aantal'];

    $sql = "INSERT INTO Rekeningen (klant_id, product_id, aantal) VALUES (?, ?, ?)";
    $args = [$klant_id, $product_id, $aantal];
    $db->run($sql, $args);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekening Toevoegen</title>
</head>
<body>
    <h2>Rekening Toevoegen</h2>
    <form action="rekening.php" method="POST">
        <label for="klant_id">Klant ID:</label><br>
        <input type="text" id="klant_id" name="klant_id"><br>
        <label for="product_id">Product ID:</label><br>
        <input type="text" id="product_id" name="product_id"><br>
        <label for="aantal">Aantal:</label><br>
        <input type="text" id="aantal" name="aantal"><br><br>
        <input type="submit" value="Toevoegen">
    </form>
</body>
</html>