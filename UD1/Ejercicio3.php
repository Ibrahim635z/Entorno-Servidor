
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
       

        <button type="submit">Enviar</button>
    </form>

   <?php


    if (isset($_POST["num1"])) {
        $num1=$_POST["num1"];
       

        if ($num1%2==0) {
            echo "$num1 es Par";
        }else {
            echo "$num1 es Impar";
        }
        
        }
        

?>
</body>
</html>