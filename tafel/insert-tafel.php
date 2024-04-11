<?php
include "tafel.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $klant_id = $_POST['klant_id'];

    $tafel = new Tafel("Empty", $klant_id);
    $tafel->Insert($db);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../formstyle.css">
    <link rel="stylesheet" href="../style.css">
    <title>Tafel Toevoegen</title>
</head>
<body>
    <nav id="navbar">
        <a href="../product/insert-product.php">Producten</a>
        <a href="../tafel/insert-tafel.php">Tafels</a>
        <a href="../reservering/insert-reservering.php">Reserveringen</a>
        <a href="../rekening/insert-rekening.php">Rekeningen</a>
        <a href="../klant/insert-klant.php">Klanten</a>
    </nav>
    <h2>Tafel Toevoegen</h2>
    <form action="" method="POST">
        <label for="klant_id">Klant ID:</label>
        <input type="text" id="klant_id" name="klant_id" required><br><br>
        <input type="submit" value="Toevoegen">
    </form>
    <h3><a href="select-tafel.php">overzicht tafels</a></h3>
</body>
</html>
