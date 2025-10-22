<?php


require_once("control.php");



?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cesta de Compra Corregida</title>
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
                <th>Stock</th>
                <th>Comprar</th>
            </tr>
            <?php 
            
            foreach ($_SESSION["articulos"] as $articulo): 
            ?>
                <form action="" method="POST">
                    <tr>
                        <td><?php echo $articulo[0]; ?></td>
                        <td><?php echo $articulo[1]; ?></td>
                        <td><?php echo number_format($articulo[2], 2); ?></td>
                        <td><?php echo $articulo[3]; ?></td> <td>
                            <input type="hidden" name="codigo" value="<?php echo $articulo[0]; ?>" />
                            
                            <?php if ($articulo[3] > 0): ?>
                                <button type="submit">Comprar</button>
                            <?php else: ?>
                                <button type="submit" disabled>Sin Stock</button>
                            <?php endif; ?>
                            
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
                <th>Cantidad</th> 
                <th>Eliminar</th>
            </tr>
            <?php $total = 0; ?>
            <?php 
            // Agrupamos la cesta para mostrarla
            $cesta_agrupada = [];
            foreach ($_SESSION["cesta"] as $item) {
                $codigo = $item[0];
                if (!isset($cesta_agrupada[$codigo])) {
                    $cesta_agrupada[$codigo] = [
                        'nombre' => $item[1], 
                        'precio' => $item[2], 
                        'cantidad' => 1
                    ];
                } else {
                    $cesta_agrupada[$codigo]['cantidad']++;
                }
            }
            ?>
            
            <?php foreach ($cesta_agrupada as $codigo => $item): ?>
                <tr>
                    <td><?php echo $codigo; ?></td>
                    <td><?php echo $item['nombre']; ?></td>
                    <td><?php echo number_format($item['precio'], 2); ?></td>
                    <td><?php echo $item['cantidad']; ?></td> 
                    <td>
                        <form action="" method="POST">
                            <input type="hidden" name="codigo_eliminar" value="<?php echo $codigo; ?>" />
                            <button type="submit">Eliminar 1</button>
                        </form>
                    </td>
                </tr>
                <?php $total = $total + ($item['precio'] * $item['cantidad']); ?>
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