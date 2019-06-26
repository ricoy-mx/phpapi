<?php
$servidor = "192.168.64.3";
$usuario  = "phpmx";
$password = "password#phpmx";

try {
    $conecta = new PDO("mysql:host=$servidor;dbname=myDB", $usuario, $password);
    // poner el modo error de PDO a excepción
    $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexión exitosa";
    }
catch(PDOException $e)
    {
    echo "Conexión fallida: " . $e->getMessage();
    }
?>
