<?php 
include "rekening.php";

$rekening_id = $_GET["rekening_id"];

if (isset($_GET['knopje'])) {

    $rekening_id = $_GET["rekening_id"];
    DeleteRekening($db, $rekening_id);
    
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
        <label for="rekening_id">Rekening ID:</label>
        <?php echo("<input type='text' name='rekening_id' value='$rekening_id'>"); ?>
        <input type="submit" name="knopje">
    </form>
    <h3><a href="select-rekening.php">Terug</a></h3>
</body>
</html>
