 <?php
   
    $paises = ["Venezuela", "España", "Portugal", "Francia"];
    $mensaje = "";
    
    if (isset($_GET['paises'])) {
       
        $pais = $_GET["paises"];
        $mensaje = "El Pais seleccionado es: " . $pais;
    }
    ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>paises</title>
 </head>

 <body>
   
       <p><?php echo "Selecciona tu pais de origen:" ?></p>
     <form>
         <select name="paises">
          
             <?php foreach ($paises as $pais): ?>
                 <option value="<?php echo $pais ?>"> 
                     <?php echo $pais ?> 
             <?php endforeach; ?>
         </select>
         <button type="submit">Enviar</button>

            <p><?php echo $mensaje ?></p>
     </form>
 </body>

 </html>