
<?php

    if (isset($_POST["texto"])) {
        $texto=$_POST["texto"];
        
        $palabras=str_word_count($texto);
        echo "Hay $palabras palabras";
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eJERCICIO 8</title>
</head>
<body>
    <form action="" method="POST">
    <label for="texto">Escribe:</label>
    <textarea name="texto" id="texto" rows="1" cols="50"></textarea>
   
    <button type="submit">Enviar</button>
</body>
</html>