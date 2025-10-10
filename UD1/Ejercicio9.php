<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Temperatura</title>
</head>
<body>
    <form action="" method="post">
        <label for="temperatura">Temperatura:</label>
        <input type="text" id="temperatura" name="temperatura" required>

        <select name="conversion" required>
            <option value="c-f">Celsius a Fahrenheit</option>
            <option value="f-c">Fahrenheit a Celsius</option>
        </select>
        
        <button type="submit">Convertir</button>
    </form>

    <?php
    if (isset($_POST["temperatura"]) && isset($_POST["conversion"])) {
        $value = $_POST["temperatura"];
        $type = $_POST["conversion"];
        $result = 0;
        $mensaje = "";

        if ($type == "c-f") {
            // Convertir de Celsius a Fahrenheit: (C * 9/5) + 32
            $result = ($value * 9/5) + 32;
            $mensaje = "$value °C son $result °F.";
        } elseif ($type == "f-c") {
            // Convertir de Fahrenheit a Celsius: (F - 32) * 5/9
            $result = ($value - 32) * 5/9;
            $mensaje = "$value °F son $result °C.";
        }
        
        echo $mensaje;
    }
    ?>
</body>
</html>