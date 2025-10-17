# Sesion Parte 1

---

**Conceptos previos:**

La sesion tiene caducidad
La sesion se guarda en memoria

**En el codigo PHP**
- session_start; // Para iniciar sesion
- $_SESSION -> array asociativa (dinamica)
- $_session["usuario"]="pepe"; string


**Para detener la sesion:**
- session_unset(); // borrar todas las variables
- session_destroy() //destruye la sesion
- unset_($_session["usuario"]);  // borrar una sola variable