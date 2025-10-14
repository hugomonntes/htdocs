<?php

use Vtiful\Kernel\Format;
class Libro
{
    private $autor;
    private $titulo;
    private $paginas;
    private $refLibro;

    public function __construct($refLibro){
        $this -> refLibro = $refLibro;
    }

    function getAutor()
    {
        return $this->autor;
    }
    function getTitulo()
    {
        return $this->titulo;
    }

    function getPaginas()
    {
        return $this->paginas;
    }

    function printAutor()
    {
        echo $this->getAutor() . "";
    }

    function printTitulo()
    {
        echo $this->getTitulo() . "";
    }

    function printLibro()
    {
        echo $this->getAutor().", ".$this->getTitulo().", ".$this->getPaginas();
    }

    
}
?>