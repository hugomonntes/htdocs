<?php
// Precio, Cantidad y Descuento son entradas de tipo texto de longitud 5
// • Iva es una entrada de tipo texto de longitud 3
// • Método de envío es una entrada de tipo select con los valores
// o Recoger en tienda ->Coste 0
// o Correos->Coste 5
// o Seur->Coste 8
// El método de envío del formulario es POST
// El precio total se calcula como ((Precio+Precio*IVA)-descuento)*cantidad+Envío
// Haz que se muestre por pantalla el mensaje El precio total del envío es…

$campos = ["precio", "cantidad", "descuento", "iva", "envio"];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach ($campos as $campo) {

    }
}

function calcularCostes(){

}
?>