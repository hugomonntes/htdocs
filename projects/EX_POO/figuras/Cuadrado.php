<?php

require_once "Figura.php";

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
        echo "El area del circulo es: " . number_format(pow($this->lado, 2), 2);
    }
}

