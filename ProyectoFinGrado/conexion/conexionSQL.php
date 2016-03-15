<?php
// No conectamos a localhost con el usuario root
$conexion = mysqli_connect('localhost', 'root','')
    or die('No se pudo conectar: ' . mysql_error());

//codificamos la conexión a utf8
mysqli_set_charset($conexion,"utf8");

//Seleccionamos la base de datos bdarcadia
$bd = 'bdarcadia';
mysqli_select_db($conexion, $bd) or die('No se pudo seleccionar la base de datos');

?>