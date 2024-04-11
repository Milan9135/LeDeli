<?php 
include "reservering.php";

$reservering_id = $_GET["reservering_id"];

if (isset($_GET['knopje'])) {
    $reservering_id = $_GET["reservering_id"];
    DeleteReservering($db, $reservering_id);
    header('Location: select-reservering.php');
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
        <label for="reservering_id">Reservering ID:</label>
        <?php echo("<input type='text' name='reservering_id' value='$reservering_id'>"); ?>
        <input type="submit" name="knopje">
    </form>
    <h3><a href="select-reservering.php">Terug</a></h3>
</body>
</html>
