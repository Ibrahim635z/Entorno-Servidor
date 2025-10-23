<?php
echo "Ejemplo leer archivo entero. <br>";
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile, filesize("webdictionary.txt"));
fclose($myfile);
echo "<br>-------------------------- <br>"
?>

<?php
echo "Lo lee y muestra cuanto ocupa";
echo readfile("webdictionary.txt");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio</title>
</head>

<body>

    <?php
    echo "Ejemplo leer solo la primera linea. <br>";
    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    echo fgets($myfile);
    fclose($myfile);
    echo "<br>-------------------------- <br>"
    ?>


    <?php
    echo "Comprobacion fin de archivo <br>";
    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    // Output one line until end-of-file
    while (!feof($myfile)) {
        echo fgets($myfile) . "<br>";
    }
    fclose($myfile);
    echo "<br>-------------------------- <br>"
    ?>


    <?php
    echo "Leer el archivo caracter por caracter <br>";
    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    // Output one character until end-of-file
    while (!feof($myfile)) {
        echo fgetc($myfile);
    }
    fclose($myfile);
    echo "<br>-------------------------- <br>"
    ?>
</body>

</html>