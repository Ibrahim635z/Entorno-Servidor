<?php
    $comida="";
    $hobbies="";
    if (isset($_POST["comida"])) {
        $comida=$_POST["comida"];
    }
    if (isset($_POST["hobbie"])) {
        $hobbies=$_POST["hobbie"];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 v1</title>
</head>
<body>
    <form action="" method="POST">
        <label for="comida">Comida favorita:</label>
        <input type="radio" id="hamburguesa" name="comida" value="Hamburguesa">Hamburguesa con Patatas
        <input type="radio" id="pescado" name="comida" value="Pescado">Pescado al Horno
        <input type="radio" id="lentejas" name="comida" value="Lentejas">Lentejas
        <br><br>
        <label for="hobbie">Hobbies:</label>
        <input type="checkbox" id="tenis" name="hobbie[]" value="Tenis">Tenis
        <input type="checkbox" id="padel" name="hobbie[]" value="Padel">Padel
        <input type="checkbox" id="videojuegos" name="hobbie[]" value="Videojuegos">Videojuegos
        <br><br>
        <button type="submit">Enviar</button>
    </form>
    <br>
    <?php
        echo "Comidas: " .$comida. "<br>";
        echo "Hobbies:";
        foreach ($hobbies as $hobbie) {
            echo " " .$hobbie. " ";
        }
    ?>
</body>
</html>