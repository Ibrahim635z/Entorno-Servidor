<?php

if (isset($_GET["nombre"])) {

$nombre = $_GET["nombre"];
$saludo = "Bienvenido ".$nombre;
    }else{

    $saludo = "";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bienvenida</title>
</head>
<body>


    <p><?php echo $saludo ?></p>
    <form action="" method="GET">
    <input type="text" name="nombre"/>
    <input type="submit" value="Enviar"/> 
    </form>
</body>
</html>

<!-- Si quito el if else, el script siempre intentará asignar la variable $nombre de $_GET, 
 incluso cuando no se haya enviado ningún valor. Esto generaría un warning de PHP (Undefined index: nombre), 
 y la variable $saludo estaría vacía, lo que provocaría que en la página no aparezca ningún mensaje.-->