
<?php



require_once("contador_visitas.php"); 

// Registrar la visita a esta página
registrar_visita("pag1.php");
$contador = contar_visitas();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Página A</title>
</head>
<body>
    <h1>Bienvenido a la Página A</h1>
    <p>
        Has visitado <?php echo $contador; ?> páginas distintas durante esta sesión.
        
    </p>

    <p><a href="pag2.php">Ir a Página B</a></p>
    <p><a href="pag3.php">Ir a Página C</a></p>
    
</body>
</html>