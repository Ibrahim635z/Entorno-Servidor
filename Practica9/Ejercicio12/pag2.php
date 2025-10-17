
<?php

require_once("contador_visitas.php"); 

// Registrar la visita a esta página
registrar_visita("pag2.php");
$conteo = contar_visitas();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Página B</title>
</head>
<body>
    <h1>Bienvenido a la Página B</h1>
    <p>
        Has visitado <?php echo $conteo; ?> páginas distintas durante esta sesión.
    
    </p>

    <p><a href="pag1.php">Ir a Página A</a></p>
    <p><a href="pag3.php">Ir a Página C</a></p>

</body>
</html>