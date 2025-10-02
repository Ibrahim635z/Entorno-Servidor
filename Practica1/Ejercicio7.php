
<?php

    if (isset($_POST["usuario"]) && isset($_POST["contra"])) {
        $usuario=$_POST["usuario"];
        $contra=$_POST["contra"];
        
       if ($usuario=="admin" && $contra=="1234") {
            echo "Acceso Permitido";
       } else {
        echo "Acceso Denegado";
       }
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <form action="" method="POST">
    <label for="usuario">Usuario:</label>
    <input type="text" id="usuario" name="usuario">
    <label for="contra">Contraseña:</label>
    <input type="password" id="contra" name="contra">
    <button type="submit">Enviar</button>
</body>
</html>