<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <h1>Tipos de variables</h1>
    <?php
    
    //variable de tipo entero
    $edad=30;
    
    // Variable de tipo flotante
    $altura = 1.75;

    // Variable de tipo string
    $ciudad = "Granada";

    // Variable de tipo booleano
    $es_admin = false;

    // Imprimir los valores de las variables
   echo "Edad: " . $edad . "<br>"; // Imprime: Edad: 30
   echo "Altura: " . $altura . "<br>"; // Imprime: Altura: 1.75
   echo "Ciudad: " . $ciudad . "<br>"; // Imprime: Ciudad: Granada
   echo "Es admin: " . ($es_admin ? "Sí" : "No") . "<br>"; // Imprime: Es admin: No
    ?>
</body>
</html>