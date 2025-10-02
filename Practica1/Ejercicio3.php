<?php

    if (isset($_GET["color"])) {
        $color=$_GET["color"];

        echo "Tu color favorito es: " .$color;

       
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <style>
        body{
            background-color: <?php echo $color?>;
        }
    </style>
    
</head>
<body>
    <form action="" method="$_GET">
        <label for="color">Color favortio:</label>
        <input type="color" name="color" id="color">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>