<?php

$contador = 0;
if (isset($_POST['contador_oculto'])) {
    $contador = $_POST['contador_oculto'];
}


$contador++;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio con PHP y campo oculto</title>
</head>
<body>

    <form method="POST" action="">
        <button type="submit">Incrementar Contador</button>

        <input type="hidden" name="contador_oculto" value="<?php echo $contador; ?>">

        <p>Valor actual: <?php echo $contador; ?></p>
    </form>

</body>
</html>