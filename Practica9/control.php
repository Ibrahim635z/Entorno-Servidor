<?php
session_start(); // Recuperamos la sesión y si no existe se crea. Tiene que ser siempre la 1ª línea
// Basta con preguntar si hemos recibido el botón accion y con él todo los demás campos del formulario
if (isset($_GET["accion"])) {
    // Ahora preguntamos por el botón "aacion" que ha sido pulsado
    $accion = $_GET["accion"];
    switch ($accion) {
        case "entrar": // Si hemos pulsado el botón entrar en la página acceso.html
            /* Recogemos en variables temporales (solamente existen en esta página hasta que se recargue)
            los campos del formulario */
            $usuario = $_GET["usuario"];
            $clave = $_GET["clave"];
            if ($usuario == "pepe" && $clave == "1234") {
                // Si la identificación es correcta:
                // Guardamos en la sesión el nombre del usuario creando
                // un nuevo elemento en el array asociativo $_SESSION
                // para poder hacer comprobaciones de acceso indebidos
                $_SESSION["usuario"] = $usuario;
                // Y redirigimos a la página de bienvenida
                header("Location: bienvenida.php");
            } else {
                // En caso contrario le enviamos al cliente la página de acceso
                // Si no añadimos esta línea es como si el cliente no tuviera una respuesta y
                // no mostraría nada. Probar a quitarla.
                header("Location: acceso.html");
            }
            break;
        case "salir": // Si hemos pulsado el botón Desconectar con valor salir
            // Destruimos la sesión
            session_destroy();
            // Y volvemos a la página principal
            header("Location: acceso.html");
            break;
    }
}
