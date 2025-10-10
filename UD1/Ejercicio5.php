
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <form action="" method="post">
        <label for="num1">Precio:</label>
        <input type="text" id="num1" name="num1">
       

        <button type="submit">Enviar</button>
    </form>

   <?php


    if (isset($_POST["num1"])) {
        $num1=$_POST["num1"];
       

        if ($num1>=100) {
            $num1-=$num1*0.1;
            echo "Tu nuevo precio es: $num1";
        }else 
        if ($num1>=200) {
            $num1-=$num1*0.2;
            echo "Tu nuevo precio es: $num1";

        
        
        } else {
            echo "Tu precio es: $num1";
        }
        
    }

?>
</body>
</html>