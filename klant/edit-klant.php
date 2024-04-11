<?php 
include "klant.php";

$klant_id = htmlspecialchars($_GET['klant_id'], ENT_QUOTES, 'UTF-8');
$klant_naam = htmlspecialchars($_GET['klant_naam'], ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_GET['email'], ENT_QUOTES, 'UTF-8');
$wachtwoord = htmlspecialchars($_GET['wachtwoord'], ENT_QUOTES, 'UTF-8');

if (isset($_GET['knopje'])) {
    $klant_id = htmlspecialchars($_GET['klant_id'], ENT_QUOTES, 'UTF-8');
    $klant_naam = htmlspecialchars($_GET['klant_naam'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_GET['email'], ENT_QUOTES, 'UTF-8');
    $wachtwoord = htmlspecialchars($_GET['wachtwoord'], ENT_QUOTES, 'UTF-8');

    $klant = new Klant($klant_id, $klant_naam, $email, $wachtwoord);
    $klant->Edit($db);
    header('Location: select-klant.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Klant</title>
    <link rel="stylesheet" href="../formstyle.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h2>Edit Klantgegevens</h2>
    <form method="GET">
        <?php echo("<label for='klant_id'>klant ID: $klant_id</label>"); ?>
        <?php echo("<input type='hidden' name='klant_id' value='$klant_id'>"); ?>
        <label for="klant_naam">Klant naam:</label>
        <?php echo("<input type='text' name='klant_naam' value='$klant_naam'>"); ?>
        <label for="email">Email:</label>
        <?php echo("<input type='text' name='email' value='$email'>"); ?>
        <label for="wachtwoord">Wachtwoord:</label>
        <?php echo("<input type='text' name='wachtwoord' value='$wachtwoord'>"); ?>
        <input type="submit" name="knopje" value="Update">
    </form>
    <a href="select-klant.php">Terug</a>
</body>
</html>
