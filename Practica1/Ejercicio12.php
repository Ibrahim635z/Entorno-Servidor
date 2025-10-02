<?php

    if (isset($_POST["numero"])) {
        $numero=$_POST["numero"];
        
        for ($i=1; $i <=$numero ; $i++) {
            echo "$i <br>";
        }
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
    <form action="" method="POST">
    <label for="numero">Numero:</label>
    <input type="number" id="numero" name="numero">
    <button type="submit">Enviar</button>
</body>
</html>