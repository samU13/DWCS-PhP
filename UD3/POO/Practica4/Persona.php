<?php
class Persona
{
    protected $nombre;
    protected $apellidos;
    protected $movil;

    public function __construct($nombre, $apellidos, $movil)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->movil = $movil;
    }

    public function verInformacion()
    {
        return $this->nombre . ' ' . $this->apellidos . ' (' . $this->movil . ') ';
    }
}
