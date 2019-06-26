<?php
echo "<pre>";
require_once "../secreto/variables.php";  // se supone fuera del ambito del servidor web

try {
     $dbh = new PDO("mysql:dbname=$base_de_datos;host=$servidor", "$usuario", "$password" );
     $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
     $statement=$dbh->prepare("DELETE FROM $tabla ".
                                " WHERE id='".$_GET['id']."'");
     $statement->execute();
     echo "Renglones afectados : ".$statement->rowCount().PHP_EOL;  // Checar errores
     echo "200 (OK)".PHP_EOL;

} catch(PDOException $e) {
    echo $e->getMessage();
}

?>
