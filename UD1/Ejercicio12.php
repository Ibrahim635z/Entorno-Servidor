<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simple</title>
</head>
<body>
    <form action="" method="post">
        <label for="num1">Número 1:</label>
        <input type="text" id="num1" name="num1" required><br><br>

        <label for="num2">Número 2:</label>
        <input type="text" id="num2" name="num2" required><br><br>
        
        <label for="operacion">Operación:</label>
        <select name="operacion" required>
            <option value="suma">Suma (+)</option>
            <option value="resta">Resta (-)</option>
            <option value="multiplicacion">Multiplicación (*)</option>
            <option value="division">División (/)</option>
        </select><br><br>
        
        <button type="submit">Calcular</button>
    </form>

    <?php
    if (isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["operacion"])) {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operacion = $_POST["operacion"];
        $resultado = "";

        // Validación de campos vacíos
        if (empty($num1) || empty($num2)) {
            $resultado = "Error: Los campos no pueden estar vacíos.";
        } else {
            // Conversión a números para la operación
            $num1 = floatval($num1);
            $num2 = floatval($num2);

            switch ($operacion) {
                case "suma":
                    $resultado = $num1 + $num2;
                    break;
                case "resta":
                    $resultado = $num1 - $num2;
                    break;
                case "multiplicacion":
                    $resultado = $num1 * $num2;
                    break;
                case "division":
                    // Validación de división por cero
                    if ($num2 == 0) {
                        $resultado = "Error: No se puede dividir entre cero.";
                    } else {
                        $resultado = $num1 / $num2;
                    }
                    break;
            }
        }
        
        echo"Solucion: $resultado";
    }
    ?>
</body>
</html>