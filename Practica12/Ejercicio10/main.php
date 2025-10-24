<?php
$archivo_a_eliminar = "temporal.txt";

// 1. Verificar si el archivo existe
if (file_exists($archivo_a_eliminar)) {
    
    // 2. Si existe, intentar eliminarlo con unlink()
    if (unlink($archivo_a_eliminar)) {
        // La eliminación fue exitosa
        echo "El archivo $archivo_a_eliminar ha sido eliminado correctamente.";
    } else {
        // La eliminación falló 
        echo "Error: No se pudo eliminar el archivo $archivo_a_eliminar. Revise los permisos de escritura.";
    }
    
} else {
    // 3. Si no existe, notificarlo
    echo "ℹ El archivo $archivo_a_eliminar no existe, por lo que no hay nada que eliminar.";
}
?>