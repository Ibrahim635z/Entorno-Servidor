<?php
// 10. Leer y escribir en el mismo archivo con a+
$nombre_archivo = "colores.txt";

// 1. Abrir el archivo en modo "a+"
//    "a" asegura que el puntero de escritura esté al final (para añadir).
//    "+" asegura que también se pueda leer.
$myfile = fopen($nombre_archivo, "a+") or die("No se pudo abrir/crear el archivo!");

// 2. Mover el puntero al principio para leer El modo "a" coloca el puntero al final; para leer todo, hay que reiniciarlo.
rewind($myfile);

// 3. Leer y mostrar el contenido existente
$contenido_anterior = fread($myfile, filesize($nombre_archivo));
echo "--- Contenido Anterior: --- <br>";
echo nl2br(htmlspecialchars($contenido_anterior)); // nl2br para mostrar saltos de línea en HTML

// 4. Agregar una nueva línea con la fecha y hora actuales
$nueva_linea = date("Y-m-d H:i:s") . " - Registro de tiempo.\n";

// El modo "a+" ya tiene el puntero de escritura al final de forma predeterminada
// (aunque lo hayamos movido con rewind(), la siguiente escritura será al final).
fwrite($myfile, $nueva_linea);

// 5. Mover el puntero al principio OTRA VEZ para leer el contenido actualizado
rewind($myfile);

// 6. Leer y mostrar todo el contenido, incluido el nuevo
$contenido_actualizado = fread($myfile, filesize($nombre_archivo));
echo "--- Contenido Actualizado: --- <br>";
echo nl2br(htmlspecialchars($contenido_actualizado));


fclose($myfile);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio</title>
</head>

<body>

    
</body>

</html>