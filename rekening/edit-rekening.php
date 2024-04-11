<?php 
include "rekening.php";

$rekening_id = htmlspecialchars($_GET['rekening_id'], ENT_QUOTES, 'UTF-8');
$klant_id = htmlspecialchars($_GET['klant_id'], ENT_QUOTES, 'UTF-8');
$product_id = htmlspecialchars($_GET['product_id'], ENT_QUOTES, 'UTF-8');
$aantal = htmlspecialchars($_GET['aantal'], ENT_QUOTES, 'UTF-8');

if (isset($_GET['knopje'])) {
    $rekening_id = htmlspecialchars($_GET['rekening_id'], ENT_QUOTES, 'UTF-8');
    $klant_id = htmlspecialchars($_GET['klant_id'], ENT_QUOTES, 'UTF-8');
    $product_id = htmlspecialchars($_GET['product_id'], ENT_QUOTES, 'UTF-8');
    $aantal = htmlspecialchars($_GET['aantal'], ENT_QUOTES, 'UTF-8');

    $rekening = new Rekening($rekening_id, $klant_id, $product_id, $aantal);
    $rekening->Edit($db);
    
    header('Location: select-rekening.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Rekening</title>
    <link rel="stylesheet" href="../formstyle.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h2>Rekeninggegevens Bewerken</h2>
    <form method="GET">
    <?php echo("<label for='rekening_id'>Rekening ID: $rekening_id</label>"); ?>
        <?php echo("<input type='hidden' name='rekening_id' value='$rekening_id'>"); ?>
        <label for="klant_id">Klant ID:</label>
        <?php echo("<input type='text' name='klant_id' value='$klant_id'>"); ?>
        <label for="product_id">Product ID:</label>
        <?php echo("<input type='text' name='product_id' value='$product_id'>"); ?>
        <label for="aantal">Aantal:</label>
        <?php echo("<input type='text' name='aantal' value='$aantal'>"); ?>
        <input type="submit" name="knopje" value="Update">
    </form>
    <a href="select-rekening.php">Terug</a>
</body>
</html>
