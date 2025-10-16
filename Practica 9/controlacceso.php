<?php
session_start(); // Como vamos a utilizar la sesión es fundamental incluir esta línea
// Preguntamos si existe la variable de sesión usuario.
// Se crea únicamente cuando la identificación es correcta y se destruye al desconectar
if (!isset($_SESSION["usuario"])) {
// Si no existe la variable de sesión usuario redirigimos a la página de acceso
// El resto de la página ya no se muestra
header("Location:acceso.html");
}
?>
