
<?php

require_once("contador_visitas.php"); 

// Registrar la visita a esta página
registrar_visita("pag3.php");
$conteo = contar_visitas();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Página C</title>
</head>
<body>
    <h1>Bienvenido a la Página C</h1>
    <p>
        Has visitado <?php echo $conteo; ?> páginas distintas durante esta sesión.
    </p>

    <p><a href="pag1.php">Ir a Página A</a></p>
    <p><a href="pag2.php">Ir a Página B</a></p>
    
</body>
</html>