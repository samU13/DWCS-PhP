<?php
require_once("Profesor.php");
require_once("Alumno.php");
class Academia
{
    const nombre = "ESCUELA DE BAILE TIKITAKA";
    function addProfesor($nombre, $apellidos, $movil, $nif)
    {
        $p = new Profesor($nombre, $apellidos, $movil, $nif);
        return $p;
    }

    function addAlumno($nombre, $apellidos, $movil)
    {
        $a = new Alumno($nombre, $apellidos, $movil);
        return $a;
    }
}