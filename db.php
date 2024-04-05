<?php 

class Database {
    private $pdo; // database connectie
    protected $stmt; // dit is het huidige statement

    public function __construct($db, $host = "localhost:3307", $user = "root", $pass = "")
    {
        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected to $db succesfully";
            session_start();
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function run($sql, $args = NULL)
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($args);
        return $stmt;
    }

    public function getKlantNaam($klant_id, $db) {
        $sql = "SELECT klant_naam FROM Klanten WHERE klant_id = ?";
        $stmt = $db->run($sql, [$klant_id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['klant_naam'];
    }
    
    public function getProductNaam($product_id, $db) {
        $sql = "SELECT omschrijving FROM Producten WHERE product_id = ?";
        $stmt = $db->run($sql, [$product_id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['omschrijving'];
    }
}

$db = new Database("ledelidb");