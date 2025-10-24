<?php
$fecha=date('Y_m_d');
$nombreArchivo="log_$fecha";
$hora=date('h:m:s');
$myfile = fopen($nombreArchivo, "w") or die("Unable to open file!");
$txt =  "$hora ";
fwrite($myfile, $txt);
$txt = "Archivo creado correctamente";
fwrite($myfile, $txt);
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
  <p>El archivo <?php echo $nombreArchivo; ?> ha sido creado exitosamente.</p>
</body>
</html>