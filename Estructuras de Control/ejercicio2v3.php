<?php
    $pais="";

    if (isset($_GET["paises"])) {
        $pais=$_GET["paises"];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 v2</title>
</head>

<body>
    <form action="" method="$_GET">
        <label for="paises">Selecciona un país:</label>

        <select id="paises" name="paises">
        <!--En esta version he añadido solo un echo en la opcion principal para que nos aparezca el ultimo seleccionado -->
            <option value=""><?php echo $pais ?></option>
            <option value="España">España</option>
            <option value="Mexico">México</option>
            <option value="Argentina">Argentina</option>
            <option value="Colombia">Colombia</option>
        </select>
        <button type="submit">Enviar</button>
    <br>
        <?php
            echo "Has seleccionado: " .$pais;
        ?>
    
    </form>
</body>

</html>