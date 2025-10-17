<?php

session_start();

if (!isset($_SESSION["carritos"])) {
    $_SESSION["carritos"] = [];
}

if (isset($_GET["accion"])  && isset($_GET["producto"]) && !empty($_GET["producto"])) {
    
   array_push($_SESSION["carritos"], $_GET["producto"]);
}
// Ejercicio 7
if (isset($_GET["eliminar1"])) {
  array_shift($_SESSION["carritos"]);
}
if (isset($_GET["eliminarUltimo"])) {
  array_pop($_SESSION["carritos"]);
}
if (isset($_GET["eliminarConcreto"])) {
  $posicion=$_GET["posicion"]-1;
  array_splice($_SESSION["carritos"], $posicion, 1);
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>carrito productos</title>
  </head>
  <body>
   
    <form action="">
        <label for="">Agrega pun producto</label>
        <input type="text" id="producto" name="producto">
      <button type="submit" value="salir" name="accion">Agregar</button>
      <button type="submit" value="eliminar" name="eliminar1">Eliminar Primero de la lista</button>
      <button type="submit" value="eliminar" name="eliminarUltimo">Eliminar Ultimo de de la lista</button>
      <br><br>
      <label for="">Elige una posicion concreta de la lista</label>
      <input type="number" id="posicion" name="posicion">
      <button type="submit" value="eliminar" name="eliminarConcreto">Eliminar</button>

      <br>
  <?php

    echo"Los productos seleccionados son: <br>";
    foreach($_SESSION["carritos"] as $item):
    echo "-",$item,"<br> ";

    endforeach;

  ?>
      
    </form>
  </body>
</html>
