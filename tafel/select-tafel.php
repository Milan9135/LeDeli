<?php 
include "../db.php";
include "tafel.php";

// Selecteer alle gegevens uit de Tafels tabel
$sqlTafels = "SELECT * FROM Tafels";
$tafels = $db->run($sqlTafels)->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../formstyle.css">
    <link rel="stylesheet" href="../style.css">
    <title>Tafels</title>
</head>
<body>
    <nav id="navbar">
        <a href="../product/select-product.php">Producten</a>
        <a href="../tafel/select-tafel.php">Tafels</a>
        <a href="../reservering/select-reservering.php">Reserveringen</a>
        <a href="../rekening/select-rekening.php">Rekeningen</a>
        <a href="../klant/select-klant.php">Klanten</a>
    </nav>
<h1>Tafels:</h1>
<table border="1">
    <tr>
        <th>tafel_id</th>
        <th>klant_id</th>
        <th>klant_naam</th>
        <th>actie</th>
    </tr>
    <?php foreach ($tafels as $tafel) { ?>
        <tr>
            <td><?php echo $tafel['tafel_id'] ?></td>
            <td><?php echo $tafel['klant_id'] ?></td>
            <td><?php echo $db->getKlantNaam($tafel['klant_id'], $db) ?></td>
            <td>
                <?php echo("<a href='edit-tafel.php?tafel_id=$tafel[tafel_id]&klant_id=$tafel[klant_id]'>edit</a>") ?>
                <?php echo("<a href='delete.php?tafel_id=$tafel[tafel_id]'>delete</a>") ?>
            </td>
        </tr>
    <?php } ?>
</table>
<h3><a href="insert-tafel.php">insert tafel</a></h3>
</body>
</html>