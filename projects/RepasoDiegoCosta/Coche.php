<?php
class Coche
{
    public $marca;
    public $modelo;
    public $tiempo;
    public $color;
    public $idiomas;
    public $email;

    public function __construct($marca, $modelo, $tiempo, $color, $idiomas, $email)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->tiempo = $tiempo;
        $this->color = $color;
        $this->idiomas = $idiomas;
        $this->email = $email;
    }
    public function getMarca()
    {
        return $this->marca;
    }
    public function getModelo()
    {
        return $this->modelo;
    }
    public function getTiempo()
    {
        return $this->tiempo;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function getIdiomas()
    {
        return $this->idiomas;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }
    public function setTiempo($tiempo)
    {
        $this->tiempo = $tiempo;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function setIdiomas($idiomas)
    {
        $this->idiomas = $idiomas;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function mostrarDatos()
    {   
        echo "<h1>Datos</h1>";
        echo "Marca: " . $this->getMarca()."<br>";
        echo "Modelo: " . $this->getModelo()."<br>";
        echo "Tiempo: " . $this->getTiempo()."<br>";
        echo "Color: " . $this->getColor()."<br>";
        foreach ($this->getIdiomas() as $idioma) {
            echo "Idioma: ".$idioma."<br>";
        }
        echo "Email: " . $this->getEmail();
    }
}
?>