<?php

use Dom\ParentNode;
class Persona
{
    public $nombre;
    public $apellidos;
    public $email;
    public $edad;
    public $genero;
    public $idiomas;
    public $publicidad;

    public function __construct($nombre, $apellidos, $email, $edad, $genero, $idiomas, $publicidad){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->edad = $edad;
        $this->genero = $genero;
        $this->idiomas = $idiomas;
        $this->publicidad = $publicidad;      
    }

    public function setNombre($nombre){
        if (strlen($nombre) < 15) {
            $this->nombre = $nombre;
        } else {
            echo "<span style='color: red;'>Nombre moito longo<\span>";
        }
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setApellidos($apellidos){
        $this->apellidos = $apellidos;
    }

    public function getApellidos(){
        return $this->apellidos;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }
    
    public function getEdad(){
        return $this->edad;
    }

    public function setGenero($genero){
        $this->genero = $genero;
    }

    public function getGenero(){
        return $this->genero;
    }

    public function setIdiomas($idiomas){
        $this->idiomas = $idiomas;
    }

    public function getIdiomas(){
        return $this->idiomas;
    }

    public function setPublicidad($publicidad){
        $this->publicidad = $publicidad;
    }

    public function getPublicidad(){
        return $this->publicidad;
    }

    public function mostrarDatos(){
        echo "<h2>Datos de la persona:</h2>";
        echo "Nombre: " . $this->getNombre() . "<br>";
        echo "Apellidos: " . $this->getApellidos() . "<br>";
        echo "Email: " . $this->getEmail() . "<br>";
        echo "Edad: " . $this->getEdad() . "<br>";
        echo "Género: " . $this->getGenero() . "<br>";
        foreach ($this->getIdiomas() as $idioma) {
            echo "Idioma: " . $idioma . "<br>";
        }
        if ($this->getPublicidad() == "si") {
            echo "Acepta publicidad<br>";
        } else {
            echo "No acepta publicidad<br>";
        }
    }
}
?>