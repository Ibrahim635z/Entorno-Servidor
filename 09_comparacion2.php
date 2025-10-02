<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
      <h1>Ejemplo de operaciones logicas PHP</h1>
    <?php
    
    $a=8;
    $b=3;
    $c=3;
    echo ($a==$b) && ($c > $b), "<br>";
    echo ($a == $b) || ($b ==$c ), "<br>";
    echo !($b <=$c), "<br>";

    ?>
</body>
</html>