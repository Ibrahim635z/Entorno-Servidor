<?php
// die es del Ejercicio 3
$myfile = fopen("frutas.txt", "r") or die("mensaje de Error!");
echo fread($myfile, filesize("frutas.txt"));
fclose($myfile);

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