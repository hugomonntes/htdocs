<?php
// 1. La función RAND nos retorna un valor aleatorio entre un rango de dos enteros:
// $num = rand(1,100);
// En la variable $num se almacena un valor entero que el ordenador genera en forma aleatoria entre 1
// y 100. Hacer un programa que lo muestre por pantalla al valor generado.

echo rand(1, 100);

// 2. Crear una función suma que devuelva la suma de dos números que se le pasen como parámetro.

function suma($a, $b)
{
    return $a + $b;
}

// 3. Crea una función que dada la variable $radio calcule el área de un círculo. Nota en PHP existe la
// función pi().
function areaCirculo($radio)
{
    return pi() * ($radio * $radio);
}

// 4. Generar un valor aleatorio entre 1 y 5. Luego imprimir en castellano el número (Ej. Si se genera el 3
// mostrar en la página el string “tres”)
$numeroAleatorio = rand(1, 5);
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
function esMultiplo($num1, $num2)
{
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

function precioEntrada($edad)
{
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

// 7. En el transporte público de una ciudad se permiten 4 tipos diferentes de mascotas hurones, perros,
// gatos y loros. Dependiendo del tipo pagan distinto precio, los hurones y gatos pagan 1€, los perros
// 1,5€ y los loros 2€.
// Utilizando la sentencia switch-case, crea una función que muestre lo que tiene que pagar la mascota
// por viajar.
// Si la mascota no se encuentra entre ninguna de las anteriores se debe mostrar el mensaje mascota
// no permitida

function precioMascota($tipo)
{
    switch (strtolower($tipo)) {
        case "huron":
        case "gato":
            echo "La mascota paga 1€";
            break;
        case "perro":
            echo "La mascota paga 1,5€";
            break;
        case "loro":
            echo "La mascota paga 2€";
            break;
        default:
            echo "Mascota no permitida";
    }
}

precioMascota("perro");

// 8. En un Bingo para la tercera edad pueden participar ancianos entre 75 y 80 años, en caso de cantar
// bingo el premio es de 0,05€ multiplicado por su edad. Crea una función que devuelva la cantidad
// ganada dependiendo de la edad del jugador.
function premioBingo($edad)
{
    if ($edad >= 75 && $edad <= 80) {
        return 0.05 * $edad;
    } else {
        return 0;
    }
}

echo "Premio ganado: " . premioBingo(78) . "€";

// 9. Crea una función que dado un número entero determine si el número es par o impar.
function parOImpar($num)
{
    if ($num % 2 == 0) {
        echo "$num es par";
    } else {
        echo "$num es impar";
    }
}

parOImpar(11);

// 10. La serie de Fibonacci se forma sumando los dos números anteriores. Ejemplo: 1,2,3,5,8
// Utilizando un bucle while, haz que se cree una serie de Fibonacci. La condición de parada será que el
// nuevo elemento calculado sea mayor que una variable $fin=10000.
$fin = 10000;
$a = 1;
$b = 2;

echo "$a, $b";

while (true) {
    $c = $a + $b;
    if ($c > $fin)
        break;
    echo ", $c";
    $a = $b;
    $b = $c;
}

// 11. Utilizando bucles for crea una tabla de multiplicar con la siguiente apariencia:
echo "<table style='border: 1px solid black;'>";
echo "<td></td>";
for ($columna=1; $columna <=10 ; $columna++) { 

    echo "<td><b>".$columna."</b></td>";
}
echo "</tr>";

for ($i = 1; $i <= 10; $i++) { 
    echo "<tr>";
    echo "<td><b> $i </b></td>";
    for ($j = 1; $j <= 10; $j++) { 
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

// 12. Utilizando la sentencia do..while calcula el factorial de un número
$num = 5;
$resultado = 1;
$i = 1;

do {
    $resultado *= $i;
    $i++;
} while ($i <= $num);

echo "El factorial de $num es: $resultado";
?>