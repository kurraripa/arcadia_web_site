<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'conexion/conexionSQL.php';
        include './includes/cabecera.php';
        if(isset($_SESSION['nombre'])){
echo "<div class='container'><div class='alert alert-success' role='alert'>Has iniciado Sesion como: ".$_SESSION['nombre']."</div>";

$query3 = "Select * from peticionescitas";
$result3 = mysqli_query($conexion, $query3);

 echo "<div class='panel panel-default' id=panelEnfermedades>";
        echo "<div class='panel-heading'><h3 class='panel-title'>Citas pendientes:</h3></div>";
        echo "<div class='panel-body'><table class=table>\n";
        echo "<th>id</th><th>Nombre</th><th>Apellidos</th><th>Descripción</th><th>e-mail</th>";
while($line = mysqli_fetch_array($result3, MYSQLI_ASSOC))
{
    echo "\t<tr>\n";
    foreach ($line as $col)
    {
        echo "\t\t<td>$col</td>\n";
    }
     echo "\t</tr>\n";
}
 echo "</table></div></div></div>\n";
}
        ?>
        
        
        <?php
        include './includes/pie.html';
        ?>
    </body>
</html>
