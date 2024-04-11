<?php
include "product.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $omschrijving = $_POST['omschrijving'];
    $prijs = $_POST['prijs'];

    $product = new Product("not needed", $omschrijving, $prijs);
    $product->Insert($db);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../formstyle.css">
    <link rel="stylesheet" href="../style.css">
    <title>Klant Toevoegen</title>
</head>
<body>
    <nav id="navbar">
        <a href="../product/insert-product.php">Producten</a>
        <a href="../tafel/insert-tafel.php">Tafels</a>
        <a href="../reservering/insert-reservering.php">Reserveringen</a>
        <a href="../rekening/insert-rekening.php">Rekeningen</a>
        <a href="../klant/insert-klant.php">Klanten</a>
    </nav>
    <h2>Product Toevoegen</h2>
    <form action="" method="POST">
        <label for="omschrijving">Omschrijving:</label>
        <input type="text" id="omschrijving" name="omschrijving"><br>
        <label for="prijs">Prijs:</label>
        <input type="text" id="prijs" name="prijs"><br><br>
        <input type="submit" value="Toevoegen">
    </form>
    <h3><a href="select-product.php">overzicht producten</a></h3>
</body>
</html>
