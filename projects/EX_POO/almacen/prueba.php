<?php
require_once "agua.php";
require_once "refresco.php";
require_once "almacen.php";

$almacen = new Almacen(2, 3);

$bezoya = new Agua(1, 1.5, 1.20, "Bezoya ", " Manantial");
$lanjaron = new Agua(2, 2.0, 1.50, "Lanjarón ", " Sierra Nevada");

$nestea = new Refresco(3, 1.5, 2.00, "Nestea ", 12, true);
$kas = new Refresco(4, 2.0, 2.20, "Kas ", 10, false);
$coca = new Refresco(5, 1.5, 2.00, "Coca-Cola ", 0, false);

$almacen->agregarProducto($bezoya);
$almacen->agregarProducto($lanjaron);
$almacen->agregarProducto($nestea); 
$almacen->agregarProducto($kas);
$almacen->agregarProducto($coca);

$almacen->mostrarInformacion(); 
$almacen->mostrarMatriz();

echo "<hr>Precio total del almacén: " . $almacen->calcularPrecioTotal() . " €<br>";
echo "Precio total de Coca-Cola: " . $almacen->calcularPrecioMarca("Coca-Cola") . " €<br>";
echo "Precio total de estantería 0: " . $almacen->calcularPrecioEstanteria(0) . " €<br>";

$almacen->eliminarProducto(3); 

echo "<hr><b>Después de eliminar la Coca-Cola:</b><br>";
$almacen->mostrarInformacion();
?>
