<?php
    $nombre="";
    $edad="";
    $email="";

    
      
    
    if (isset($_GET["name"])) {
       $nombre=$_GET["name"];
       
    }
    if (isset($_GET["edad"])) {
       $edad=$_GET["edad"];
      
    }
    if (isset($_GET["email"])) {
       $email=$_GET["email"];
      
    }


      
       
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 v3</title>
</head>
<body>
    <form action="" method="GET">
        <label>Nombre:</label>
        <input type="text" id="name" name="name" value="<?php echo $nombre ?>">
        <label>Edad:</label>
        <input type="number" id="edad" name="edad" value="<?php echo $edad ?>">
        <label >E-mail</label>
        <input type="text" id="email" name="email" value="<?php echo $email ?>">
        <button type="submit">Enviar</button>
        <br>
        

        <?php
            echo "Nombre: " .$nombre. "<br> Edad:" .$edad. "<br> E-mail: " ,$email ;

        ?>
    </form>
</body>
</html>