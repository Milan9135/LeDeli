<?php 
include "../db.php";
include "reservering.php";

// Selecteer alle gegevens uit de Reserveringen tabel
$sqlReserveringen = "SELECT * FROM Reserveringen";
$reserveringen = $db->run($sqlReserveringen)->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../formstyle.css">
    <link rel="stylesheet" href="../style.css">
    <title>Reserveringen</title>
</head>
<body>
    <nav id="navbar">
        <a href="../product/select-product.php">Producten</a>
        <a href="../tafel/select-tafel.php">Tafels</a>
        <a href="../reservering/select-reservering.php">Reserveringen</a>
        <a href="../rekening/select-rekening.php">Rekeningen</a>
        <a href="../klant/select-klant.php">Klanten</a>
    </nav>
<h1>Reserveringen:</h1>
<table border="1">
    <tr>
        <th>reservering_id</th>
        <th>klant_id</th>
        <th>klant_naam</th>
        <th>tafel_id</th>
        <th>reserverings_datum</th>
        <th>begin_tijd</th>
        <th>eind_tijd</th>
        <th>actie</th>
    </tr>
    <?php foreach ($reserveringen as $reservering) { ?>
        <tr>
            <td><?php echo $reservering['reservering_id'] ?></td>
            <td><?php echo $reservering['klant_id'] ?></td>
            <td><?php echo $db->getKlantNaam($reservering['klant_id'], $db) ?></td>
            <td><?php echo $reservering['tafel_id'] ?></td>
            <td><?php echo $reservering['reserverings_datum'] ?></td>
            <td><?php echo $reservering['begin_tijd'] ?></td>
            <td><?php echo $reservering['eind_tijd'] ?></td>
            <td>
                <?php echo("<a href='edit-reservering.php?reservering_id=$reservering[reservering_id]&klant_id=$reservering[klant_id]&tafel_id=$reservering[tafel_id]&reserverings_datum=$reservering[reserverings_datum]&begin_tijd=$reservering[begin_tijd]&eind_tijd=$reservering[eind_tijd]'>edit</a>") ?>
                <?php echo("<a href='delete.php?reservering_id=$reservering[reservering_id]'>delete</a>") ?>
            </td>
        </tr>
    <?php } ?>
</table>
<h3><a href="insert-reservering.php">insert reservering</a></h3>

</body>
</html>