<?php 
include "../db.php";

$product_id = htmlspecialchars($_GET['product_id'], ENT_QUOTES, 'UTF-8');
$omschrijving = htmlspecialchars($_GET['omschrijving'], ENT_QUOTES, 'UTF-8');
$prijs = htmlspecialchars($_GET['prijs'], ENT_QUOTES, 'UTF-8');

if (isset($_GET['knopje'])) {
    $product_id = htmlspecialchars($_GET['product_id'], ENT_QUOTES, 'UTF-8');
    $omschrijving = htmlspecialchars($_GET['omschrijving'], ENT_QUOTES, 'UTF-8');
    $prijs = htmlspecialchars($_GET['prijs'], ENT_QUOTES, 'UTF-8');

    $sql = "UPDATE producten SET omschrijving=?, prijs=? WHERE product_id=?";
    $db->run($sql, [$omschrijving, $prijs, $product_id]);
    header('Location: select-product.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link rel="stylesheet" href="../formstyle.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h2>Productgegevens Bewerken</h2>
    <form method="GET">
        <?php echo("<label for='product_id'>Product ID: $product_id</label>"); ?>
        <?php echo("<input type='hidden' name='product_id' value='$product_id'>"); ?>
        <label for="omschrijving">Omschrijving:</label>
        <?php echo("<input type='text' name='omschrijving' value='$omschrijving'>"); ?>
        <label for="prijs">Prijs:</label>
        <?php echo("<input type='text' name='prijs' value='$prijs'>"); ?>
        <input type="submit" name="knopje" value="Update">
    </form>
    <a href="select-product.php">Terug</a>
</body>
</html>
