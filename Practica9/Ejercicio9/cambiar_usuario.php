<?php
// Asegúrate de iniciar la sesión en el script que va a modificar la variable
session_start();

// 1. Verificación de sesión (seguridad)
if (!isset($_SESSION["usuario"])) {
    header("Location: login.html");
    exit();
}

// 2. Verificamos que se haya enviado el formulario y el nuevo valor
if (isset($_POST["accion"]) && $_POST["accion"] == "cambiar" && isset($_POST["nuevo_usuario"])) {
    
    $nuevo_usuario = trim($_POST["nuevo_usuario"]);
    
    // 3. Verificamos que el campo no esté vacío
    if (!empty($nuevo_usuario)) {
        
        // Objetivo cumplido: Actualizar $_SESSION["usuario"]
        $_SESSION["usuario"] = $nuevo_usuario; 
        
        // Redireccionamos de vuelta a bienvenida.php para ver el cambio
        header("Location: bienvenida.php");
        exit();
    }
}

// Si se accede sin enviar el formulario, redirigir
header("Location: bienvenida.php");
exit();

?>