<?php
include "../db.php";
include "klant.php";

// Selecteer alle gegevens uit de Klanten tabel
$sqlKlanten = "SELECT * FROM Klanten";
$klanten = $db->run($sqlKlanten)->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../formstyle.css">
    <link rel="stylesheet" href="../style.css">
    <title>Klanten</title>
</head>
<body>
    <nav id="navbar">
        <a href="../product/select-product.php">Producten</a>
        <a href="../tafel/select-tafel.php">Tafels</a>
        <a href="../reservering/select-reservering.php">Reserveringen</a>
        <a href="../rekening/select-rekening.php">Rekeningen</a>
        <a href="../klant/select-klant.php">Klanten</a>
    </nav>
<h1>Klanten:</h1>
<table border="1">
    <tr>
        <th>klant_id</th>
        <th>klant_naam</th>
        <th>email</th>
        <th>wachtwoord</th>
        <th>actie</th>
    </tr>
    <?php foreach ($klanten as $klant) { ?>
        <tr>
            <td><?php echo $klant['klant_id'] ?></td>
            <td><?php echo $klant['klant_naam'] ?></td>
            <td><?php echo $klant['email'] ?></td>
            <td><?php echo $klant['wachtwoord'] ?></td>
            <td>
                <?php echo("<a href='edit-klant.php?klant_id=$klant[klant_id]&klant_naam=$klant[klant_naam]&email=$klant[email]&wachtwoord=$klant[wachtwoord]'>edit</a>") ?>
                <?php echo("<a href='delete-klant.php?klant_id=$klant[klant_id]'>delete</a>") ?>
            </td>
        </tr>
    <?php } ?>
</table>
<h3><a href="insert-klant.php">insert klant</a></h3>
</body>
</html>