<?php
require_once("Persona.php");
require_once("Baile.php");
final class Profesor extends Persona
{
    private $nif;
    private $bailes = array();
    public function __construct($nombre, $apellidos, $movil, $nif)
    {
        parent::__construct($nombre, $apellidos, $movil);
        $this->nif = $nif;
    }

    public function calcularSueldo($horas, $precioClase = 16)
    {
        return $horas * $precioClase;
    }

    public function addBaile($nombreBaile, $edadMin = 8)
    {
        if (!empty($this->bailes)) {
            foreach ($this->bailes as $baile) {
                if ($baile->getNombre() === $nombreBaile) {
                    return;
                }
            }
        }
        $this->bailes[] = new Baile($nombreBaile, $edadMin);
    }
    public function eliminarBaile($nombreBaile)
    {
        foreach ($this->bailes as $baile) {
            if ($baile->getNombre() === $nombreBaile) {
                $key = array_search($baile, $this->bailes, TRUE);
                unset($this->bailes[$key]);
            }
        }
    }

    public function getBailes()
    {
        $cadena = '<br />';
        foreach ($this->bailes as $baile) {
            $cadena = $cadena . $baile->getNombre() . ' (edad min:' . $baile->getEdadMinima() .
                ' años)<br />';
        }
    }
}