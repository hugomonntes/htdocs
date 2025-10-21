<?php
    require_once "traits.php";
    class Comunication {
        use SaludarTrait, DepedirTrait;
    }

    $obj1 = new Comunication();
    $obj1->decirHola();
    echo "<br>";
    $obj2 = new Comunication();
    $obj2->sayHello();
?>