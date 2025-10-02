<?php

    if (isset($_POST["numero"])) {
        $numero=$_POST["numero"];
        
        for ($i=0; $i <=10 ; $i++) {
            $multiplicacion=$numero*$i; 
            echo " $numero X $i = $multiplicacion <br>";
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <form action="" method="POST">
    <label for="numero">Numero:</label>
    <input type="number" id="numero" name="numero">
    <button type="submit">Enviar</button>
    </form>
</body>
</html>