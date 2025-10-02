

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eJERCICIO 9</title>
</head>
<body>
    <form action="" method="POST">
    <label for="lenguaje">Que lenguaje Prefieres:</label>
    <input type="radio" id="php" name="lenguaje" value="PHP" required> PHP
    <input type="radio" id="java" name="lenguaje" value="Java" > Java
    <input type="radio" id="python" name="lenguaje" value="Phyton" > Phyton
    <input type="radio" id="js" name="lenguaje" value="JavaScript"> JavaScript
    <button type="submit">Enviar</button>
    <br>

    
<?php

    if (isset($_POST["lenguaje"])) {
        $lenguaje=$_POST["lenguaje"];
        
        echo "Has elegido $lenguaje";
    }


?>

</body>
</html>