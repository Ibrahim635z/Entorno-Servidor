<?php

$limite_inactividad = 10; 

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['usuario']) && isset($_SESSION['ultimo_acceso'])) {
    
    $tiempo_transcurrido = time() - $_SESSION['ultimo_acceso'];
    
    if ($tiempo_transcurrido > $limite_inactividad) {
        
        session_unset();
        session_destroy();
        
        
        header("Location: login.php?timeout=1"); 
        exit();
    }
    
    $_SESSION['ultimo_acceso'] = time();

} else if (!isset($_SESSION['usuario'])) {
 
    header("Location: login.php");
    exit();
}

?>