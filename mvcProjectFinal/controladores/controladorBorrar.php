<?php
require_once "../modelos/model.php";

$modelo = new Equipo();
$modelo->borrarEquipo($_GET['id']);

header("Location: controlador.php");
