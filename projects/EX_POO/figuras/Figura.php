<?php
//Definir clase abstracta
abstract class Figura
{
    protected $color;
    private static $texto = "El color de la figura es: ";
    const EXPRE = "... que chulooo";
    const GREEN = "";
    public function __construct($color)
    {
        $this->color = $color;
    }

    abstract public function area();


    public function mostrarColor()
    {
        echo self::$texto . $this->color . Figura::EXPRE;
    }
}

