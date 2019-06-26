<?php

$servidor      = "localhost";

$root          = "root";
$root_password = "";

$usuario       = 'phpmx_u';  // esto va a [secreto/variables.php]
$password      = 'phpmx_p';
$base_de_datos = 'phpmx';

echo "<pre>";
try {
    //$dbh = new PDO("mysql:host=localhost", $root, $root_password);
    $dbh = new PDO("mysql:host=$servidor", $root, $root_password);

    $dbh->exec("CREATE DATABASE `$base_de_datos`;
            CREATE USER `$usuario`@`$servidor` IDENTIFIED BY '$password';
            GRANT ALL ON `$base_de_datos`.* TO '$usuario'@'$servidor';
            FLUSH PRIVILEGES;")
    or die(print_r($dbh->errorInfo(), true));
} catch (PDOException $e) {
    die("DB ERROR: ". $e->getMessage());
}
echo "`$base_de_datos` Creada";
?>
