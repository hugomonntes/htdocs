<?php

trait Saludar {
    function decirHola(){
        echo "Hola Mundo!";
    }

    function sayHello(){
        echo "Hello World!";
    }
}

trait Despedir {

    function decirAdios(){
        echo "Adios";
    }
    function sayGoodbye(){
        echo "Goodbye";
    }
}