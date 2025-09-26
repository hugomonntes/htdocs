<?php
//1
function reemplazar()
{
    $cadena = "abordaje";
    echo str_replace("bord", "lmir", $cadena);
}

reemplazar();
echo "<br>";

//2
function contar($frase, $letra)
{
    $cont = 0;
    for ($i = 0; $i < strlen($frase); $i++) {
        if ($frase[$i] == $letra) {
            $cont++;
        }
    }
    return $cont;
}

contar("hugoo", 'u');
echo "<br>";

//3
function validarContraseña($contraseña)
{
    $longitud = strlen($contraseña);

    if ($longitud < 8 || $longitud > 12) {
        return "Contraseña no válida: debe tener entre 8 y 12 caracteres.";
    }

    if (is_numeric($contraseña[0])) {
        return "Contraseña no válida: no debe empezar por un número.";
    }

    return "Contraseña válida.";
}

echo validarContraseña("HugoMontes");
echo "<br>";

//4
function pares()
{
    $pares = array();

    for ($i = 1; $i <= 10; $i++) {
        $pares[] = $i * 2;
    }

    foreach ($pares as $num) {
        echo $num . "<br>";
    }
}

pares();
echo "<br>";

//5
function meses()
{
    $meses = array(
        "enero",
        "febrero",
        "marzo",
        "abril",
        "mayo",
        "junio",
        "julio",
        "agosto",
        "septiembre",
        "octubre",
        "noviemnbre",
        "diciembre"
    );

    $meses_m = array();
    foreach ($meses as $mes) {
        if (strtolower($mes[0]) === 'm') {
            $meses_m[] = $mes;

        }
    }

    print_r($meses_m);
}

meses();
echo "<br>";

//6
function quitarAzul()
{
    $colores = array('rojo', 'verde', 'amarillo', 'azul', 'rosa');

    for ($i = count($colores) - 1; $i >= 0; $i--) {
        if ($colores[$i] === 'azul') {
            unset($colores[$i]);
        }
    }
    $array_nuevo = array_values($colores);
    print_r($array_nuevo);
}


quitarAzul();
echo "<br>";

//7
function zoo()
{
    $zoo = array(
        array("Perro", "León", "Conejo"),
        array("Gato", "Pato", "Canguro")
    );
    echo "Elemento [1][1]: " . $zoo[1][1];
}

zoo();
echo "<br>";

//8
function tablaAleatorios()
{
    $nombres = array("Carlos Álvarez", "Laura López", "Rosa Márquez", "Jorge Tiras");
    $materias = array("Lengua", "Historia", "Inglés", "Matemáticas");

    echo "<table border='1' cellspacing='0' cellpadding='5' style='border-collapse: collapse; text-align: center;'>";

    echo "<tr>";
    echo "<th>Nombre</th>";
    foreach ($materias as $materia) {
        echo "<th>$materia</th>";
    }
    echo "</tr>";

    foreach ($nombres as $nombre) {
        echo "<tr>";
        echo "<td><b>$nombre</b></td>";
        foreach ($materias as $materia) {
            $nota = rand(0, 10);
            echo "<td>$nota</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}

tablaAleatorios();
echo "<br>";