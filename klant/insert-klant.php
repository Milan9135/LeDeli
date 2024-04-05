<?php
include "../db.php";
include "klant.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $klant_naam = $_POST['klant_naam'];
    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];

    // Wachtwoord hashen voordat het wordt opgeslagen in de database
    $hashed_wachtwoord = password_hash($wachtwoord, PASSWORD_DEFAULT);

    $sql = "INSERT INTO klanten (klant_naam, email, wachtwoord) VALUES (?, ?, ?)";
    $args = [$klant_naam, $email, $hashed_wachtwoord]; // Gebruik het gehashde wachtwoord
    $db->run($sql, $args);
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
    <h2>Klant Toevoegen</h2>
    <form action="" method="POST">
        <label for="klant_naam">Naam:</label>
        <input type="text" id="klant_naam" name="klant_naam"><br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email"><br>
        <label for="wachtwoord">Wachtwoord:</label>
        <input type="password" id="wachtwoord" name="wachtwoord"><br><br>
        <input type="submit" value="Toevoegen">
    </form>
    <h3><a href="select-klant.php">overzicht klanten</a></h3>
</body>
</html>
