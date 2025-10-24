<?php
    //  Procesar el formulario y GUARDAR el mensaje
    if (isset($_POST["texto"])) {
        
        // 1. Abrir en modo "a" 
        $myfile = fopen("mensajes.txt", "a") or die("No se pudo abrir el archivo para escritura!");
        
        // 2. Preparar el texto con salto de línea
        $texto = $_POST["texto"] . "\n";
        
        // 3. Escribir y cerrar
        fwrite($myfile, $texto);
        fclose($myfile);
    
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
    <form action="" method="post">
        <label for="texto">Introduce algo:</label>
        <input type="text" id="texto" name="texto">
        <button type="submit">Guardar</button>  
    </form>
    
    <h2>Mensajes Guardados:</h2>
    
    <?php

    // EJERCICIO 7


    //LEER y mostrar todos los mensajes
    
    // 1. Abrir de nuevo el archivo, esta vez en modo "r"
    // Es CRUCIAL abrirlo de nuevo aquí, independientemente de si se envió el formulario o no.
    if (file_exists("mensajes.txt")) {
        $myfile_read = fopen("mensajes.txt", "r") or die("No se pudo abrir el archivo para lectura.");
        
    
        while(!feof($myfile_read)) {
           
            echo fgets($myfile_read);
        }
        
        // 3. Cerrar el manejador de lectura
        fclose($myfile_read);
    } else {
        echo "Aún no hay mensajes guardados.";
    }
    ?>
</body>
</html>