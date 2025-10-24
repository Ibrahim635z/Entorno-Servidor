<?php
$target_dir = "uploads/";
$uploadOk = 1; 


if (isset($_POST["submit"])) {

    // Crear el directorio 'uploads/' si no existe
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    // Obtener la ruta completa de destino del archivo
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    // Obtener el tipo de archivo (extensión) en minúsculas
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Lógica para evitar duplicados
    $nombre_base = pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_FILENAME);
    $extension = pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
    $contador = 1;

    // Bucle para verificar si el archivo existe y renombrarlo
    while (file_exists($target_file)) {
        $nuevo_nombre = $nombre_base . "(" . $contador . ")." . $extension;
        $target_file = $target_dir . $nuevo_nombre;
        $contador++;
    }

    // VALIDACIONES 
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check === false) { $uploadOk = 0; echo " El archivo no es una imagen válida.<br>"; }
    if ($_FILES["fileToUpload"]["size"] > 500000) { $uploadOk = 0; echo " Lo sentimos, su archivo es demasiado grande (Máx 500 KB).<br>"; }
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "gif" ) { $uploadOk = 0; echo " Lo sentimos, solo se permiten archivos JPG, JPEG, PNG y GIF.<br>"; }


    // Comprobar si $uploadOk se establece a 0 por un error
    if ($uploadOk == 0) {
        echo "<p style='color: red;'> Lo sentimos, su archivo **NO** fue subido.</p>";
    } else {
        // Mover el archivo (usando $target_file, que puede haber sido renombrado)
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // Muestra el nombre final del archivo (que puede ser el original o el renombrado)
            echo "<p style='color: green;'> El archivo **" . htmlspecialchars(basename($target_file)) . "** ha sido subido correctamente.</p>";
        } else {
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
    <title>Galería de Imágenes Subidas</title>
    <style>
      
        .gallery-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            padding: 20px 0;
            border-top: 1px solid #ccc;
        }

        .gallery-container img {
            width: 150px; 
            height: 150px;
            object-fit: cover; 
            border: 1px solid #ddd;
            border-radius: 4px;
        }
    </style>
</head>

<body>

    <h1>Subir Imagen</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <label for="fileToUpload">Selecciona una imagen:</label><br><br>

        <input type="file" name="fileToUpload" id="fileToUpload" required><br><br>

        <button type="submit" name="submit">Subir Imagen</button>
    </form>
    
    <p>Requisitos de Subida: Máx 500 KB | Formatos permitidos: JPG, PNG, GIF</p>
    

    <h2>Galería de Imágenes Subidas</h2>

    <div class="gallery-container">
        <?php
        $target_dir = "uploads/";
        // Buscar todos los archivos de imagen comunes en el directorio 'uploads/'
        // El patrón {*.jpg,*.png,*.gif} busca archivos con esas extensiones.
        $imagenes = glob($target_dir . "{*.jpg,*.png,*.gif}", GLOB_BRACE);

        if (!empty($imagenes)) {
            foreach ($imagenes as $ruta_imagen) {
                // basename() extrae solo el nombre del archivo de la ruta.
                $nombre_archivo = basename($ruta_imagen);
                
                echo '<img src="' . htmlspecialchars($ruta_imagen) . '" alt="' . htmlspecialchars($nombre_archivo) . '">';
            }
        } else {
            echo "<p>Aún no se han subido imágenes.</p>";
        }
        ?>
    </div>
    
</body>

</html>