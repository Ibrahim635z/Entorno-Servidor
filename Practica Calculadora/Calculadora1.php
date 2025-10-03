<?php
// La primera vez que entremos a la página el resultado es cadena vacía
$resultado = "";
// Preguntamos si hemos recibido el botón "sumar"
if (isset($_GET["sumar"])) {
    // Realizamos la suma
    //$resultado = floatval($_GET["num1"]) + floatval($_GET["num2"]);
    $resultado = $_GET["num1"] + $_GET["num2"];
}

// Preguntamos si hemos recibido el botón "restar"
if (isset($_GET["restar"])) {
    // Realizamos la resta
    $resultado = $_GET["num1"] - $_GET["num2"];
}
// Preguntamos si hemos recibido el botón ""
if (isset($_GET["multiplicar"])) {
    // Realizamos la multiplicación
    $resultado = $_GET["num1"] * $_GET["num2"];
}
// Preguntamos si hemos recibido el botón ""
if (isset($_GET["dividir"])) {
    // Realizamos la división
    $resultado = $_GET["num1"] / $_GET["num2"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
    <form action="">
        <label>Número 1</label>
        <input type="text" name="num1" />
        <label>Número 2</label>
        <input type="text" name="num2" />
        <label>Resultado</label>
        <!-- Mostramos el resultado en el campo resultado dándole un valor escribiendo con echo -->
        <input type="text" value="<?php echo $resultado ?>" />
        <input type="submit" value="+" name="sumar" />
        <input type="submit" value="-" name="restar" />
        <input type="submit" value="*" name="multiplicar" />
        <input type="submit" value="/" name="dividir" />
    </form>
</body>

</html>