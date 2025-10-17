<?php

session_start();


$usuario_simulado = "Ibra"; 


$_SESSION["nombre_usuario"] = $usuario_simulado;


$_SESSION["autenticado"] = true;


header("Location: pagina1.php");
exit();
?>