<?php

define("DB_SERVERNAME", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "root");
define("DB_NAME", "db_university");
define("DB_PORT", 3306);

$connessione = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);


if ($connessione && $connessione->connect_error) {
    echo "Errore";
    die();
}
?>