<?php

session_start();


$nombre = "Ana Pérez"; 

$_SESSION["nombre"] = $nombre;

echo "El nombre guardado es: " . htmlspecialchars($_SESSION["nombre"]) . "\n";

?>

