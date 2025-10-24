<?php
// CONTADOR DE VISITAS
$archivo_contador = "contador.txt";


if (file_exists($archivo_contador)) {
    
   
    $manejador_lectura = fopen($archivo_contador, "r");
    $contador = (int)fgets($manejador_lectura); 
    fclose($manejador_lectura);
    
    // 2. Incrementar el contador
    $contador++;
    
    // 3. Escribir el nuevo valor (sobrescribir)
    $manejador_escritura = fopen($archivo_contador, "w"); 
    fwrite($manejador_escritura, $contador);
    fclose($manejador_escritura);

} else {
    // Si NO existe, crear el archivo con el valor inicial de 1
    $contador = 1;
    $manejador_creacion = fopen($archivo_contador, "w");
    fwrite($manejador_creacion, $contador);
    fclose($manejador_creacion);
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Visitas</title>
</head>
<body>
    <h1>Bienvenido a la Página del Contador</h1>
    

    <?php
        // Mostrar el contador de visitas al usuario
        echo "<h2>¡Esta página ha sido visitada $contador veces!</h2>";
    ?>
    
    <p>Recarga la página para ver cómo aumenta el número.</p>
</body>
</html>