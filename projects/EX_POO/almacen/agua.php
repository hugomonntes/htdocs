<?php

require_once "bebida.php";

class Agua extends Bebida
{
    private $origen;

    public function __construct($id, $litros, $precio, $marca, $origen)
    {
        parent::__construct($id, $litros, $precio, $marca);
        $this->origen = $origen;
    }

    public function getOrigen()
    {
        return $this-> origen;
    }

    public function setOrigen($origen)
    {
        $this -> origen = $origen;
    }

    public function calcularPrecio()
    {
        return $this->precio;
    }
    public function mostrarDatos()
    {
        parent::mostrarDatos();
        echo "Origen: {$this->origen}";
    }
}
