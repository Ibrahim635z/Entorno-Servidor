<?php


require_once("control.php");



?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cesta de Compra Básica</title>
</head>
<body>
    <div>
        <h3>Artículos Disponibles</h3>
        <hr />
        <table>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Comprar</th>
            </tr>
            <?php foreach ($articulos as $articulo): ?>
                <form action="" method="POST">
                    <tr>
                        <td><?php echo $articulo[0]; ?></td>
                        <td><?php echo $articulo[1]; ?></td>
                        <td><?php echo number_format($articulo[2], 2); ?></td>
                        <td>
                            <input type="hidden" name="codigo" value="<?php echo $articulo[0]; ?>" />
                            <input type="hidden" name="articulo" value="<?php echo $articulo[1]; ?>" />
                            <input type="hidden" name="precio" value="<?php echo $articulo[2]; ?>" />
                            <button type="submit">Comprar</button>
                        </td>
                    </tr>
                </form>
            <?php endforeach; ?>
        </table>
    </div>
    <hr />
    <div>
        <h3>Cesta de la Compra</h3>
        <hr />
        <table>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Eliminar</th>
            </tr>
            <?php $total = 0; ?>
            <?php foreach ($_SESSION["cesta"] as $key => $articulo): ?>
                <tr>
                    <td><?php echo $articulo[0]; ?></td>
                    <td><?php echo $articulo[1]; ?></td>
                    <td><?php echo number_format($articulo[2], 2); ?></td>
                    <td>
                        <form action="" method="POST">
                            <input type="hidden" name="id_eliminar" value="<?php echo $key; ?>" />
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
                <?php $total = $total + $articulo[2]; ?>
            <?php endforeach; ?>
        </table>
        
        <form action="" method="POST" style="margin-top: 10px;">
            <input type="hidden" name="vaciar" value="true" />
            <button type="submit">Vaciar Cesta</button>
        </form>
        
        <h3>TOTAL = <?php echo number_format($total, 2); ?></h3>
    </div>
</body>
</html>