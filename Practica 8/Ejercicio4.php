<?php
// Ejercicio 4: Formulario con radio buttons.
$colores_radio = ["Rojo", "Azul", "Verde", "Amarillo"];
$mensaje_radio = "";

if (isset($_GET['color_radio'])) {
    $color_seleccionado_radio = $_GET["color_radio"];
    $mensaje_radio = "Has seleccionado el color " . strtolower($color_seleccionado_radio) . ".";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Buttons</title>
</head>
<body>
    <p>Elige un color de la siguiente lista:</p>
    <form method="get">
        <?php foreach ($colores_radio as $color): ?>
            <?php
            $checked = (isset($color_seleccionado_radio) && $color_seleccionado_radio === $color) ? 'checked' : '';
            ?>
            <input type="radio" id="<?php echo strtolower($color) ?>" name="color_radio" value="<?php echo $color ?>" <?php echo $checked ?>>
            <label for="<?php echo strtolower($color) ?>"><?php echo $color ?></label><br>
        <?php endforeach; ?>
        <button type="submit">Enviar</button>
    </form>
    <p><?php echo $mensaje_radio ?></p>
</body>
</html>