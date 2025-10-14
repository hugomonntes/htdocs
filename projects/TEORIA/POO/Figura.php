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

class Circulo extends Figura
{
    private $radio;

    public function __construct($color, $radio)
    {
        parent::__construct($color);
        $this->radio = $radio;
    }

    public function area()
    {
        return pi() * pow($this->radio, 2);
    }

}

class Cuadrado extends Figura
{
    private $lado;

    public function __construct($color, $lado)
    {
        parent::__construct($color);
        $this->lado = $lado;
    }

    public function area()
    {
        return pow($this->lado, 2);
    }
}

$circulo = new Circulo("rojo", 5);
$cuadrado = new Cuadrado("azul", 4);
$circulo->mostrarColor();
echo "<br>";
$cuadrado->mostrarColor();
echo "<br>El área del círculo es: " . $circulo->area();
echo "". $cuadrado->mostrarColor();
?>