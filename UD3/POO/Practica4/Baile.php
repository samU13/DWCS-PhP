<?php
class Baile
{
    private $nombre;
    private $edadMinima;
    public function __construct($nombre, $edadMinima = 8)
    {
        $this->nombre = $nombre;
        $this->edadMinima = $edadMinima;
    }
    public function getEdadMinima()
    {
        return $this->edadMinima;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
}