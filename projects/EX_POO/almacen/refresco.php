<?php

require_once "bebida.php";

class Refresco extends Bebida{
    private $azucar;
    private $promocion;

    public function __construct($id, $litros, $precio, $marca, $azucar, $promocion)
    {
        parent :: __construct($id, $litros, $precio, $marca);
        $this -> azucar = $azucar;
        $this -> promocion =  $promocion;
    }

    public function getAzucar(){
        return $this->azucar;
    }

    public function getPromocion(){
        return $this->promocion;
    }

    public function setAzucar($azucar){
        $this -> azucar = $azucar;
    }

    public function setPromocion($promocion){
        $this -> promocion = $promocion;
    }

    public function calcularPrecio()
    {
        return $this->promocion ? $this->precio * 0.9 : $this->precio; // Si tiene promo ps metemos solo 90% del precio
    }

    public function mostrarDatos()
    {
        parent::mostrarDatos();
        echo  "Porcentaje de Azucar: {$this->azucar}, Promoción del 10%: {$this->promocion}";
    }
}