
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>
    <form action="" method="POST">
    <label for="minutos">Introduce minutos:</label>
    <input type="number" id="minutos" name="minutos">
    <button type="submit">Enviar</button>
    <br>
    <?php

    if (isset($_POST["minutos"])) {
        $minutos=$_POST["minutos"];
        $horas=0;
        if ($minutos>=60 ) {
            $horas=intdiv($minutos, 60);
            $minutosrestantes=$minutos%60;
        } else{
            $minutosrestantes=$minutos;
        }
        if ($horas==0) {
            echo  $minutosrestantes. "minutos" ;
        }else if($minutosrestantes!=0){
            echo  $horas. " horas y " .$minutosrestantes . " minutos" ;
        }
        if ($minutosrestantes==0) {
            echo $horas. " Horas";
        }
        
    }


?>
</body>
</html>