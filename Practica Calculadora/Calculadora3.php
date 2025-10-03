<?php
// La primera vez que entremos a la página el resultado es cadena vacía
$resultado = "";
// También para num1 y num2
$num1 = "";
$num2 = "";
// Preguntamos si hemos recibido el botón "accion"
if (isset($_GET["accion"])) {
    // Recogemos el valor del botón (la propiedad value) en una variable por comodidad
    $accion = $_GET["accion"];
    // Si hemos recibido un botón submit también hemos recibido num1 y num2

    // Los guardamos en sendas variables
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    // Y ahora preguntamos por el valor del botón que se ha pulsado
    if ($accion == "+") {
        // Realizamos la suma
        //$resultado = floatval($_GET["num1"]) + floatval($_GET["num2"]);
        $resultado = $_GET["num1"] + $_GET["num2"];
    } else {
        if ($accion == "-") {
            // Realizamos la resta
            $resultado = $_GET["num1"] - $_GET["num2"];
        } else {
            if ($accion == "*") {
                // Realizamos la multiplicación
                $resultado = $_GET["num1"] * $_GET["num2"];
            } else {
                // Ya solo queda la división
                // Realizamos la división
                $resultado = $_GET["num1"] / $_GET["num2"];
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora con if - else</title>
</head>

<body>
    <form action="">
        <label>Número 1</label>
        <!-- Escribiendo cadena vacía la primera vez, o el valor que hemos recibido en
los siguientes envíos de formulario parace que permanecemos en la misma página -->
        <input type="text" name="num1" value="<?php echo $num1 ?>" /> <!-- línea modificada -->
        <label>Número 2</label>
        <input type="text" name="num2" value="<?php echo $num2 ?>" /> <!-- línea modificada -->

        <label>Resultado</label>
        <!-- Mostramos el resultado en el campo resultado dándole un valor escribiendo con echo -->
        <input type="text" value="<?php echo $resultado ?>" />
        <!-- Todos los botones tienen el mismo nombre -->
        <!-- En la estructura if - else preguntamos por el valor de la propiedad value -->
        <button type="submit" value="+" name="accion" />Sumar</button>
        <button type="submit" value="-" name="accion" />Restar</button>
        <button type="submit" value="*" name="accion" />Multiplicar</button>
        <button type="submit" value="/" name="accion" />Dividir</button>
    </form>
</body>

</html>