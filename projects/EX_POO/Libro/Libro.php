<?php

class Libro
{

    private $autor;
    private $titulo;
    private $paginas;
    private $refLibro;
    private $prestado;
    private $contieneCD;
    private static $referencia = 1;
    public static $numLibros = 0;

    const LIBRO = 1;

    public function __construct($autor, $titulo, $paginas, $refLibro, $prestado)
    {
        $this->autor = $autor;
        $this->titulo = $titulo;
        $this->paginas = $paginas;
        $this->refLibro = self::$referencia++;
        $this->prestado = $prestado;
        $this->contieneCD = FALSE;
        self::$numLibros++;

    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getPaginas()
    {
        return $this->paginas;
    }

    function setRefLibro($refLibro)
    {
        if (strlen($refLibro) > 3) {
            $this->refLibro = $refLibro;
        } else {
            echo "<p>Longitud no válida<p>";
        }
    }

    public function setPrestado()
    {
        $this->prestado++;
    }

    public function setContieneCD()
    {
        $this->contieneCD = TRUE;
    }

    public function printTitulo()
    {
        echo "Libro: ", $this->titulo, "<br>";
    }

    public function printAutor()
    {
        echo "Autor: ", $this->autor, "<br>";
    }

    public function printLibro()
    {
        echo "Autor: ", $this->autor, "<br>";
        echo "Libro:  ", $this->titulo, "<br>";
        echo "Paginas: ", $this->paginas, "<br>";
        if (strlen($this->refLibro) > 0) {
            echo "Referencia: ", $this->refLibro, "<br>";
        }
        echo "Prestado: ", $this->prestado, " veces <br>";

        if ($this->contieneCD) {
            echo "El libro contiene CD";
        }
    }

}



$libro1 = new Libro("Hugo ", " El Señor de los anillos ", 130, "", 0, false);

print $libro1->getAutor();
print $libro1->getTitulo();
print $libro1->getPaginas();

echo "<br>";

$libro1->printLibro();
$libro1->setPrestado();
$libro1->printLibro();


$libro2 = new Libro("Hugo ", " La Colmena ", 250, "", 0, false);
$libro2->printLibro();

print "El número de libros que hay es " . Libro::$numLibros;