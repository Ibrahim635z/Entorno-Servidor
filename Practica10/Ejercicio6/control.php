

<?php

session_start();


if (!isset($_SESSION["cesta"])) {
    $_SESSION["cesta"] = array();
}


$articulos = [
    ["1", "Sombrilla", 19.90],
    ["2", "Zapatillas", 49.90],
    ["3", "Estanteria", 28.50],
    ["4", "Piscina", 39.90]
];


if (isset($_POST["articulo"])) {
    $codigo = $_POST["codigo"];
    $nombre = $_POST["articulo"];
    $precio = (float)$_POST["precio"]; 

    $articulo = array($codigo, $nombre, $precio);
    array_push($_SESSION["cesta"], $articulo); 
    
  
    header('Location: ' . strtok($_SERVER["REQUEST_URI"], '?'));
    exit;
}


if (isset($_POST["id_eliminar"])) {
    $id_a_eliminar = (int)$_POST["id_eliminar"];

    if (isset($_SESSION["cesta"][$id_a_eliminar])) {
        unset($_SESSION["cesta"][$id_a_eliminar]);
        $_SESSION["cesta"] = array_values($_SESSION["cesta"]);
    }
    

    header('Location: ' . strtok($_SERVER["REQUEST_URI"], '?'));
    exit;
}


//  VACIAR LA CESTA COMPLETA

if (isset($_POST["vaciar"])) {
    // Para vaciar la cesta, simplemente redefinimos el array de sesión como vacío.
    $_SESSION["cesta"] = array();
    
    // Redirección para limpiar la URL
    header('Location: ' . strtok($_SERVER["REQUEST_URI"], '?'));
    exit;
}


?>