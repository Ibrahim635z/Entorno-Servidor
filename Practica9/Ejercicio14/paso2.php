<?php


session_start();


if (!isset($_SESSION['nombre']) || empty($_SESSION['nombre'])) {
    header("Location: paso1.php");
    exit();
}


if (isset($_POST['edad'])) {
    
    $_SESSION['edad'] = (int)$_POST['edad'];
    
    
    header("Location: paso3.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paso 2: Edad</title>
</head>
<body>
    <h1>Paso 2 de 3</h1>
    
    <p>Hola, <?php echo htmlspecialchars($_SESSION['nombre']); ?>.</p>
    
    <form action="paso2.php" method="post">
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" min="1" required 
               value="<?php echo isset($_SESSION['edad']) ? (int)$_SESSION['edad'] : ''; ?>">
        <br><br>
        <a href="paso1.php">Volver (Cambiar Nombre)</a> 
        <button type="submit">Siguiente</button>
    </form>
</body>
</html>