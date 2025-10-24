<?php
$target_dir = "uploads/"; // Directorio de destino
$uploadOk = 1; // Bandera para validar la subida

// 1. Procesar la subida solo si se envió el formulario
if (isset($_POST["submit"])) {

    // Crear el directorio 'uploads/' si no existe
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    // Obtener la ruta completa de destino del archivo
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    // Obtener el tipo de archivo (extensión) en minúsculas
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));



    // EJERCICIO 14
    
    // Obtener el nombre base del archivo (sin la extensión) y la extensión
    $nombre_base = pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_FILENAME);
    $extension = pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
    $contador = 1;

    // Bucle para verificar si el archivo existe y renombrarlo
    while (file_exists($target_file)) {

        // Si el archivo existe, construye un nuevo nombre: nombre(N).ext
        $nuevo_nombre = $nombre_base . "(" . $contador . ")." . $extension;

        // Actualiza la ruta de destino para la próxima verificación
        $target_file = $target_dir . $nuevo_nombre;

        // Incrementa el contador para la siguiente iteración
        $contador++;
    }



    // Verificar si el archivo es realmente una imagen 
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {

        $uploadOk = 1;
    } else {
        echo " El archivo no es una imagen válida.<br>";
        $uploadOk = 0;
    }

    // EJERCICIO 13 Verificar el tamaño del archivo 500 KB 
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo " Lo sentimos, su archivo es demasiado grande (Máx 500 KB).<br>";
        $uploadOk = 0;
    }

    //EJERCICIO 12 Permitir ciertos formatos de archivo 
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "gif") {
        echo " Lo sentimos, solo se permiten archivos JPG, PNG y GIF.<br>";
        $uploadOk = 0;
    }


    // Comprobar si $uploadOk se establece a 0 por un error
    if ($uploadOk == 0) {
        echo "<p style='color: red;'> Lo sentimos, su archivo **NO** fue subido.</p>";
        // Si todo está bien, intentar subir el archivo
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "<p style='color: green;'> El archivo **" . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . "** ha sido subido correctamente.</p>";
        } else {
            // Este error puede deberse a permisos en la carpeta 'uploads/'
            echo "<p style='color: red;'> Lo sentimos, hubo un error al subir su archivo. Revise los permisos.</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subida de Imágenes Validada</title>
</head>

<body>

    <h1>Subir Imagen</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <label for="fileToUpload">Selecciona una imagen:</label><br><br>

        <input type="file" name="fileToUpload" id="fileToUpload" required><br><br>

        <button type="submit" name="submit">Subir Imagen</button>
    </form>



    <p>Requisitos de Subida:</p>
    <ul>
        <li>Tamaño máximo: 500 KB</li>
        <li>Formatos permitidos: JPG, JPEG, PNG, GIF</li>
    </ul>

</body>

</html>