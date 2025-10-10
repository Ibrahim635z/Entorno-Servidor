
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <form action="" method="post">
        <label for="num1">Numero:1</label>
        <input type="text" id="num1" name="num1">
        <label for="num2">Numero 2</label>
        <input type="text" id="num2" name="num2">

        <button type="submit">Enviar</button>
    </form>

   <?php


    if (isset($_POST["num1"]) && isset($_POST["num2"])) {
        $num1=$_POST["num1"];
        $num2=$_POST["num2"];

        if ($num1>$num2) {
            echo "El numero mas grande es: ".$num1;
        }
        if ($num2>$num1) {
            echo "El numero mas grande es: ".$num2;
        }

        if ($num2==$num1) {
            echo "Los numeros $num1 y $num2 son iguales";
        }
        
        }
        

?>
</body>
</html>