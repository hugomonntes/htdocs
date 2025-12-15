<?php
require_once "../modelos/model.php";

$modelo = new Equipo();
$equipos = $modelo->getEquipos();

require_once "../vistas/vista.php";
