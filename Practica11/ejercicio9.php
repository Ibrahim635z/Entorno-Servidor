<?php
// 9. Crear un archivo nuevo solo si no existe (x)
echo "Ejemplo crear archivo de forma exclusiva (Modo: x). <br>";

$nombre_archivo = "nuevo.txt";
$contenido = "Este texto solo se escribe si el archivo es nuevo.";

$myfile = fopen($nombre_archivo, "x");

if ($myfile) {
    fwrite($myfile, $contenido);
    fclose($myfile);
    echo "¡Archivo " . $nombre_archivo . " creado con éxito! <br>";
} else {
    echo "¡ERROR! No se puede crear el archivo " . $nombre_archivo . " porque ya existe. <br>";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio</title>
</head>

<body>

    
</body>

</html>