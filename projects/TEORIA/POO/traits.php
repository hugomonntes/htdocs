<?php
trait SaludarTrait
{
    public function decirHola()
    {
        echo "Hola desde el trait!";
    }

    public function sayHello(){
        echo "Hello from trait!";
    }
}

trait DepedirTrait{
    public function decirAdios(){
        echo "Adios desde el trait!";
    }

    public function SayGoodBay(){
        echo "Good bay from trait!";
    }
}
?>