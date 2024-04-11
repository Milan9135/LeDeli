<?php
include "../db.php";

class Reservering {
    public $reservering_id;
    public $klant_id;
    public $tafel_id;
    public $reserverings_datum;
    public $begin_tijd;
    public $eind_tijd;

    function __construct($reservering_id, $klant_id, $tafel_id, $reserverings_datum, $begin_tijd, $eind_tijd)
    {
        $this->reservering_id = $reservering_id;
        $this->klant_id = $klant_id;
        $this->tafel_id = $tafel_id;
        $this->reserverings_datum = $reserverings_datum;
        $this->begin_tijd = $begin_tijd;
        $this->eind_tijd = $eind_tijd;
    }

    function Insert($db) {
        $sql = "INSERT INTO Reserveringen (klant_id, tafel_id, reserverings_datum, begin_tijd, eind_tijd) VALUES (?, ?, ?, ?, ?)";
        $db->run($sql, [$this->klant_id, $this->tafel_id, $this->reserverings_datum, $this->begin_tijd, $this->eind_tijd]);
    }

    function Edit($db) {
        $sql = "UPDATE Reserveringen SET klant_id=?, tafel_id=?, reserverings_datum=?, begin_tijd=?, eind_tijd=? WHERE reservering_id=?";
        $db->run($sql, [$this->klant_id, $this->tafel_id, $this->reserverings_datum, $this->begin_tijd, $this->eind_tijd, $this->reservering_id]);
    }
}

function GetReserveringen($db) {
    $sqlReserveringen = "SELECT * FROM Reserveringen";
    $reserveringen = $db->run($sqlReserveringen)->fetchAll(PDO::FETCH_ASSOC);
    return $reserveringen;
}

function DeleteReservering($db, $reservering_id) {
    $sql = "DELETE FROM Reserveringen WHERE reservering_id=?";
    $db->run($sql, [$reservering_id]);
}
?>
