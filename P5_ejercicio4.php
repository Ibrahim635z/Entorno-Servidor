<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <style>
        table {
            border-collapse: collapse;
            
        }
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>

<body>

<?php

$valor=10;

echo "<table>";
echo "<thead>";
echo "<th colspan=\"$valor\">Números del 1 al 1000</th>";
echo "</thead>";
echo "<tbody>";




$num_columnas = $valor;


for ($i = 1; $i <= 1000; $i++) {
    
    if (($i - 1) % $num_columnas == 0) {
        echo "<tr>";
    }

   
    echo "<td>" . $i . "</td>";

   
    if ($i % $num_columnas == 0) {
        echo "</tr>";
    }
}

echo "</tbody>";
echo "</table>";

?>

</body>
</html>