<?php

$host = "localhost";
$dbname = "rjmg_market";
$srv_username = "root";
$srv_password = "";

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $srv_username, $srv_password);
} catch (PDOException $e) {
    die("Erreur !: " . $e->getMessage());
}