

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 10</title>
</head>
<body>
    <form action="" method="POST">
    <label for="aficiones">Selecciona tus aficiones:</label><br>
    <input type="checkbox" id="leer" name="aficiones[]" value="leer"> Leer
    <input type="checkbox" id="viajar" name="aficiones[]" value="viajar"> Viajar
    <input type="checkbox" id="deportes" name="aficiones[]" value="deportes"> Deportes
    <input type="checkbox" id="musica" name="aficiones[]" value="musica"> Musica
    <button type="submit">Enviar</button>
    <br>
    <?php

    if (isset($_POST["aficiones"])) {
        $aficiones=$_POST["aficiones"];
        
        
        echo "Has seleccionado";
        
        foreach ($aficiones as $aficion) {
            echo " " .$aficion. " " ;
        }
        
      
    }

?>
</body>
</html>