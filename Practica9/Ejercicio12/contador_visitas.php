<?php
session_start();
// Función para registrar la página actual en la sesión
function registrar_visita($nombre_pagina) {
    // 1. Inicializar el array de sesión si no existe
    if (!isset($_SESSION["paginas_visitadas"])) {
        $_SESSION["paginas_visitadas"] = [];
    }

    // 2. Agregar la página actual al array si no está ya presente
    if (!in_array($nombre_pagina, $_SESSION["paginas_visitadas"])) {
        $_SESSION["paginas_visitadas"][] = $nombre_pagina;
    }
}

// Función para obtener el conteo de páginas distintas visitadas
function contar_visitas() {
    if (isset($_SESSION["paginas_visitadas"])) {
        // La cuenta es simplemente el tamaño del array
        return count($_SESSION["paginas_visitadas"]);
    }
    return 0;
}
?>