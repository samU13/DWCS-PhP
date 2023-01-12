<?php
//Crear unha clase Articulo con dúas propiedades (id e nome) que non deben ser accesibles directamente dende o exterior.
// Define un construtor que establece o valor das propiedades.
// Cando se clone un obxecto o id debe incrementarse en 1 con respecto ao obxecto orixinal.
// Utiliza métodos máxicos para establecer e obter os valores dos atributos de xeito que sigan sendo válidos no caso de que engadísemos máis atributos á clase.
// No caso de que intentemos amosar o obxecto con echo ou print debe chamarse a un método de nome amosarArticulo que da información dos valores dos atributos da forma: 1 – linterna.

class Articulo
{
    private $id;
    private $nombre;
    static $siguiente_id = 2;

    public function __construct($id, $nombre)
    {
        $this->id = $id;
        $this->nombre = $nombre;
    }
    public function __clone()
    {
        $this->id = Articulo::$siguiente_id++;
    }
    public function __Set($propiedad, $valor)
    {
        if (property_exists(__CLASS__, $propiedad)) {
            $this->$propiedad = $valor;
        } else {
            echo "No existe la propiedad $propiedad";
        }
    }
    public function __get($propiedad)
    {
        if (property_exists(__CLASS__, $propiedad)) {
            return $this->$propiedad;
        }
        return NULL;
    }
    public function __toString()
    {
        return $this->mostrarArticulo();
    }
    public function mostrarArticulo()
    {
        return $this->id . ' - ' . $this->nombre;
    }
}