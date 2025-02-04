<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "periodicos";

$conn_string = "host=$host dbname=$dbname user=$user password=$password";
$link = pg_connect($conn_string);

if (!$link) {
    die("Error: Unable to connect to database. " . pg_last_error());
} else {
    echo "Connected to PostgreSQL successfully.\n";
}

// Recuerda cerrar la conexión cuando ya no la necesites
// pg_close($link);

?>