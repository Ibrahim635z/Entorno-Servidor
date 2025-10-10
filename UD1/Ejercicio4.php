
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <form action="" method="post">
        <label for="num1">Edad:</label>
        <input type="text" id="num1" name="num1">
       

        <button type="submit">Enviar</button>
    </form>

   <?php


    if (isset($_POST["num1"])) {
        $num1=$_POST["num1"];
       

        if ($num1>17 && $num1<65) {
            echo "Adulto";
        }
        if ($num1>65) {
            echo "Adulto mayor";
        }

        if ($num1<18 && $num1>0) {
            echo "Menor de edad";
        }
        
        }
        

?>
</body>
</html>