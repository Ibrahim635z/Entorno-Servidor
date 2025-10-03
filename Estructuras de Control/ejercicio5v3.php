  <?php
    $contchar="";
    $contword="";
    $convMayus="";
    $convMinus="";
    $texto="";
    if (isset($_POST["text"])) {
        $texto=$_POST["text"];
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 v3</title>
</head>
<body>
    <form action="" method="POST">
        <label for="text">Introduce el texto</label>
<!-- En este caso solo voy añadir un echo en el textare, lo que ayuda no solo a conservar la variable si no a usar todos los botones con ese mismo texto-->
        <textarea name="text" id="text" rows="1" cols="20" ><?php echo $texto ?></textarea>
        <br>
        <button type="submit" id="char" name="char">Contar Caracteres</button>
        <button type="submit" id="word" name="word">Contar Palabras</button>
        <button type="submit" id="mayus" name="mayus">Convertir a Mayusculas</button>
        <button type="submit" id="min" name="min">Convertir a Minusculas</button>
    </form>
    <br>


  <?php
    if (isset($_POST["char"])) {
            $contchar=strlen($texto);
            echo "El texto tiene " .$contchar. " caracteres";
        }
        if (isset($_POST["word"])) {
            $contword=str_word_count($texto);
            echo "El texto tiene " .$contword. " palabras";
        }
        if (isset($_POST["mayus"])) {
            $convMayus=strtoupper($texto);
            echo "El texto en Mayuscula: " .$convMayus;
        }
        if (isset($_POST["min"])) {
             $convMinus=strtolower($texto);
             echo "El texto en Minuscula: " .$convMinus;
        }

?>
   

</body>
</html>