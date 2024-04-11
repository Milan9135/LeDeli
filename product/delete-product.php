<?php 

include "product.php";

$product_id = $_GET["product_id"];

if (isset($_GET['knopje'])) {
    $product_id = $_GET["product_id"];

    $product = new Product($product_id, "empty", "empty");
    $product->Delete($db);
    header('Location: select-product.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete row</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../formstyle.css">
</head>
<body>
<h2>Delete row</h2>
<form method="GET">
        <label for="product_id">Product ID:</label>
        <?php echo("<input type='text' name='product_id' value='$product_id'>"); ?>
        <input type="submit" name="knopje">
    </form>
    <h3><a href="select-product.php">Terug</a></h3>
</body>
</html>
