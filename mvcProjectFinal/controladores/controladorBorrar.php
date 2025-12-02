<?php
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    require_once '../modelos/model.php';
    $empleado = new Empleado();
    $empleado->borrar($_GET['id']);
}
?>