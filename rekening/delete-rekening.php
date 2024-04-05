<?php 

include "../db.php";

$id = $_GET["rekening_id"];

if (isset($_GET['knopje'])) {
    $id = $_GET["rekening_id"];
    $sql = "DELETE FROM rekeningen WHERE rekening_id=?";
    $db->run($sql, [$id]);
    header('Location: select-rekening.php');
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
        <label for="id">Rekening ID:</label>
        <?php echo("<input type='text' name='rekening_id' value='$id'>"); ?>
        <input type="submit" name="knopje">
    </form>
    <h3><a href="select-rekening.php">Terug</a></h3>
</body>
</html>
