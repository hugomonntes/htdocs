<?php
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    require_once '../modelos/model.php';
    $empleado = new Empleado();
    $dato = $empleado->borrar($_GET['id']);
    if ($dato) {
        echo "Usuario con id {$_GET['id']} eliminado";
    } else {
        echo "Usuario con id {$_GET['id']} no encontrado";
    }
    require_once '../vistas/vista_editar.php';
}
?>