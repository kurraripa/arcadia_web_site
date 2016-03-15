<?php
session_start();
?>
<!DOCTYPE html>
<html>    
    

        <?php
        include 'includes/cabecera.php';
        
        //Nos conectamos a la base de datos.
        include 'conexion/conexionSQL.php';
        
        // Realizamos la consulta de enfermedades en la base da datos.
        $query = 'SELECT * FROM enfermedades';
        $result = mysqli_query($conexion, $query) or die('Consulta fallida: ' . mysqli_error());

        // Imprimimos los resultados en HTML.
        echo "<div class='container'><div class='panel panel-default' id=panelEnfermedades>";
        echo "<div class='panel-heading'><h3 class='panel-title'>GLOSARIO ENFERMEDADES</h3></div>";
        echo "<div class='panel-body'><table class=table>\n";
        while ($line = mysqli_fetch_array($result, MYSQL_ASSOC)) {
            echo "\t<tr>\n";
            foreach ($line as $col_value) {
                echo "\t\t<td>$col_value</td>\n";
            }
            echo "\t</tr>\n";
        }
        echo "</table></div></div></div>\n";

        include "./includes/pie.html";
        ?>
 

</html>