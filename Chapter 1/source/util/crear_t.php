<?php
echo "<pre>";
require_once "../secreto/variables.php";  // se supone fuera del ambito del servidor web

echo "Servidor      : $servidor".PHP_EOL;
echo "Usuario       : $usuario".PHP_EOL;
echo "Password      : $password".PHP_EOL;
echo "Base de Datos : $base_de_datos".PHP_EOL;
echo "Tabla         : $tabla".PHP_EOL;

try {
     $dbh = new PDO("mysql:dbname=$base_de_datos;host=$servidor", "$usuario", "$password" );
     $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
     $sql ="CREATE table $tabla(
     ID INTEGER AUTO_INCREMENT PRIMARY KEY,
     nombre VARCHAR( 50 ) NOT NULL,
     edad INTEGER NOT NULL);" ;
     $dbh->exec($sql);
     print("Tabla [$tabla] Creada.\n");

} catch(PDOException $e) {
    echo $e->getMessage();
}
?>
