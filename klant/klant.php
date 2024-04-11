<?php
include "../db.php";

class Klant {
    public $klant_id;
    public $klant_naam;
    public $email;
    public $wachtwoord;

    function __construct($klant_id, $klant_naam, $email, $wachtwoord)
    {
        $this->klant_id = $klant_id;
        $this->klant_naam = $klant_naam;
        $this->email = $email;
        $this->wachtwoord = $wachtwoord;
    }

    function Insert($db) {
        $sql = "INSERT INTO Klanten (klant_naam, email, wachtwoord) VALUES (?, ?, ?)";
        $db->run($sql, [$this->klant_naam, $this->email, $this->wachtwoord]);
    }

    function Edit($db) {
        $sql = "UPDATE Klanten SET klant_naam=?, email=?, wachtwoord=? WHERE klant_id=?";
        $db->run($sql, [$this->klant_naam, $this->email, $this->wachtwoord, $this->klant_id]);
    }
}

function DeleteKlant($db, $klant_id) {
    $sql = "DELETE FROM Klanten WHERE klant_id=?";
    $db->run($sql, [$klant_id]);
}

function GetKlanten($db) {
    $sqlKlanten = "SELECT * FROM Klanten";
    $klanten = $db->run($sqlKlanten)->fetchAll(PDO::FETCH_ASSOC);
    return $klanten;
}
?>
