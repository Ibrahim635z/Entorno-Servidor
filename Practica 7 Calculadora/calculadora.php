<?php
// La primera vez que entremos a la página, inicializamos las variables
$resultado = "";
$num1 = "";
$num2 = "";
$accion = "";

// EJERCICIO 5: Definimos el nombre del archivo del historial
$archivo = "historial.txt";

// Preguntamos si se ha pulsado un botón de acción
if (isset($_POST["accion"])) {

    // Recogemos los datos del formulario
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $accion = $_POST["accion"];

    // EJERCICIO 8: Operaciones encadenadas
    // Si el campo num1 está vacío pero hay un resultado anterior, usamos ese resultado
    if (empty($num1) && isset($_POST['resultado_anterior']) && is_numeric($_POST['resultado_anterior'])) {
        $num1 = $_POST['resultado_anterior'];
    }

    // EJERCICIO 7: Validar que los valores sean numéricos
    // Usamos una variable de control ($error) para gestionar los mensajes
    $error = "";
    if (!is_numeric($num1) || (!is_numeric($num2) && $accion != "√")) {
        $error = "Error: introduce solo números válidos.";
    }

    // EJERCICIO 1: Validación de campos vacíos
    // La operación de raíz cuadrada solo necesita el primer número
    if ($accion == "√" && empty($num1)) {
        $error = "Por favor, introduce el número 1 para la raíz cuadrada.";
    } elseif ($accion != "√" && (empty($num1) || (empty($num2) && $num2 !== '0'))) {
        $error = "Por favor, introduce ambos números antes de realizar la operación.";
    }

    // Si no hay errores, procedemos a calcular
    if (empty($error)) {
        // El switch para realizar la operación correspondiente
        switch ($accion) {
            case "+":
                $resultado = $num1 + $num2;
                break;
            case "-":
                $resultado = $num1 - $num2;
                break;
            case "*":
                $resultado = $num1 * $num2;
                break;
            case "/":
                // EJERCICIO 2: Controlar la división por cero
                if ($num2 == 0) {
                    $error = "Error: no se puede dividir entre cero.";
                } else {
                    $resultado = $num1 / $num2;
                }
                break;
            // EJERCICIO 3: Nuevas operaciones
            case "^":
                $resultado = pow($num1, $num2);
                break;
            case "%":
                $resultado = $num1 % $num2;
                break;
            case "√":
                $resultado = sqrt($num1);
                break;
        }
    }

    // Si hay algún error, lo mostramos
    if (!empty($error)) {
        echo "<p style='color: black; text-align: center; font-weight: bold;'>$error</p>";
        $resultado = ""; // Limpiamos el resultado si hay error
    } elseif ($resultado !== "") {
        // EJERCICIO 4: Mostrar el resultado con formato
        $resultado_formateado = number_format($resultado, 2, ',', '.');

        // EJERCICIO 5: Persistencia de datos
        if ($accion == "√") {
            $linea = "$accion$num1 = $resultado_formateado\n";
        } else {
            $linea = "$num1 $accion $num2 = $resultado_formateado\n";
        }
        file_put_contents($archivo, $linea, FILE_APPEND);
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora con switch</title>
    <style>
        /* EJERCICIO 6: Mejorar la interfaz */
        .calculadora-form {
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px; /* Bordes redondeados */
            width: 900px;
            margin: 50px auto; /* Centrar formulario */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .calculadora-form input,
        .calculadora-form button {
            margin: 5px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .calculadora-form button {
            color: black;
            cursor: pointer;
        }

        .resultado-campo {
            background-color: #f0f8ff; /* Color suave para el resultado */
            font-weight: bold;
        }
        
        /* Colores de botones */
        .btn-sumar { background-color: green; }
        .btn-restar { background-color: red; }
        .btn-multiplicar { background-color: blue; }
        .btn-dividir { background-color: orange; }

        .historial {
            margin-top: 20px;
            border-top: 1px solid #ccc;
            padding-top: 10px;
        }
    </style>
</head>

<body>
    <!-- EJERCICIO 9: MIGRAR METODO POST-->
    <form class="calculadora-form" action="" method="POST">
        <label>Número 1</label>
        <input type="text" name="num1" value="<?php echo htmlspecialchars($num1); ?>" placeholder="Introduce un número"/>
        
        <label>Número 2</label>
        <input type="text" name="num2" value="<?php echo htmlspecialchars($num2); ?>" placeholder="Introduce un número"/>
        <br><br>
        <label>Resultado</label>
        <input type="text" class="resultado-campo" value="<?php echo isset($resultado_formateado) ? $resultado_formateado : $resultado; ?>" readonly/>

        <input type="hidden" name="resultado_anterior" value="<?php echo $resultado; ?>">
        
        <br><br>

        <button type="submit" value="+" name="accion" class="btn-sumar">Sumar</button>
        <button type="submit" value="-" name="accion" class="btn-restar">Restar</button>
        <button type="submit" value="*" name="accion" class="btn-multiplicar">Multiplicar</button>
        <button type="submit" value="/" name="accion" class="btn-dividir">Dividir</button>
        <br><br>
        <button type="submit" value="^" name="accion">Potencia</button>
        <button type="submit" value="%" name="accion">Módulo</button>
        <button type="submit" value="√" name="accion">Raíz cuadrada (solo usa Nº1)</button>

        <div class="historial">
            <?php
            // EJERCICIO 5: Mostrar las últimas 5 operaciones
            if (file_exists($archivo)) {
                $contenido = file_get_contents($archivo);
                if ($contenido) {
                    $lineas = array_filter(explode("\n", $contenido));
                    $ultimas_5 = array_slice($lineas, -5);

                    echo "<h3>Historial de las últimas 5 operaciones:</h3>";
                    foreach (array_reverse($ultimas_5) as $linea_historial) { // Se muestran en orden descendente
                        echo htmlspecialchars(trim($linea_historial)) . "<br>";
                    }
                } else {
                    echo "<p>No hay historial de resultados todavía.</p>";
                }
            } else {
                 echo "<p>No hay historial de resultados todavía.</p>";
            }
            ?>
        </div>

    </form>
</body>

</html>