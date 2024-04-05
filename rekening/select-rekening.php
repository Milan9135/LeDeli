<?php 
include "../db.php";
include "rekening.php";

// Selecteer alle gegevens uit de rekeningen tabel
$sqlRekeningen = "SELECT * FROM rekeningen";
$rekeningen = $db->run($sqlRekeningen)->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../formstyle.css">
    <link rel="stylesheet" href="../style.css">
    <title>Rekeningen</title>
</head>
<body>
    <nav id="navbar">
        <a href="../product/select-product.php">Producten</a>
        <a href="../tafel/select-tafel.php">Tafels</a>
        <a href="../reservering/select-reservering.php">Reserveringen</a>
        <a href="../rekening/select-rekening.php">Rekeningen</a>
        <a href="../klant/select-klant.php">Klanten</a>
    </nav>
<h1>Rekeningen:</h1>
<table border="1">
    <tr>
        <th>rekening_id</th>
        <th>klant_id</th>
        <th>klant_naam</th>
        <th>product_id</th>
        <th>product_omschrijving</th>
        <th>aantal</th>
        <th>actie</th>
    </tr>
    <?php foreach ($rekeningen as $rekening) { ?>
        <tr>
            <td><?php echo $rekening['rekening_id'] ?></td>
            <td><?php echo $rekening['klant_id'] ?></td>
            <td><?php echo $db->getKlantNaam($rekening['klant_id'], $db) ?></td>
            <td><?php echo $rekening['product_id'] ?></td>
            <td><?php echo $db->getProductNaam($rekening['product_id'], $db) ?></td>
            <td><?php echo $rekening['aantal'] ?></td>
            <td>
                <?php echo("<a href='edit-rekening.php?rekening_id=$rekening[rekening_id]&klant_id=$rekening[klant_id]&product_id=$rekening[product_id]&aantal=$rekening[aantal]'>edit</a>") ?>
                <?php echo("<a href='delete.php?rekening_id=$rekening[rekening_id]'>delete</a>") ?>
            </td>
        </tr>
    <?php } ?>
</table>
<h3><a href="insert-rekening.php">insert rekening</a></h3>

</body>
</html>