<?php
// Bloque 1: Crear y escribir en el archivo nombres.txt 
$myfile = fopen("nombres.txt", "a") or die("No se pudo abrir el archivo para escritura!");
$txt = "Juanito\n";
fwrite($myfile, $txt);
$txt = "Carlos\n";
fwrite($myfile, $txt);
fclose($myfile);

?>