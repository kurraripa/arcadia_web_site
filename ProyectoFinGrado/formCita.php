<?php
session_start();
?>
<!DOCTYPE html>
<html>  

    <?php
    include 'includes/cabecera.php';
    ?>

    <main class="container">
        <div id="tituloCita" class="bg-info"><h2>SOLICITE UNA CITA</h2></div>
        
        <form method="POST" action="vistaCita.php">
            <div class="<?php if (isset($errores['nombre'])) {
        echo "form-group has-warning";
    } else {
        echo "form-group";
    } ?>">
                <label for="nombrePaciente">Nombre*</label>
                <input value="" type="text" class="form-control" name="nombrePaciente" placeholder="Introduzca nombre">
                <?php if (isset($errores['nombre'])) {
                    echo "<p class=bg-warning>Inserte nombre, por favor.</p>";
                } ?>
            </div>
            <div class="<?php if (isset($errores['apellidos'])) {
                    echo "form-group has-warning";
                } else {
                    echo "form-group";
                } ?>">
                <label for="apellidosPaciente">Apellidos*</label>
                <input value="" type="text" class="form-control" name="apellidosPaciente" placeholder="Inserte apellidos">
                <?php if (isset($errores['apellidos'])) {
                    echo "<p class=bg-warning>Inserte apellidos, por favor.</p>";
                } ?>
            </div>
            <div class="form-group">
                <label for="correoElectronico">Correo electrónico</label>
                <input type="email" class="form-control" name="e-mail" placeholder="Introduzca e-mail">
            </div>    

            <div class="<?php if (isset($errores['descripcion'])) {
                    echo "form-group has-warning";
                } else {
                    echo "form-group";
                } ?>">
                <label for="descripción">Descripción de la cita*</label>
                <textarea class="form-control" rows="3" name="descripcion"></textarea>
    <?php if (isset($errores['descripcion'])) {
        echo "<p class=bg-warning>Inserte descripción, por favor.</p>";
    } ?>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> He leído y acepto el Aviso legal, y autorizo el tratamiento de mis datos personales según la Política del sitio web.
                </label>
            </div>

            <button type="submit" class="btn btn-default" name="enviarSolicitud">Solicitar</button>
        </form>
        <p>* Campos obligatorios</p>
    </main>


<?php
include 'includes/pie.html';
?>
</html>