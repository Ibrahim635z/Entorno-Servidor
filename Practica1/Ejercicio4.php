<?php

    if (!empty($_POST["euros"])) {
        $euros=$_POST["euros"];
        $dolares=$euros*1.07;
        echo "$euros € = $dolares $";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <form action="" method="POST">
        <label for="euros">Euros:</label>
        <input type="number" id="euros" name="euros">

        <button type="submit">Enviar</button>
    </form>    
</body>
</html>