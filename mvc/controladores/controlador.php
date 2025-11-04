<?php
    require_once "../modelos/model.php";

    $empleado = new Empleado();
    $result = $empleado->getEmpleado();

    require_once '../vistas/vista.php'
?>