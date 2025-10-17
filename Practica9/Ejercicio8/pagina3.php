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
    <title>Página 3</title>
</head>
<body>
    <h1>Bienvenido a la Página 3</h1>
    <p>
        ¡Última parada! La sesión mantiene a <strong><?php echo htmlspecialchars($_SESSION["nombre_usuario"]); ?></strong> 
       
    </p>
    <p><a href="pagina1.php">Ir a Página 1</a> | <a href="pagina2.php">Ir a Página 2</a></p>
</body>
</html>