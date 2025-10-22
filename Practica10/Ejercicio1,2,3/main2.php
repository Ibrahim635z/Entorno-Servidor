<?php
require_once("control.php");

// un array estático donde guardamos solamente el nombre/descripción del artículo
$articulos = ["Maceta", "Nevera", "Escoba", "Turron"];
?>
<body>
    <div>
        <h3>Artículos</h3>
        <ul>
            <?php foreach ($articulos as $articulo): ?>
                <li>
                    <a href="?articulo=<?php echo $articulo ?>">
                        <?php echo $articulo ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
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