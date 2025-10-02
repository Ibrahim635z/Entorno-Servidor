<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Calculo del IMC</h1>
    <form action="" method="POST">
        <label for="peso">Peso(KG):</label>
        <input type="number" step="any" id="peso" name="peso">
        <label for="altura">Altura(metros):</label>
        <input type="number" step="any" id="altura" name="altura">
        <button type="submit">Enviar</button>
    </form>   
     
<?php

    if (isset($_POST["peso"]) && isset($_POST["altura"])) {
        $peso=$_POST["peso"];
        $altura=$_POST["altura"];

        $imc=round($peso/($altura**2),2);
        echo "IMC: $imc ";
        if ($imc<18.5) {
            echo "Bajo peso";
        }else if ($imc>18.5 && $imc<25) {
            echo "Peso normal";
        } else if ($imc>25 && $imc <30) {
            echo "Sobrepeso";
        } else if ($imc>30) {
            echo "Obesidad" ;
        }
    }




?>
   
</body>
</html>