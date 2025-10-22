<?php
// Tenemos que inicar la sesión para poder trabajar con ella
session_start();

// Comprobar si existe la variable de sesión cesta
// la primera vez que se entra a la aplicación no existe
if (!isset($_SESSION["cesta"])) {
    // Si no existe
    // Se crea la variable de sesión 'cesta' como un array vacío
    // En ese array iremos añadiendo los artículos que seleccione el usuario
    $_SESSION["cesta"] = array();
}
// Si hemos recibido un artículo
if (isset($_POST["articulo"])) {
    // Recogemos los datos del artículo en variables temporales
    $codigo = $_POST["codigo"];
    $nombre = $_POST["articulo"];
    $precio = (float)$_POST["precio"]; // <-- Muy importante: convertir el precio a número

    // Con esos datos creamos un array
    $articulo = array($codigo, $nombre, $precio); // <-- Creamos un array con LOS TRES datos

    // Y añadimos el array (el artículo con todos sus datos) a la cesta.
    array_push($_SESSION["cesta"], $articulo); // <-- Añadimos el ARRAY completo, no solo el nombre
}
