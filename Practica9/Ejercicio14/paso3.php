<?php


session_start();


if (isset($_GET['accion']) && $_GET['accion'] == 'reiniciar') {
    session_unset(); 
    session_destroy(); 
    header("Location: paso1.php");
    exit();
}


if (!isset($_SESSION['nombre']) || !isset($_SESSION['edad'])) {
    
    header("Location: paso1.php");
    exit();
}


$nombre = htmlspecialchars($_SESSION['nombre']);
$edad = htmlspecialchars($_SESSION['edad']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paso 3: Resumen</title>
</head>
<body>
    <h1>Paso 3 de 3</h1>
    
    
    <div class="resumen">
        <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
        <p><strong>Edad:</strong> <?php echo $edad; ?></p>
    </div>
    
    <hr>
    
    <p>
        <a href="paso2.php">Volver (Cambiar Edad)</a> | 
        <a href="paso3.php?accion=reiniciar">Reiniciar Formulario (Borrar Sesión)</a>
    </p>
</body>
</html>