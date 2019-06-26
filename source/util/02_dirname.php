<?php
echo "<pre>";
echo getcwd().PHP_EOL;
echo dirname(__FILE__).PHP_EOL;
echo dirname(__DIR__).PHP_EOL;
echo dirname(dirname(__FILE__)).PHP_EOL;
try {
    require_once '../secreto/variables.php';
} catch (ErrorException $ex) {
    //echo "Unable to load configuration file.";
    // you can exit or die here if you prefer - also you can log your error,
    // or any other steps you wish to take
    die("INCLUDE ERROR: ". $ex->getMessage());
}
?>
