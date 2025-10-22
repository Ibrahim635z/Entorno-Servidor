<?php
require_once("control.php");

// un array estático donde guardamos solamente el nombre/descripción del artículo
$articulos = ["Camisa", "Zapatos", "Bolsos", "Pantalón"];
?>




<body>
    <div>
        <h3>Artículos</h3>
        <!-- recorremos los articulos -->
        <?php foreach ($articulos as $articulo): ?>
            <!-- cada artículo será un formulario -->
            <form>
                <!-- con una etiqueta label para mostrar el nombre (no se envía) -->
                <label>
                    <?php echo $articulo; ?>
                </label>
                <!-- un campo oculto con el nombre del artículo que si se envía-->
                <input type="hidden" name="articulo" value="<?php echo $articulo; ?>" />
                <!-- Y un botón submit Comprar -->
                <button type="submit" value="comprar">Comprar</button>
            </form>
        <?php endforeach; ?>
    </div>
    <!-- Para poder ver la cesta -->
    <div>
        <h3>Cesta</h3>
        <!-- Creamos una lista para mostra los artículos guardados en la cesta -->
        <ul>
            <!-- Recorremos la variable de sesión 'cesta' que es un array -->
            <?php foreach ($_SESSION["cesta"] as $articulo): ?>
                <!-- Creamos el elemento de lista -->
                <li>
                    <!-- mostramos el elemento de la cesta -->
                    <?php echo $articulo; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>