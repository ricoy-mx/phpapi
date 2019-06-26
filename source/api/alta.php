<?php
echo "<pre>";
require_once "../secreto/variables.php";  // se supone fuera del ambito del servidor web
echo $_GET['id'].PHP_EOL;
echo $_GET['nombre'].PHP_EOL;
echo $_GET['edad'].PHP_EOL;

try {
     $dbh = new PDO("mysql:dbname=$base_de_datos;host=$servidor", "$usuario", "$password" );
     $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
     $statement=$dbh->prepare("INSERT INTO $tabla (id, nombre, edad)
                              VALUES ('".$_GET['id']."','".$_GET['nombre']."','".$_GET['edad']."');");
     $statement->execute();
     echo "200 (OK)".PHP_EOL;

} catch(PDOException $e) {
    echo $e->getMessage();
}

?>
