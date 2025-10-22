<?php

session_start();


if (!isset($_SESSION["cesta"])) {
    
    $_SESSION["cesta"] = array();
}


if (isset($_POST["articulo"])) {
    
    $codigo = $_POST["codigo"];
    $nombre = $_POST["articulo"];
    $precio = (float)$_POST["precio"];


    $articulo = array($codigo, $nombre, $precio); 

    array_push($_SESSION["cesta"], $articulo); 
    
    // Redireccionamos para limpiar la URL y evitar la doble sumisión al recargar
    header('Location: ' . strtok($_SERVER["REQUEST_URI"], '?'));
    exit;
}


// Lógica para ELIMINAR artículos

// Si hemos recibido el índice de un artículo a eliminar
if (isset($_POST["id_eliminar"])) {
    $id_a_eliminar = (int)$_POST["id_eliminar"];

    // Verificamos que el índice es válido antes de eliminar
    if (isset($_SESSION["cesta"][$id_a_eliminar])) {
        // Usamos unset() para quitar el elemento del array por su índice (clave)
        unset($_SESSION["cesta"][$id_a_eliminar]);
        
       
    }
    
    // Redireccionamos para limpiar la URL
    header('Location: ' . strtok($_SERVER["REQUEST_URI"], '?'));
    exit;
}

$articulos = [
    ["1", "Sombrilla", 19.90],
    ["2", "Zapatillas", 49.90],
    ["3", "Estanteria", 28.50],
    ["4", "Piscina", 39.90]
];
?>