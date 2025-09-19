<?php
// 1. La función RAND nos retorna un valor aleatorio entre un rango de dos enteros:
// $num = rand(1,100);
// En la variable $num se almacena un valor entero que el ordenador genera en forma aleatoria entre 1
// y 100. Hacer un programa que lo muestre por pantalla al valor generado.

// echo rand(1, 100);

// 2. Crear una función suma que devuelva la suma de dos números que se le pasen como parámetro.

function suma($a, $b) {
    return $a + $b;
}

// 3. Crea una función que dada la variable $radio calcule el área de un círculo. Nota en PHP existe la
// función pi().
function areaCirculo($radio) {
    return pi()*($radio*$radio);
}

// 4. Generar un valor aleatorio entre 1 y 5. Luego imprimir en castellano el número (Ej. Si se genera el 3
// mostrar en la página el string “tres”)
$numeroAleatorio = rand(1,5);
switch ($numeroAleatorio) {
    case 1:
        echo "uno";
        break;
    case 2:
        echo "dos";
        break;
    case 3:
        echo "tres";
        break;
    case 4:
        echo "cuatro";
        break;
    case 5:
        echo "cinco";
        break;
    default:
        break;
}

// 5. Crea una función que compruebe si un número es múltiplo de otro o no, y lo indique por pantalla.
function esMultiplo($num1, $num2){
    return ($num1 % $num2 == 0) || ($num2 % $num1 == 0);
}

// 6. El precio de la entrada a un museo varía dependiendo de la edad del visitante. Crea una función que
// muestre el precio dependiendo de la edad del visitante:
// - Si es menor de 8 años la entrada es gratis
// - Entre 9 y 16 años cuesta 5€
// - Entre 17 y 25 cuesta 8€
// - Entre 26 y 55 cuesta 10€
// - Entre 56 y 65 cuesta 5€
// - Para mayores de 66 es gratis

function precioEntrada($edad){
    switch ($edad) {
        case $edad <= 8 || $edad > 65:
            echo "gratis";
            break;
        case $edad > 9 && $edad <= 16 || $edad > 65 && $edad <= 65:
            echo "5€";
            break;
        case $edad > 17 && $edad <= 25:
            echo "8€";
            break;
        case $edad > 26 && $edad <= 55:
            echo "10€";
            break;
        default:
            break;
    }
}

?>