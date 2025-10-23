
<?php
// 8. Agregar texto al final de un archivo con a

$myfile = fopen("colores.txt", "a") or die("No se pudo abrir/crear el archivo!");

$txt_a_agregar = "Amarillo\n";

fwrite($myfile, $txt_a_agregar);
fclose($myfile);

echo "¡Se ha añadido 'Amarillo' al final de colores.txt! <br>";

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