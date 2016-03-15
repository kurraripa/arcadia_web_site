<?php
session_start();
?>
<!DOCTYPE html>
<html>
<?php
include 'includes/cabecera.php';
?>
<body>
<?php
include 'conexion/conexionSQL.php';
//Seleccionamos el nombre de usuario de la base de datos.
$query1 = "Select nombre from usuarios";
$result1 = mysqli_query($conexion, $query1);
$nombres = mysqli_fetch_array($result1);

//Ahora seleccionamos la contraseña
$query2 = "Select contraseña from usuarios";
$result2 = mysqli_query($conexion, $query2);
$contraseñas = mysqli_fetch_array($result2);


$nombre = $nombres[0];
$contraseña = $contraseñas[0];

if(isset($_POST['nombreUsu']) == $nombre && $_POST['contraseñaUsu'] == $contraseña){
$_SESSION['nombre'] = $_POST['nombreUsu'];
$_SESSION['contraseña'] = $_POST['contraseñaUsu'];
header('Location: ./formInicioSesion.php');
}
else{
echo "Acceso Restringido";
}

?>
    <br /><a href="formInicioSesion.php">Ir a inicio de sesión</a>
</body>
</html>