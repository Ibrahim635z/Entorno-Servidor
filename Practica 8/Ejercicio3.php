<?php
// Ejercicio 3: Menú de frutas y precios.
$frutas = [
    "Manzana" => 1.2, 
    "Banana" => 0.8, 
    "Pera" => 1.0, 
    "Naranja" => 0.75
];
$mensaje_fruta = "";

if (isset($_GET['fruta'])) {
    $fruta_seleccionada = $_GET["fruta"];
    $precio = $frutas[$fruta_seleccionada];
    $mensaje_fruta = "El precio de la " . $fruta_seleccionada . " es " . $precio . " € por unidad.";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frutas y Precios</title>
</head>
<body>
    <p>Elige una fruta para comprobar su precio:</p>
    <form method="get">
        <select name="fruta">
            <?php foreach ($frutas as $nombre => $precio): ?>
                <?php
                $selected = (isset($fruta_seleccionada) && $fruta_seleccionada === $nombre) ? 'selected' : '';
                ?>
                <option value="<?php echo $nombre ?>" <?php echo $selected ?>>
                    <?php echo $nombre ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Consultar</button>
    </form>
    <p><?php echo $mensaje_fruta ?></p>
</body>
</html>