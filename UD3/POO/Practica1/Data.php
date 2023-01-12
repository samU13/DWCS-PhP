<?php
//Clase con propiedad y metodos estaticos

//Modifica a clase Data, para que a propiedade calendario non sexa accesible dende o exterior
//da clase. Debes engadir os seguintes métodos estáticos:
// getCalendario: que devolverá o valor desta propiedade
// getHora: que devolvera a hora co seguinte formato HH:MM:SS
// getDataHora: que chamará aos métodos getData e getHora para amosar tanto a data como
//a hora
//A salida que debe amosar é a seguinte:
//Usamos o calendario: Calendario gregoriano
//Hoxe é Venres 15 de Febreiro do 2014 e son as 09:48:31

class Data
{
    private static $calendario = "Calendario gregoriano";
    private static $dias = array(
        "Domingo", "Luns", "Martes", "Mércores",
        "Xoves", "Venres", "Sábado"
    );
    private static $meses = array(
        "Xaneiro", "Febreiro", "Marzo", "Abril",
        "Maio", "Xuño", "Xullo", "Agosto", "Setembro",
        "Outubro", "Novembro", "Decembro"
    );

    public static function getDate()
    {
        $fecha = self::$dias[date('w')] . " " . date('d') . " de " .
            self::$meses[date('n') - 1] . " do " . date('Y');
        return $fecha;
    }

    public static function getHora()
    {
        $hora = date('H');
        $minutos = date('i');
        $segundos = date('s');
        return $hora . ':' . $minutos . ':' . $segundos;
    }

    public static function getDataHora()
    {
        $date = self::getDate(); // Data::getData()
        $hora = self::getHora();
        return "Hoxe e " . $date . " e son as " . $hora;
    }
    public static function getCalendario()
    {
        $cal = self::$calendario;
        return $cal;
    }
}