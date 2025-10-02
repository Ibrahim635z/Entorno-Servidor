<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Uso del random</h1>
    <?php
    
    $num=rand(1,100);

    if ($num<=50) {
        echo "$num es menor o igual que 50";
    }else {
        echo "$num es mayor que 50";
    }
    
    ?>
</body>
</html>