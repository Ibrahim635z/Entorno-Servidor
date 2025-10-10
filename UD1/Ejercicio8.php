<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Distancia</title>
</head>
<body>
    <form action="" method="post">
        <label for="distancia">Distancia:</label>
        <input type="text" id="distancia" name="distancia" required>

        <select name="conversion" required>
            <option value="km-ml">Kilómetros a Millas</option>
            <option value="ml-km">Millas a Kilómetros</option>
        </select>
        
        <button type="submit">Convertir</button>
    </form>

    <?php
    if (isset($_POST["distancia"]) && isset($_POST["conversion"])) {
        $value = $_POST["distancia"];
        $type = $_POST["conversion"];
        $result = 0;
        $mensaje = "";

        if ($type == "km-ml") {
            // Convertir de kilómetros a millas
            $result = round($value * 0.621371,2);
            $mensaje = "$value kilómetros son $result millas.";
        } elseif ($type == "ml-km") {
            // Convertir de millas a kilómetros
            $result = round($value * 1.60934,2);
            $mensaje = "$value millas son  $result kilómetros.";
        }
        
        echo $mensaje;
    }
    ?>
</body>
</html>