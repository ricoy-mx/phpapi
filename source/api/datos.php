<?php
echo "<pre>";
require_once "../secreto/variables.php";  // se supone fuera del ambito del servidor web

try {
     $dbh = new PDO("mysql:dbname=$base_de_datos;host=$servidor", "$usuario", "$password" );
     $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
     $statement=$dbh->prepare("SELECT * FROM $tabla;");
     $statement->execute();

     $resultado = $statement->fetchAll(PDO::FETCH_ASSOC);
     if(!$resultado) echo "Tabla vacia!".PHP_EOL;
     echo json_encode($resultado);
     echo PHP_EOL.PHP_EOL."Mas claro para los de carbono".PHP_EOL;
     echo json_encode($resultado, JSON_PRETTY_PRINT);
} catch(PDOException $e) {
    echo $e->getMessage();
}
?>
