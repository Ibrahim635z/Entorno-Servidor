<?php

require_once("controlacceso.php"); // EJERCICIO 10
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bienvenido/a</title>
  </head>
  <body>
    <h3>Bienvenido, <?php echo htmlspecialchars($_SESSION["usuario"]); ?>, entraste a las: <?php echo htmlspecialchars($_SESSION["hora_inicio"]);// EJERCICIO 11 ?>.</h3>
    
    <form action="login.php"> 
      <button type="submit" value="salir" name="accion">Cerrar sesion</button>
    </form>

    <hr> 

    <h4>Cambiar Nombre de Usuario</h4>
    <form action="cambiar_usuario.php" method="post">
      <label for="nuevo_usuario">Nuevo Usuario</label>
      <input type="text" id="nuevo_usuario" name="nuevo_usuario" required />
      <button type="submit" name="accion" value="cambiar">Actualizar</button>
    </form>
    
  </body>
</html>