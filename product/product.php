<?php

include "db.php";

$db = new Database("ledelidb");

class Product {
    public $product_id;
    public $omschrijving;
    public $prijs;
}