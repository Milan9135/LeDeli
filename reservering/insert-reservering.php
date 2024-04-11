<?php
include "reservering.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $klant_id = $_POST['klant_id'];
    $tafel_id = $_POST['tafel_id'];
    $reserverings_datum = $_POST['reserverings_datum'];
    $begin_tijd = $_POST['begin_tijd'];
    $eind_tijd = $_POST['eind_tijd'];

    $reservering = new Reservering("Empty", $klant_id, $tafel_id, $reserverings_datum, $begin_tijd, $eind_tijd);
    $reservering->Insert($db);
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
    <h2>Reservering Toevoegen</h2>
    <form action="" method="POST">
        <label for="klant_id">Klant ID:</label>
        <input type="text" id="klant_id" name="klant_id"><br>
        <label for="tafel_id">Tafel ID:</label>
        <input type="text" id="tafel_id" name="tafel_id"><br>
        <label for="reserverings_datum">Reserverings Datum:</label>
        <input type="date" id="reserverings_datum" name="reserverings_datum"><br>
        <label for="begin_tijd">Begin Tijd:</label>
        <input type="time" id="begin_tijd" name="begin_tijd"><br>
        <label for="eind_tijd">Eind Tijd:</label>
        <input type="time" id="eind_tijd" name="eind_tijd"><br><br>
        <input type="submit" value="Toevoegen">
    </form>
    <h3><a href="select-reservering.php">overzicht reserveringen</a></h3>
</body>
</html>
