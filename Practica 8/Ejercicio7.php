<?php
// Ejercicio 7: Mostrar información adicional del color.
$colores_significado = [
    "rojo" => "pasión",
    "azul" => "tranquilidad",
    "verde" => "esperanza",
    "amarillo" => "alegría"
];
$mensaje_simbolo = "";

if (isset($_GET['color_simbolo'])) {
    $color_simbolo_seleccionado = $_GET["color_simbolo"];
    $simbolo = $colores_significado[$color_simbolo_seleccionado];
    $mensaje_simbolo = "El color " . $color_simbolo_seleccionado . " simboliza la " . $simbolo . ".";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Símbolo Color</title>
</head>
<body>
    <p>Elige un color para comprobar que simboliza:</p>
    <form method="get">
        <select name="color_simbolo">
            <?php foreach ($colores_significado as $color => $simbolo): ?>
                <?php
                $selected = (isset($color_simbolo_seleccionado) && $color_simbolo_seleccionado === $color) ? 'selected' : '';
                ?>
                <option value="<?php echo $color ?>" <?php echo $selected ?>>
                    <?php echo ucfirst($color) ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Mostrar</button>
    </form>
    <p><?php echo $mensaje_simbolo ?></p>
</body>
</html>