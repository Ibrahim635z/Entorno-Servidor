<?php
    $comida="";
    $hobbies=[];
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
        <input type="radio" id="hamburguesa" name="comida" value="Hamburguesa" <?php if($comida=="Hamburguesa") echo "checked"; ?>>Hamburguesa con Patatas
        <input type="radio" id="pescado" name="comida" value="Pescado" <?php if($comida=="Pescado") echo "checked"; ?>>Pescado al Horno
        <input type="radio" id="lentejas" name="comida" value="Lentejas" <?php if($comida=="Lentejas") echo "checked"; ?>>Lentejas
        <br><br>
        <label for="hobbie">Hobbies:</label>
        <input type="checkbox" id="tenis" name="hobbie[]" value="Tenis" <?php if (in_array("Tenis", $hobbies)) echo "checked"; ?>>Tenis
        <input type="checkbox" id="padel" name="hobbie[]" value="Padel" <?php if (in_array("Padel", $hobbies)) echo "checked"; ?>>Padel
        <input type="checkbox" id="videojuegos" name="hobbie[]" value="Videojuegos" <?php if (in_array("Videojuegos", $hobbies)) echo "checked"; ?>>Videojuegos
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