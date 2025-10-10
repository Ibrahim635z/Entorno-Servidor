<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Triángulo</title>
</head>
<body>
    <form action="" method="post">
        <label for="lado1">Lado 1:</label>
        <input type="number" id="lado1" name="lado1" required><br><br>
        
        <label for="lado2">Lado 2:</label>
        <input type="number" id="lado2" name="lado2" required><br><br>
        
        <label for="lado3">Lado 3:</label>
        <input type="number" id="lado3" name="lado3" required><br><br>
        
        <button type="submit">Verificar</button>
    </form>

    <?php
    if (isset($_POST["lado1"]) && isset($_POST["lado2"]) && isset($_POST["lado3"])) {
        $lado1 = $_POST["lado1"];
        $lado2 = $_POST["lado2"];
        $lado3 = $_POST["lado3"];
        $resultado = "";

        // Condición para formar un triángulo: la suma de dos lados debe ser mayor que el tercero
        if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
            
            // Determinar el tipo de triángulo
            if ($lado1 == $lado2 && $lado2 == $lado3) {
                $resultado = "Es un triángulo Equilátero(todos los lados iguales).";
            } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
                $resultado = "Es un triángulo Isósceles (dos lados iguales).";
            } else {
                $resultado = "Es un triángulo Escaleno(todos los lados diferentes).";
            }

        } else {
            $resultado = "Los lados no pueden formar un triángulo.";
        }
        
        echo $resultado;
    }
    ?>
</body>
</html>