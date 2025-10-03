<?php
    $nombre="";
    $edad="";
    $email="";


    if (isset($_POST["name"])) {
       $nombre=$_POST["name"];
       
    }
    if (isset($_POST["edad"])) {
       $edad=$_POST["edad"];
      
    }
    if (isset($_POST["email"])) {
       $email=$_POST["email"];
      
    }

      
       
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 v1</title>
</head>
<body>
    <form action="" method="POST">
        <label>Nombre:</label>
        <input type="text" id="name" name="name">
        <label>Edad:</label>
        <input type="number" id="edad" name="edad">
        <label >E-mail</label>
        <input type="text" id="email" name="email">
        <button type="submit">Enviar</button>
        <br>
        

        <?php
            echo "Nombre: " .$nombre. "<br> Edad:" .$edad. "<br> E-mail: " ,$email ;

        ?>
    </form>
</body>
</html>