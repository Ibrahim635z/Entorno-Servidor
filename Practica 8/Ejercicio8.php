<?php
// Ejercicio 8: Lista de productos y total.
$productos = [
    "Zapatos" => 150,
    "Camiseta" => 25,
    "Pantalón" => 50,
    "Calcetines" => 5
];
$mensaje_total = "";
$cantidad = 1;

if (isset($_GET['producto']) && isset($_GET['cantidad'])) {
    $producto_seleccionado = $_GET["producto"];
    $cantidad = (int)$_GET["cantidad"];
    
    if ($cantidad > 0 && isset($productos[$producto_seleccionado])) {
        $precio_unitario = $productos[$producto_seleccionado];
        $total = $precio_unitario * $cantidad;
        $mensaje_total = "Total a pagar: " . number_format($total) . " €.";
    } else {
        $mensaje_total = "Error: La cantidad debe ser un número positivo.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Productos</title>
</head>
<body>
    <p>Elige un artículo y la cantidad que deseas comprar:</p>
    <form method="get">
        <select name="producto">
            <?php foreach ($productos as $nombre => $precio): ?>
                <?php
                $selected = (isset($producto_seleccionado) && $producto_seleccionado === $nombre) ? 'selected' : '';
                ?>
                <option value="<?php echo $nombre ?>" <?php echo $selected ?>>
                    <?php echo $nombre ?>
                </option>
            <?php endforeach; ?>
        </select>
        <input type="number" name="cantidad" value="<?php echo $cantidad ?>" min="1" style="width: 50px;">
        <button type="submit">Calcular</button>
    </form>
    <p><?php echo $mensaje_total ?></p>
</body>
</html>