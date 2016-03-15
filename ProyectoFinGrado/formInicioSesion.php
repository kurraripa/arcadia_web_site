<?php
session_start();
?>
<!DOCTYPE html>
<html>
<?php
include 'includes/cabecera.php';
?>
<body>
    <main class="container">
<?php
if(isset($_SESSION['nombre'])){
echo "<div class='alert alert-success' role='alert'>Has iniciado sesion: " . $_SESSION['nombre'] . "</div>";
echo "<p><a href='cerrarSesion.php'>Cerrar Sesion</a></p>";
 echo "<a href='citasUsuario.php'>Ver citas solicitadas</a>";
}else {
?>
    <form action="usuarioLogeado.php" method="POST" id="formulario">
        <div class="form-group">
            <label for="nombreUsuario">Nombre de usuario:</label>
<input type="text" class="form-control" placeholder="Nombre de usuario" name="nombreUsu" required/>
        </div>
        <div class="form-group">
            <label for="contraseñaUsuario">Contraseña:</label>
            <input type="password" class="form-control" name="contraseñaUsu" required>
        </div>
<input type="submit" value="Enviar" class="btn btn-default"/>
</form>
<?php
}
?>
   
    </main>
    <?php
include 'includes/pie.html';
    ?>
</body>
</html>