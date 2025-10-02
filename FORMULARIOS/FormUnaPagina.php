<?php
    
    if ($_SERVER["REQUEST_METHOD"]== "GET") {
        
        $nombre= ($_GET['nombre']);
    }

    echo "Hola, " .$nombre;
    
    ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form una Pagina</title>
</head>
<body>
      <p><?php echo $nombre ?></p>

    <form action="" method="GET">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">

        <button type="submit">Enviar</button>
    </form>
    

    
</body>
</html>