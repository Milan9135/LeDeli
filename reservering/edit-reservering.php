<?php 
include "../db.php";

$reservering_id = htmlspecialchars($_GET['reservering_id'], ENT_QUOTES, 'UTF-8');
$klant_id = htmlspecialchars($_GET['klant_id'], ENT_QUOTES, 'UTF-8');
$tafel_id = htmlspecialchars($_GET['tafel_id'], ENT_QUOTES, 'UTF-8');
$reserverings_datum = htmlspecialchars($_GET['reserverings_datum'], ENT_QUOTES, 'UTF-8');
$begin_tijd = htmlspecialchars($_GET['begin_tijd'], ENT_QUOTES, 'UTF-8');
$eind_tijd = htmlspecialchars($_GET['eind_tijd'], ENT_QUOTES, 'UTF-8');

if (isset($_GET['knopje'])) {
    $reservering_id = htmlspecialchars($_GET['reservering_id'], ENT_QUOTES, 'UTF-8');
    $klant_id = htmlspecialchars($_GET['klant_id'], ENT_QUOTES, 'UTF-8');
    $tafel_id = htmlspecialchars($_GET['tafel_id'], ENT_QUOTES, 'UTF-8');
    $reserverings_datum = htmlspecialchars($_GET['reserverings_datum'], ENT_QUOTES, 'UTF-8');
    $begin_tijd = htmlspecialchars($_GET['begin_tijd'], ENT_QUOTES, 'UTF-8');
    $eind_tijd = htmlspecialchars($_GET['eind_tijd'], ENT_QUOTES, 'UTF-8');

    $sql = "UPDATE Reserveringen SET klant_id=?, tafel_id=?, reserverings_datum=?, begin_tijd=?, eind_tijd=? WHERE reservering_id=?";
    $db->run($sql, [$klant_id, $tafel_id, $reserverings_datum, $begin_tijd, $eind_tijd, $reservering_id]);
    header('Location: select-reservering.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Reservering</title>
    <link rel="stylesheet" href="../formstyle.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h2>Reservering Bewerken</h2>
    <form method="GET">
        <?php echo("<label for='reservering_id'>Reservering ID: $reservering_id</label>"); ?>
        <?php echo("<input type='hidden' name='reservering_id' value='$reservering_id'>"); ?>
        <label for="klant_id">Klant ID:</label>
        <?php echo("<input type='text' name='klant_id' value='$klant_id'>"); ?>
        <label for="tafel_id">Tafel ID:</label>
        <?php echo("<input type='text' name='tafel_id' value='$tafel_id'>"); ?>
        <label for="reserverings_datum">Reserverings Datum:</label>
        <?php echo("<input type='date' name='reserverings_datum' value='$reserverings_datum'>"); ?>
        <label for="begin_tijd">Begin Tijd:</label>
        <?php echo("<input type='time' name='begin_tijd' value='$begin_tijd'>"); ?>
        <label for="eind_tijd">Eind Tijd:</label>
        <?php echo("<input type='time' name='eind_tijd' value='$eind_tijd'>"); ?>
        <input type="submit" name="knopje" value="Update">
    </form>
    <a href="select-reservering.php">Terug</a>
</body>
</html>
