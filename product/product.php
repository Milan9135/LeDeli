<?php
include "../db.php";

class Product {
    public $product_id;
    public $omschrijving;
    public $prijs;

    function __construct($product_id, $omschrijving, $prijs)
    {
        $this->product_id = $product_id;
        $this->omschrijving = $omschrijving;
        $this->prijs = $prijs;
    }

    function Insert($db) {
        $sql = "INSERT INTO producten (omschrijving, prijs) VALUES (?, ?)";
        $db->run($sql, [$this->omschrijving, $this->prijs]);
    }

    function Edit($db) {
        $sql = "UPDATE producten SET omschrijving=?, prijs=? WHERE product_id=?";
        $db->run($sql, [$this->omschrijving, $this->prijs, $this->product_id]);
    }

    function Delete($db) {
        $sql = "DELETE FROM producten WHERE product_id=?";
        $db->run($sql, [$this->product_id]);
    }
}

function GetProducten($db) {
    // Selecteer alle gegevens uit de Producten tabel
    $sqlProducten = "SELECT * FROM Producten";
    $producten = $db->run($sqlProducten)->fetchAll(PDO::FETCH_ASSOC);
    return $producten;
}