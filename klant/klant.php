<?php

include "db.php";

$db = new Database("ledelidb");

class Klant {
    public $klant_id;
    public $klant_naam;
    public $email;
    public $wachtwoord;
}