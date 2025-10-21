<?php
require_once "traits.php";

    class Comunicacion{
        use Saludar, Despedir;
    }
    $comunicacion = new Comunicacion();
    $comunicacion->decirHola();
    $comunicacion->sayGoodbye();