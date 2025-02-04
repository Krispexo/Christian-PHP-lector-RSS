<?php

$Repit=false;
$host="localhost";
$user="root";
$password="";
$dbname="periodicos";

$conn_string = "host=$host dbname=$dbname user=$user password=$password";
$link = pg_connect($conn_string);

if (!$link) {
    echo "Error: Unable to open database\n";
} else {
    echo "Opened database successfully\n";
}