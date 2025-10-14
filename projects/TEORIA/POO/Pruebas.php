<?php
    require_once "Circulo.php";
    require_once "Cuadrado.php";

    $circulo = new Circulo("rojo", 5);
    $circulo->mostrarColor();
    echo "<br>";
    $circulo->area();
    echo "<br>";
    $cuadrado = new Cuadrado("azul", 10) ;
    $cuadrado->mostrarColor();
    echo "<br>";
    $cuadrado->area();
?>