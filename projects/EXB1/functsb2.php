<?php
// 1. Dada la cadena de caracteres abordaje conviértela en almiraje utilizando la función str_replace.

function cambiarPalabra($cadenaACambiar, $cadenaReferencia)
{
    return str_replace($cadenaACambiar, $cadenaReferencia, "abordaje");
}

echo cambiarPalabra("abordaje", "almiraje")."<br>";

// 2.
// Almacena en un array los 10 primeros números pares. Imprime cada uno de los valores en una línea.
$numerosPares=array();
for ($i=1; $i <= 10; $i++) {
if ($i % 2 == 0) {
    $numerosPares[] = $i;
}
}
foreach ($numerosPares as $numeros) {
    echo $numeros."<br>";
}
// 3.
// Dado el siguiente array $meses=array('enero','febrero','marzo','abril', 'mayo','junio', 'julio','agosto',
// 'septiembre', 'octubre', 'noviemnbre', 'diciembre');
// Genera un nuevo array que sólo contenga los nombres de los meses que empiecen por m

// 4.
// Dado el array:
// $colores = array('rojo', 'verde', 'amarillo', 'azul','rosa');
// borra el elemento azul.
// 5.
// Escribe la siguiente matriz $zoo en PHP
// �
// 𝑃𝑃𝑃𝑃𝑃𝑃𝑃𝑃𝑃𝑃 𝐿𝐿𝐿𝐿ó𝑛𝑛 𝐶𝐶𝐶𝐶𝐶𝐶𝐶𝐶𝐶𝐶𝐶𝐶𝐶𝐶𝐶𝐶𝐶𝐶
// 𝐺𝐺𝐺𝐺𝐺𝐺𝐺𝐺 𝑃𝑃𝑃𝑃𝑃𝑃𝑃𝑃𝑃𝑃𝑃𝑃𝑃𝑃 𝐶𝐶𝐶𝐶𝐶𝐶𝐶𝐶á𝑛𝑛 �
// Haz que se visualize por pantalla el elemento [1][1]
// 6.
// Dados los string:
// $nombres = array("Carlos Álvarez", "Laura López", "Rosa Márquez", "Jorge Tiras");
// $materias = array("Lengua", "Historia", "Inglés", "Matemáticas",);
// Construye la siguiente tabla HTML donde las notas de las materias están dadas con la función rand
// Realiza una función que reciba una frase y una letra y cuente el número de veces que aparece esa
// letra en la frase. No se permite ningún método que incluya la palabra count.
?>