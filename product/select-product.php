<?php 
include "../db.php";
include "product.php";

// Selecteer alle gegevens uit de Producten tabel
$sqlProducten = "SELECT * FROM Producten";
$producten = $db->run($sqlProducten)->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../formstyle.css">
    <link rel="stylesheet" href="../style.css">
    <title>Producten</title>
</head>
<body>
    <nav id="navbar">
        <a href="../product/select-product.php">Producten</a>
        <a href="../tafel/select-tafel.php">Tafels</a>
        <a href="../reservering/select-reservering.php">Reserveringen</a>
        <a href="../rekening/select-rekening.php">Rekeningen</a>
        <a href="../klant/select-klant.php">Klanten</a>
    </nav>
<h1>Producten:</h1>
<table border="1">
    <tr>
        <th>product_id</th>
        <th>omschrijving</th>
        <th>prijs</th>
        <th>actie</th>
    </tr>
    <?php foreach ($producten as $product) { ?>
        <tr>
            <td><?php echo $product['product_id'] ?></td>
            <td><?php echo $product['omschrijving'] ?></td>
            <td><?php echo $product['prijs'] ?></td>
            <td>
                <?php echo("<a href='edit-product.php?product_id=$product[product_id]&omschrijving=$product[omschrijving]&prijs=$product[prijs]'>edit</a>") ?>
                <?php echo("<a href='delete-product.php?product_id=$product[product_id]'>delete</a>") ?>
            </td>
        </tr>
    <?php } ?>
</table>
<h3><a href="insert-product.php">insert product</a></h3>

</body>
</html>