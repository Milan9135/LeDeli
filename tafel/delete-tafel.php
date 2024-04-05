<?php 

include "../db.php";

$id = $_GET["id"];

if (isset($_GET['knopje'])) {
    $id = $_GET["id"];
    $sql = "DELETE FROM tafels WHERE tafel_id=?";
    $db->run($sql, [$id]);
    header('Location: select-tafel.php');
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
        <label for="id">id:</label>
        <?php echo("<input type='text' name='id' value='$id'>"); ?>
        <input type="submit" name="knopje">
    </form>
    <h3><a href="select-tafel.php">terug</a></h3>
</body>
</html>