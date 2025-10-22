<?php


session_start();


$articulos_iniciales = [
    ["1", "Sombrilla", 19.90, 80], 
    ["2", "Zapatillas", 49.90, 50],
    ["3", "Estanteria", 28.50, 40],
    ["4", "Piscina", 39.90, 10] 
];




if (!isset($_SESSION["cesta"])) {
    $_SESSION["cesta"] = array();
}

// ¡LA CLAVE! Si los artículos (con su stock) no existen en la sesión, 
// los creamos a partir de la definición inicial.
// A partir de ahora, SÓLO usaremos $_SESSION["articulos"].
if (!isset($_SESSION["articulos"])) {
    $_SESSION["articulos"] = $articulos_iniciales;
}



function buscarIndiceArticulo($codigo) {
    foreach ($_SESSION["articulos"] as $key => $articulo) {
        if ($articulo[0] === $codigo) {
            return $key;
        }
    }
    return false;
}


if (isset($_POST["codigo"])) {
    $codigo = $_POST["codigo"];
    
   
    $indice = buscarIndiceArticulo($codigo);

    if ($indice !== false) {
        // Verificamos el stock ACTUAL 
        if ($_SESSION["articulos"][$indice][3] > 0) {
            
            // 1. Reducir el stock en la sesión
            $_SESSION["articulos"][$indice][3]--; 
            
            // 2. Añadir el artículo a la cesta
            $articulo_a_comprar = [
                $_SESSION["articulos"][$indice][0], // codigo
                $_SESSION["articulos"][$indice][1], // nombre
                $_SESSION["articulos"][$indice][2]  // precio
            ];
            array_push($_SESSION["cesta"], $articulo_a_comprar);

        } 
    }
    
   
    header('Location: ' . strtok($_SERVER["REQUEST_URI"], '?'));
    exit;
}

// --- 2. Lógica para ELIMINAR (una unidad) de la cesta ---

if (isset($_POST["codigo_eliminar"])) {
    $codigo_a_eliminar = $_POST["codigo_eliminar"];

    // 1. Devolver el stock al artículo correspondiente
    $indice_articulo = buscarIndiceArticulo($codigo_a_eliminar);
    if ($indice_articulo !== false) {
        $_SESSION["articulos"][$indice_articulo][3]++;
    }

    // 2. Buscar y eliminar SÓLO UNA instancia de la cesta

    foreach (array_reverse($_SESSION["cesta"], true) as $key => $item) {
        if ($item[0] === $codigo_a_eliminar) {
            unset($_SESSION["cesta"][$key]);
            break; 
        }
    }
    
    // Re-indexar el array de la cesta
    $_SESSION["cesta"] = array_values($_SESSION["cesta"]);

    // Redirigir
    header('Location: ' . strtok($_SERVER["REQUEST_URI"], '?'));
    exit;
}


// --- 3. Lógica para VACIAR la cesta ---
if (isset($_POST["vaciar"])) {
    
    // Devolvemos todo el stock
    // Recorremos la cesta y sumamos las cantidades a los artículos en sesión
    foreach ($_SESSION["cesta"] as $item) {
        $codigo_devuelto = $item[0];
        $indice_articulo = buscarIndiceArticulo($codigo_devuelto);
        if ($indice_articulo !== false) {
            $_SESSION["articulos"][$indice_articulo][3]++;
        }
    }

    // Vaciamos la cesta
    $_SESSION["cesta"] = array();
    
    // Redirigir
    header('Location: ' . strtok($_SERVER["REQUEST_URI"], '?'));
    exit;
}


?>