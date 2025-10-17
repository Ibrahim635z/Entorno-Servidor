<?php

session_start();

if (isset($_GET["accion"])) {
    $accion = $_GET["accion"];
    switch ($accion) {
        case 'entrar':

            $usuario = $_GET["usuario"];
            $clave = $_GET["clave"];

            if ($usuario == "admin" && $clave == "1234") {

                $_SESSION["usuario"] = $usuario;

                header("Location: bienvenida.php");
            } else {
                header("Location: login.html");
                exit();
            }

            break;
        case 'salir':
            session_destroy();
            
            header("Location: login.html");
            exit();
            break;
    }
}
