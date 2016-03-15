<?php
function validar($nombre, $apellidos, $descripcion)
{
    $errores = array();
if(empty($nombre))
    {
    $errores['nombre'] = "Introduzca nombre";
    }
    if(empty($apellidos))
    {
    $errores['apellidos'] = "Introduzca apellidos";
    }
    if(empty($descripcion))
    {
    $errores['descripcion'] = "Introduzca descripcion";
    }                return $errores;
}