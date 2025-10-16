<?php

$colores = ["rojo", "azul", "verde", "amarillo", "naranja", "morado"]; 
$mensaje = "";
$colores_seleccionados = []; 

if (isset($_GET['colores']) && is_array($_GET['colores'])) {
    // podemos recoger los colores seleccionados
    $colores_seleccionados = $_GET["colores"];

 
    $mensaje = "Los colores seleccionados son: ";
    foreach ($colores_seleccionados as $color_seleccionado) {
        $mensaje .= $color_seleccionado . " ";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colores Múltiples</title>
</head>
<body>
  
    <form method="get">
        <p><?php echo "Selecciona los colores que quieras de la siguiente lista:"?></p>
        <select name="colores[]" multiple> 
            <?php foreach ($colores as $color): ?>
                
                <?php 
                $selected = '';
                if (in_array($color, $colores_seleccionados)) {
                    $selected = 'selected';
                }
                ?>
                
                <option value="<?php echo $color ?>" <?php echo $selected ?>> 
                    <?php echo $color ?> 
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Enviar</button>
          <p><?php echo $mensaje ?></p>
    </form>
</body>
</html>