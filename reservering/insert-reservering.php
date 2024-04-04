<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $klant_id = $_POST['klant_id'];
    $tafel_id = $_POST['tafel_id'];
    $reserverings_datum = $_POST['reserverings_datum'];
    $begin_tijd = $_POST['begin_tijd'];
    $eind_tijd = $_POST['eind_tijd'];

    $sql = "INSERT INTO Reserveringen (klant_id, tafel_id, reserverings_datum, begin_tijd, eind_tijd) VALUES (?, ?, ?, ?, ?)";
    $args = [$klant_id, $tafel_id, $reserverings_datum, $begin_tijd, $eind_tijd];
    $db->run($sql, $args);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservering Toevoegen</title>
</head>
<body>
    <h2>Reservering Toevoegen</h2>
    <form action="reservering.php" method="POST">
        <label for="klant_id">Klant ID:</label><br>
        <input type="text" id="klant_id" name="klant_id"><br>
        <label for="tafel_id">Tafel ID:</label><br>
        <input type="text" id="tafel_id" name="tafel_id"><br>
        <label for="reserverings_datum">Reserverings Datum:</label><br>
        <input type="date" id="reserverings_datum" name="reserverings_datum"><br>
        <label for="begin_tijd">Begin Tijd:</label><br>
        <input type="time" id="begin_tijd" name="begin_tijd"><br>
        <label for="eind_tijd">Eind Tijd:</label><br>
        <input type="time" id="eind_tijd" name="eind_tijd"><br><br>
        <input type="submit" value="Toevoegen">
    </form>
</body>
</html>