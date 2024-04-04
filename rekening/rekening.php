<?php

include "db.php";

$db = new Database("ledelidb");

class Rekening {
    public $rekening_id;
    public $klant_id;
    public $product_id;
    public $aantal;
}