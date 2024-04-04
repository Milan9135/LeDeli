<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $klant_naam = $_POST['klant_naam'];
    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];

    // Wachtwoord hashen voordat het wordt opgeslagen in de database
    $hashed_wachtwoord = password_hash($wachtwoord, PASSWORD_DEFAULT);

    $sql = "INSERT INTO Klanten (klant_naam, email, wachtwoord) VALUES (?, ?, ?)";
    $args = [$klant_naam, $email, $hashed_wachtwoord]; // Gebruik het gehashde wachtwoord
    $db->run($sql, $args);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klant Toevoegen</title>
</head>
<body>
    <h2>Klant Toevoegen</h2>
    <form action="klant.php" method="POST">
        <label for="klant_naam">Naam:</label><br>
        <input type="text" id="klant_naam" name="klant_naam"><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="wachtwoord">Wachtwoord:</label><br>
        <input type="password" id="wachtwoord" name="wachtwoord"><br><br>
        <input type="submit" value="Toevoegen">
    </form>
</body>
</html>
