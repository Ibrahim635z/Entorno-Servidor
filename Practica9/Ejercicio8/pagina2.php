<?php
session_start();


if (!isset($_SESSION["autenticado"]) || $_SESSION["autenticado"] !== true) {
    header("Location: sin_acceso.html");
    exit();
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página 2</title>
</head>
<body>
    <h1>Bienvenido a la Página 2</h1>
    <p>
        Hola de nuevo, <strong><?php echo htmlspecialchars($_SESSION["nombre_usuario"]); ?></strong>. 
        
    </p>
    <p><a href="pagina1.php">Ir a Página 1</a> | <a href="pagina3.php">Ir a Página 3</a></p>
</body>
</html>