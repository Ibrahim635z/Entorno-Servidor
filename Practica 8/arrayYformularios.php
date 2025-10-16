 <?php
 // Creamos un array con valores estáticos
 $colores = ["rojo","azul","verde","amarillo"];
 $mensaje = "";
 // Si se ha enviado el formulario 
if (isset($_GET['colores'])) {
 // podemos recoger el color seleccionado
 $color = $_GET["colores"];
 $mensaje = "El color seleccionado es ".$color;
 }
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Colores</title>
 </head>
 <body>
 <!-- mostramos el mensaje -->
 <p><?php echo $mensaje ?></p>
 <form>
 <select name="colores">
 <!-- creamos las opciones de la lista con los valores del array -->
 <!-- muy importante los dos puntos en lugar de llave -->
 <!-- comenzamos recorriendo el array guardando cada valor en la variable $color -->
<?php foreach ($colores as $color): ?>
 <option value="<?php echo $color ?>"> <!-- una cosa es el valor de la opción -->
 <?php echo $color ?> <!-- y otra cosa el texto que se le muestra al usuario -->
 </option>
 <?php endforeach; ?>
 </select>
 <button type="submit">Enviar</button>
 </form>
 </body>
 </html>