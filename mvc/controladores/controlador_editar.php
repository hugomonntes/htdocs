<?php
require_once '../modelos/model.php';
require_once '../vistas/vista_editar.php';
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $empleado = new Empleado();
    $dato = $empleado->editar($_GET['id']);
}
?>