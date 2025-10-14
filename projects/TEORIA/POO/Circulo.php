<?php
require_once "Figura.php";
class Circulo extends Figura implements Area, Formulas
{

    private $radio;

    public function __construct($color, $radio)
    {
        parent::__construct($color);
        $this->radio = $radio;
    }

    public function area()
    {
        echo "El area l circulo es: " . number_format(pi() * pow($this->radio, 2));
    }

    public function mostrarColor()
    {
        echo "El color del circulo es: " . $this->color;
    }

    public function volumen()
    {
        echo "" . $this->radio;
    }
}
?>