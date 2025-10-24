<?php
$myfile = fopen("nombres.txt", "w") or die("Unable to open file!");
$txt = " Ibra\n";
fwrite($myfile, $txt);
$txt = "Angel\n";
fwrite($myfile, $txt);
$txt = "Pablo \n";
fwrite($myfile, $txt);
fclose($myfile);
?>
