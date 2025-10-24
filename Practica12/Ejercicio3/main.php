<?php
// Bloque 1: Crear y escribir en el archivo nombres.txt 
$myfile = fopen("nombres.txt", "w") or die("No se pudo abrir el archivo para escritura!");
$txt = "Ibra\n";
fwrite($myfile, $txt);
$txt = "Angel\n";
fwrite($myfile, $txt);
$txt = "Pablo \n";
fwrite($myfile, $txt);
fclose($myfile);


// 1. Abrir el archivo en modo lectura ('r')
$myfile = fopen("nombres.txt", "r") or die("No se pudo abrir el archivo para lectura!");

// 2. Leer el archivo línea por línea
while(!feof($myfile)) {
  // fgets() lee una sola línea del archivo
  echo fgets($myfile);
}

// 3. Cerrar el archivo
fclose($myfile);
?>