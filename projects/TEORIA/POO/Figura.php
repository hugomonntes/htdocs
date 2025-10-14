<?php
abstract class Figura
{
    protected $color;

    private static $texto = "El color de la figura es: ";

    const EXPRESION = "...que chulo";

    public function __construct($color)
    {
        $this->color = $color;
    }

    abstract public function area();

    public function mostrarColor()
    {
        echo self::$texto . $this->color . Figura::EXPRESION;
    }
}
?>