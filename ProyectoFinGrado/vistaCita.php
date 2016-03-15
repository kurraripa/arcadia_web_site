<?php
require_once 'controladores/funciones.php';

//Asignamos los campos del formulario a variables, e impedimos la inyección de transformando
// los datos obtenidos en texto plano.
$nombre = htmlspecialchars(trim($_POST['nombrePaciente']));
$apellidos = htmlspecialchars(trim($_POST['apellidosPaciente']));
$mail = htmlspecialchars(trim($_POST['e-mail']));
$descripcion = htmlspecialchars(trim($_POST['descripcion']));
$errores = validar($nombre, $apellidos, $descripcion);

//Si se ha detectado algún campo vacío cargamos de nuevo el formulario.
if (!empty($errores)) {
    include 'formCita.php';
    exit();
}
//Si se han rellenado los campos necesarios ejecutamos la insercción y mostramos los datos insertados.
else {
    include 'conexion/conexionSQL.php';
    $query = "INSERT INTO `peticionescitas`(`id`, `Nombre`, `Apellidos`, `Correo electrónico`, `Descripción`) VALUES ('','$nombre','$apellidos','$mail','$descripcion')";
    $result = mysqli_query($conexion, $query) or die('Consulta fallida: ' . mysqli_error());
    ?>

    <html>

        <?php
        session_start();
        include 'includes/cabecera.php';
        ?>
        <body>     
            <?php
            echo "<div class='container'><div class='panel panel-primary' id='panelResultado'>";
            echo "<div class='panel-heading'><h3 class='panel-title'>DATOS DE LA CITA</h3></div>";
            echo "<div class='panel-body'>";
            echo "<p>Nombre: $nombre</p>";
            echo "<p>Apellidos: $apellidos</p>";
            echo "<p>Correo electrónico: $mail</p>";
            echo "<p>Descripción cita: $descripcion</p>";
            echo "</div></div></div>\n";
            ?>
        </body>

        <?php
        include 'includes/pie.html';
    }
    ?>
</html>

