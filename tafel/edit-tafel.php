<?php 
include "../db.php";

$tafel_id = htmlspecialchars($_GET['tafel_id'], ENT_QUOTES, 'UTF-8');
$klant_id = htmlspecialchars($_GET['klant_id'], ENT_QUOTES, 'UTF-8');

if (isset($_GET['knopje'])) {
    $tafel_id = htmlspecialchars($_GET['tafel_id'], ENT_QUOTES, 'UTF-8');
    $klant_id = htmlspecialchars($_GET['klant_id'], ENT_QUOTES, 'UTF-8');

    $sql = "UPDATE Tafels SET klant_id=? WHERE tafel_id=?";
    $db->run($sql, [$klant_id, $tafel_id]);
    header('Location: select-tafel.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Tafel</title>
    <link rel="stylesheet" href="../formstyle.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h2>Tafel Bewerken</h2>
    <form method="GET">
        <?php echo("<label for='tafel_id'>Tafel ID: $tafel_id</label>"); ?>
        <?php echo("<input type='hidden' name='tafel_id' value='$tafel_id'>"); ?>
        <label for="klant_id">Klant ID:</label>
        <?php echo("<input type='text' name='klant_id' value='$klant_id'>"); ?>
        <input type="submit" name="knopje" value="Update">
    </form>
    <h3><a href="select-tafel.php">Terug</a></h3>
</body>
</html>
