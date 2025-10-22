<?php
// Tenemos que inicar la sesión para poder trabajar con ella
session_start();
// un array estático donde guardamos el nombre/descripción del artículo
$articulos = ["Camisa", "Zapatos", "Bolsos", "Pantalón"];
// Comprobar si existe la variable de sesión cesta
// la primera vez que se entra a la aplicación no existe
if (!isset($_SESSION["cesta"])) {
    // Si no existe
    // Se crea la variable de sesión 'cesta' como un array vacío
    // En ese array iremos añadiendo los artículos que seleccione el usuario
    $_SESSION["cesta"] = array();
}
// Si hemos recibido un artículo
if (isset($_GET["articulo"])) {
    // Lo recogemos en una variable temporal
    $articulo = $_GET["articulo"];
    // Y lo añadimos a la cesta. Ver la función array_push
    array_push($_SESSION["cesta"], $articulo);
}
