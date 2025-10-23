<?php


$myfile = fopen("colores.txt", "w") or die("No se pudo abrir el archivo!");

$txt = "Rojo\n";
fwrite($myfile, $txt);
fclose($myfile);
echo "¡Archivo  sobrescrito con éxito! <br>";

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