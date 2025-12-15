<?php
require_once "../modelos/model.php";

$modelo = new Equipo();
$modelo->actualizarEquipo(
    $_POST['id'],
    $_POST['nombre'],
    $_POST['anio'],
    $_POST['titulos'],
    $_POST['logo']
);

header("Location: controlador.php");
