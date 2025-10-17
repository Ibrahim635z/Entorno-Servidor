<?php

session_start();


if (isset($_GET['tema'])) {
    $nuevo_tema = $_GET['tema'];
    
    
    if ($nuevo_tema === 'oscuro' || $nuevo_tema === 'claro') {
        $_SESSION['tema'] = $nuevo_tema;
    }
    
    // Redirigir para limpiar el parámetro GET (URL)
    header("Location: tema.php");
    exit();
}

// por defecto claro
$tema_actual = isset($_SESSION['tema']) ? $_SESSION['tema'] : 'claro';

if ($tema_actual === 'oscuro') {
    $fondo = 'black';
    $texto = 'white';
} else {
    $fondo = 'white';
    $texto = 'black';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selector de Tema Básico</title>

    <style>
        body {
            /* Aplicamos los colores determinados por la sesión */
            background-color: <?php echo $fondo; ?>;
            color: <?php echo $texto; ?>;
            font-family: sans-serif;
            padding: 20px;
        }
    </style>
</head>
<body>

    <h1>Ejercicio 13: Recordar Tema Visual</h1>
    
    <p>El tema actual es: <strong><?php echo $tema_actual; ?></strong></p>
    
    <p>
        <a href="?tema=claro"><button>Modo Claro</button></a>
        <a href="?tema=oscuro"><button>Modo Oscuro</button></a>
    </p>



</body>
</html>