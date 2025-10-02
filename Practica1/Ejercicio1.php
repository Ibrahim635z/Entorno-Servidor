<?php

    if (!empty($_GET["grados"])) {
        $grados=$_GET["grados"];
        $farenheit=$grados*1.8+32;

         echo $grados . " Grado son: " . $farenheit ." Farenheit" ;
    }

   

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
   
    <form action="" method="GET">
        <label for="grados">Grados:</label>
        <input type="text" id="Grados" name="grados">
        <button type="submit">Enviar:</button>
    </form>

</body>
</html>