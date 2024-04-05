<?php 

include "../db.php";

$id = $_GET["product_id"];

if (isset($_GET['knopje'])) {
    $id = $_GET["product_id"];
    $sql = "DELETE FROM Producten WHERE product_id=?";
    $db->run($sql, [$id]);
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
        <label for="id">Product ID:</label>
        <?php echo("<input type='text' name='product_id' value='$id'>"); ?>
        <input type="submit" name="knopje">
    </form>
    <h3><a href="select-product.php">Terug</a></h3>
</body>
</html>
