<?php

$dbUser = 'root';
$dbPassword = 'Alley19plm';
$dbHost = 'localhost';
$dbDatabase = 'employees';

try{
    $dbConnection = new PDO("mysql:host=${dbHost};dbname=${dbDatabase}", $dbUser, $dbPassword);
    $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Error en la conexión a la base de datos: '.$e->getMessage();
}

?>