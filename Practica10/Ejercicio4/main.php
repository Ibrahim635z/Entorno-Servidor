
<?php
require_once("control.php");

// un array estático donde guardamos solamente el nombre/descripción del artículo
// Esto es lo correcto para la Versión 1C - 2
$articulos = [
    ["1", "Sombrilla", 19.90],
    ["2", "Zapatillas", 49.90],
    ["3", "Estanteria", 28.50],
    ["4", "Piscina", 39.90]
];
?>




<body>
    <div>
        <h3>Artículos</h3>
        <hr />
        <!-- Creamos una tabla -->
        <table>
            <!-- La cabecera -->
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Comprar</th>
            </tr>
            <!-- recorremos los articulos -->
            <?php foreach ($articulos as $articulo): ?>
                <!-- cada artículo es un array de tres elementos que se representará como
un formulario que abarcará una fila (artículo) de la tabla -->
                <form method="POST">
                    <tr>
                        <!-- cada artículo es un array numérico -->
                        <td><?php echo $articulo[0]; ?></td> <!-- El elemento 0 es el código-->
                        <td><?php echo $articulo[1]; ?></td> <!-- El elemento 1 es el nombre-->
                        <td><?php echo $articulo[2]; ?></td> <!-- El elemento 2 es el precio-->
                        <td>
                            <!-- un campo oculto con el código del artículo -->
                            <input type="hidden" name="codigo" value="<?php echo $articulo[0]; ?>" />
                            <!-- un campo oculto con el nombre del artículo -->
                            <input type="hidden" name="articulo" value="<?php echo $articulo[1]; ?>" />
                            <!-- un campo oculto con el precio del artículo -->
                            <input type="hidden" name="precio" value="<?php echo $articulo[2]; ?>" />
                            <!-- Y un botón submit Comprar -->
                            <button type="submit" value="comprar">Comprar</button>
                        </td>
                    </tr>
                </form>
            <?php endforeach; ?>
        </table>
    </div>
    <hr />
    <!-- Para poder ver la cesta -->
    <div>
        <h3>Cesta</h3>
        <hr />
        <!-- Creamos una lista para mostra los artículos guardados en la cesta -->
        <table>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Precio</th>
            </tr>
            <!-- Recorremos la variable de sesión 'cesta' que es un array -->
            <?php $total = 0; ?> <!-- Variable para totalizar el importe del pedido -->
            <?php foreach ($_SESSION["cesta"] as $articulo): ?>
                <!-- Creamos una fila -->
                <tr>
                    <td><?php echo $articulo[0]; ?></td>
                    <td><?php echo $articulo[1]; ?></td>
                    <td><?php echo $articulo[2]; ?></td>
                </tr>
                <!-- Vamos actualizando el total del importe sumando el precio de cada nuevo artículo-->
                <?php $total = $total + $articulo[2]; ?>
            <?php endforeach; ?>
        </table>
        <h3>TOTAL = <?php echo $total; ?></h3>
    </div>
</body>