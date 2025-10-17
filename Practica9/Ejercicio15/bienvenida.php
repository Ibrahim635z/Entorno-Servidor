<?php

require_once("control_timeout.php"); 


$usuario = htmlspecialchars($_SESSION["usuario"]);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bienvenido/a</title>
</head>
<body>
    <h1>Bienvenido <?php echo $usuario; ?></h1>
    
    <p>Esta página se cerrará si permaneces inactivo por más de 10 segundos. ¡Prueba a esperar!</p>

    <form action="login.php" method="get">
        <button type="submit" value="salir" name="accion">Cerrar Sesión</button>
    </form>
</body>
</html>