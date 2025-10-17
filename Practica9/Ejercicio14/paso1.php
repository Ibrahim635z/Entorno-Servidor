<?php

session_start();


if (isset($_POST['nombre'])) {
    
    $_SESSION['nombre'] = htmlspecialchars(trim($_POST['nombre']));
    
   
    header("Location: paso2.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paso 1: Nombre</title>
</head>
<body>
    <h1>Paso 1 de 3</h1>
    
    <form action="paso1.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required 
               value="<?php echo isset($_SESSION['nombre']) ? htmlspecialchars($_SESSION['nombre']) : ''; ?>">
        <br><br>
        <button type="submit">Siguiente</button>
    </form>
    
    <?php if (isset($_SESSION['nombre'])): ?>
        <p>*(Nombre ya guardado en sesión: <?php echo htmlspecialchars($_SESSION['nombre']); ?>)*</p>
    <?php endif; ?>
</body>
</html>