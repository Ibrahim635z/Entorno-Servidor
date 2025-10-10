<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Calificación</title>
</head>
<body>
    <form action="" method="post">
        <label for="calificacion_letra">Ingrese la calificación (A, B, C, D, F):</label>
        <input type="text" id="calificacion_letra" name="calificacion_letra" maxlength="1" required>
        
        <button type="submit">Verificar</button>
    </form>

    <?php
    if (isset($_POST["calificacion_letra"])) {
        $calificacion = strtoupper($_POST["calificacion_letra"]);
        $resultado = "";

        switch ($calificacion) {
            case "A":
                $resultado = "Excelente";
                break;
            case "B":
                $resultado = "Bueno";
                break;
            case "C":
                $resultado = "Regular";
                break;
            case "D":
                $resultado = "Malo";
                break;
            case "F":
                $resultado = "Pésimo";
                break;
            default:
                $resultado = "Calificación no válida.";
                break;
        }
        
        
        echo "El rendimiento es: $resultado";
    }
    ?>
</body>
</html>