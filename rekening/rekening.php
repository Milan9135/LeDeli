<?php
include "../db.php";

class Rekening {
    public $rekening_id;
    public $klant_id;
    public $product_id;
    public $aantal;

    function __construct($rekening_id, $klant_id, $product_id, $aantal)
    {
        $this->rekening_id = $rekening_id;
        $this->klant_id = $klant_id;
        $this->product_id = $product_id;
        $this->aantal = $aantal;
    }

    function Insert($db) {
        $sql = "INSERT INTO Rekeningen (klant_id, product_id, aantal) VALUES (?, ?, ?)";
        $db->run($sql, [$this->klant_id, $this->product_id, $this->aantal]);
    }

    function Edit($db) {
        $sql = "UPDATE Rekeningen SET klant_id=?, product_id=?, aantal=? WHERE rekening_id=?";
        $db->run($sql, [$this->klant_id, $this->product_id, $this->aantal, $this->rekening_id]);
    }
}

function GetRekeningen($db) {
    $sqlRekeningen = "SELECT * FROM Rekeningen";
    $rekeningen = $db->run($sqlRekeningen)->fetchAll(PDO::FETCH_ASSOC);
    return $rekeningen;
}

function DeleteRekening($db, $rekening_id) {
    $sql = "DELETE FROM Rekeningen WHERE rekening_id=?";
    $db->run($sql, [$rekening_id]);
}
?>
