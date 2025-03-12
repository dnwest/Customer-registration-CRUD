<?php

$dbFile = 'cadastroclientes.sqlite';
$conn = new SQLite3($dbFile);

if (!$conn) {
    die('Could not connect to the database.');
}

?>