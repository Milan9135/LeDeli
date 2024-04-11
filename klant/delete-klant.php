<?php 

include "klant.php";

$id = $_GET["klant_id"];

if (isset($_GET['knopje'])) {
    $id = $_GET["klant_id"];
    DeleteKlant($db, $id);
    header('Location: select-klant.php');
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
        <label for="id">Klant ID:</label>
        <?php echo("<input type='text' name='klant_id' value='$id'>"); ?>
        <input type="submit" name="knopje">
    </form>
    <h3><a href="select-klant.php">Terug</a></h3>
</body>
</html>
