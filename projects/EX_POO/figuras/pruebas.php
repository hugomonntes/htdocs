<?php

require_once 'C:\xampp\htdocs\pruebas\pruebas_php\POO_php\figuras\Circulo.php';
require_once 'C:\xampp\htdocs\pruebas\pruebas_php\POO_php\figuras\Cuadrado.php';

$circulo = new Circulo("rojo", 15);
$circulo->mostrarColor();
echo "<br>";
$circulo-> area();

echo "<br>";

$cuadrado = new Cuadrado("azul",3);
$cuadrado->mostrarColor();
echo "<br>";
$cuadrado->area();