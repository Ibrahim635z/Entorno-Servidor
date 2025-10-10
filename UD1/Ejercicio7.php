
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <form action="" method="post">
        <label for="num1">Nota:</label>
        <input type="text" id="num1" name="num1">
       

        <button type="submit">Enviar</button>
    </form>

   <?php


    if (isset($_POST["num1"])) {
        $num1=$_POST["num1"];
       

        if ($num1<5) {
            echo "Suspenso";
        }
        if ($num1>=5 && $num1<=7) {
            echo "Aprobado";
        }

        if ($num1>=7 && $num1<9) {
            echo "Notable";
        }
          if ($num1>=9) {
            echo "Sobresaliente";
        }
     }
        

?>
</body>
</html>