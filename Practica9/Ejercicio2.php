<?php
session_start();

if (!isset($_SESSION["visitas"])) {
   
    $_SESSION["visitas"] = 1;
} else {
 
    $_SESSION["visitas"]++;
}

echo "<h1>Contador de Visitas en esta Sesión</h1>";
echo "<p>Has visitado esta página " . $_SESSION["visitas"] . " veces</p>";

?>