<?php
$myfile = fopen("datos.txt", "w") or die("Unable to open file!");
$txt = "Hola Mundo desde PHP\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
