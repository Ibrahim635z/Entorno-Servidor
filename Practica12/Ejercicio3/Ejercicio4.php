<?php
// Bloque 1: Crear y escribir en el archivo nombres.txt 
$myfile = fopen("nombres.txt", "w") or die("No se pudo abrir el archivo para escritura!");
$txt = "Alberto\n";
fwrite($myfile, $txt);
$txt = "Marta\n";
fwrite($myfile, $txt);
$txt = "Paula \n";
fwrite($myfile, $txt);
fclose($myfile);

?>