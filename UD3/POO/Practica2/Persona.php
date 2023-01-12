<?php

// Uso de constructores y de la clase DateTime

//Crear unha clase Persoa con tres propiedades (nome, data de nacemento e sexo) que non
//deben ser accesibles directamente dende o exterior.
// Define un construtor que pode recibir como parámetro as 3 propiedades ou unicamente as
//dúas primeiras. Nese caso o valor que debe tomar o atributo sexo é 'H'.
// Ao mostrar o sexo debe devolver 'home' se o valor de sexo é 'H', 'muller' se o valor de
//sexo é 'M', é descoñecido para calquera outro valor.
// A clase debe incluir un método de nome diasVivo que devolverá información relativa aos
//días que pasaron dende a data de nacemento da persoa, empregando a clase DateTime de
//PHP, da forma: 5 anos, 3 meses, 14 días, un total de 1932 días
//Un exemplo da saída podería ser:
//Pedro ten 5 anos, 3 meses, 25 días, un total de 1943 días.
//O seu sexo é: home

class Persona
{
    private $nombre;
    private $fechaNacimiento;
    private $sexo;

    public function __construct($nombre, $nacimiento, $sexo = 'H')
    {
        $this->nombre = $nombre;
        $this->fechaNacimiento = $nacimiento;
        $this->sexo = $sexo;
    }

    public function diasvivo()
    {
        $hoy = new DateTime('now');
        $cumpleaños = new DateTime($this->fechaNacimiento);
        $diasVivo = $cumpleaños->diff($hoy);
        return $diasVivo->format('%y anos, %m meses, %d dias, un total de %a dias.');
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function getSexo()
    {
        if ($this->sexo === 'H') {
            return 'home';
        } elseif ($this->sexo === 'M') {
            return 'muller';
        } else {
            return 'non binario';
        }
    }
}