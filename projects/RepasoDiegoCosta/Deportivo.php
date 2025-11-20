<?php
class Deportivo extends Coche
{
    public $aleron;
    public function __construct($marca, $modelo, $tiempo, $color, $idiomas, $email, $aleron)
    {
        parent::__construct($marca, $modelo, $tiempo, $color, $idiomas, $email);
        $this->aleron = $aleron;
    }

    function mostrarDatos()
    {
        parent::mostrarDatos();
        echo "Deportivo";
    }
}
?>