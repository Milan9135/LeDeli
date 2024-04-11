<?php
include "../db.php";

class Tafel {
    public $tafel_id;
    public $klant_id;

    function __construct($tafel_id, $klant_id)
    {
        $this->tafel_id = $tafel_id;
        $this->klant_id = $klant_id;
    }

    function Insert($db) {
        $sql = "INSERT INTO Tafels (klant_id) VALUES (?)";
        $db->run($sql, [$this->klant_id]);
    }

    function Edit($db) {
        $sql = "UPDATE Tafels SET klant_id=? WHERE tafel_id=?";
        $db->run($sql, [$this->klant_id, $this->tafel_id]);
    }
}

function GetTafels($db) {
    $sqlTafels = "SELECT * FROM Tafels";
    $tafels = $db->run($sqlTafels)->fetchAll(PDO::FETCH_ASSOC);
    return $tafels;
}

function DeleteTafel($db, $tafel_id) {
    $sql = "DELETE FROM Tafels WHERE tafel_id=?";
    $db->run($sql, [$tafel_id]);
}
?>
