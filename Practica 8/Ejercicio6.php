<?php
// Ejercicio 6: Lista desplegable de meses.
$meses = [
    "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
    "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
];
$mensaje_mes = "";

if (isset($_GET['mes'])) {
    $mes_seleccionado = $_GET["mes"];
    $mensaje_mes = "Tu mes de nacimiento es " . $mes_seleccionado . ".";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses</title>
</head>
<body>
    <p>Elige tu mes de nacimiento:</p>
    <form method="get">
        <select name="mes">
            <?php foreach ($meses as $mes): ?>
                <?php
                $selected = (isset($mes_seleccionado) && $mes_seleccionado === $mes) ? 'selected' : '';
                ?>
                <option value="<?php echo $mes ?>" <?php echo $selected ?>>
                    <?php echo $mes ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Enviar</button>
    </form>
    <p><?php echo $mensaje_mes ?></p>
</body>
</html>