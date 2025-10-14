<?php

use Vtiful\Kernel\Format;
class Libro
{
    private $autor;
    private $titulo;
    function getAutor()
    {
        return $this->autor;
    }
    function getTitulo()
    {
        return $this->titulo;
    }

    function printAutor(){
        echo $this -> getAutor() . "";
    }

    function printTitulo(){
        echo $this -> getTitulo() . "";
    }
}
?>