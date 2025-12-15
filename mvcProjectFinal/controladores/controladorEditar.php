<?php
require_once "../modelos/model.php";

$modelo = new Equipo();
$equipo = $modelo->getEquipoById($_GET['id']);

require_once "../vistas/vista_editar.php";
