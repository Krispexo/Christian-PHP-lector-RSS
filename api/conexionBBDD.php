<?php
 
$Repit = false;
 
 
// Cadena de conexión
$conn_string = "postgres://default:RCT8Vhrbi6ox@ep-quiet-king-a44kprl7-pooler.us-east-1.aws.neon.tech/verceldb?sslmode=require";
 
// Conectar a PostgreSQL
$link = pg_connect($conn_string);
 
if (!$link) {
    die("Error en la conexión: " . pg_last_error());
}
 
// Configurar codificación de caracteres a UTF8
pg_set_client_encoding($link, "UTF8");
 
echo "Conexión a PostgreSQL exitosa.";
 
?>