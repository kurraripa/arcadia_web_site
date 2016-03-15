<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
<?php
include 'includes/cabecera.php';
?>
<body>
<p>Has Cerrado Sesion</p>
<br /><a href="formInicioSesion.php">Ir a inicio de sesión.</a>
</body>
</html>