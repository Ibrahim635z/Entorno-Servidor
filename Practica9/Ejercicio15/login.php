<?php

session_start();

if (isset($_GET["accion"])) {
    $accion = $_GET["accion"];
    
    switch ($accion) {
        case 'entrar':
            $usuario = $_GET["usuario"];
            $clave = $_GET["clave"];

            
            if ($usuario == "admin" && $clave == "1234") {
                
                $_SESSION["usuario"] = $usuario;
                
                // EJERCICIO 15
                $_SESSION["ultimo_acceso"] = time(); 
           

                header("Location: bienvenida.php");
                exit();
            } else {
               
                $_SESSION['login_error'] = "Credenciales incorrectas.";
                header("Location: login.php");
                exit();
            }
            break;
            
        case 'salir':
            
            session_destroy();
            header("Location: login.php");
            exit();
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso</title>
</head>
<body>
    <h1>Iniciar Sesion</h1>
    
    <?php 
    // 1. Muestra el mensaje de timeout si viene de la redirección
    if (isset($_GET['timeout']) && $_GET['timeout'] == 1) {
        echo '<p style="color: red; font-weight: bold;">La Sesion ha sido cerrada por estar inactivo mas de 10 segundos</p>';
    }
    
    if (isset($_SESSION['login_error'])) {
        echo '<p style="color: red;">' . htmlspecialchars($_SESSION['login_error']) . '</p>';
        unset($_SESSION['login_error']); 
    }
    ?>

    <form action="login.php" method="get">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" value="admin" required />
        <br><br>
        <label for="clave">Contraseña:</label>
        <input type="password" id="clave" name="clave" value="1234" required />
        <br><br>
        <button type="submit" value="entrar" name="accion">Acceder</button>
    </form>
</body>
</html>