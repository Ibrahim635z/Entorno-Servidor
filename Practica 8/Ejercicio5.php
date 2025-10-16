<?php
// Ejercicio 5: Formulario con checkbox (varios intereses).
$aficiones = ["Leer", "Viajar", "Música", "Deporte", "Cine", "Naturaleza"];
$intereses_seleccionados = [];
$mensaje_checkbox = "";

if (isset($_GET['intereses']) && is_array($_GET['intereses'])) {
    $intereses_seleccionados = $_GET["intereses"];
    $mensaje_checkbox = "Tus aficiones son: ";
    
    $ultimo = array_pop($intereses_seleccionados);
    $mensaje_checkbox .= implode(", ", $intereses_seleccionados);
    
    if ($mensaje_checkbox !== "Tus aficiones son: ") {
        $mensaje_checkbox .= ", " . $ultimo . ".";
    } else {
        $mensaje_checkbox .= $ultimo . ".";
    }
} else if (isset($_GET['intereses']) && !is_array($_GET['intereses'])) {
    // Caso de solo una selección, aunque raro en checkboxes
    $intereses_seleccionados = [$_GET['intereses']];
    $mensaje_checkbox = "Tu afición es: " . $_GET['intereses'] . ".";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox</title>
</head>
<body>
    <p>¿Cuáles son tus aficiones?</p>
    <form method="get">
        <?php foreach ($aficiones as $aficion): ?>
            <?php
            $checked = in_array($aficion, $intereses_seleccionados) ? 'checked' : '';
            ?>
            <input type="checkbox" id="<?php echo strtolower($aficion) ?>" name="intereses[]" value="<?php echo $aficion ?>" <?php echo $checked ?>>
            <label for="<?php echo strtolower($aficion) ?>"><?php echo $aficion ?></label><br>
        <?php endforeach; ?>
        <button type="submit">Enviar</button>
    </form>
    <p><?php echo $mensaje_checkbox ?></p>
</body>
</html>