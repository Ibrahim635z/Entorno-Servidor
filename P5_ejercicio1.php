<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <style>
        table{
            border-collapse: collapse ;
        }
        th, td {
            border: 1px solid black;
            text-align: center;
        }

    </style>
</head>

<body>
    <?php

    echo "<table>";
    echo "<thead>";
    echo "<th> numeros </th>";
   
    echo "</thead>";

    echo "<tbody>";
    
    for ($i=1; $i <= 1000; $i++) { 
        echo "<tr><td> " . $i ."</td></tr>";
    }

    echo "</tbody>";
    echo "</table>";

    ?>
</body>

</html>