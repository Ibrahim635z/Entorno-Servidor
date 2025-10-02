<?php
    if (isset($_GET["anio"])) {
        $anio=$_GET["anio"];
        $edad=date("Y")-$anio;

        echo "Tienes " .$edad. " años";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <form action="" method="GET">
        <label for="anio">Año de nacimiento:</label>
        <input type="text" id="anio" name="anio">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>