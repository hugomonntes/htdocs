<?php // Etiquetas comienzo y final
    echo "<h1>Hola Mundo</h1>";

    for ($i=0; $i < 10; $i++) { 
        //echo "${i}";
    }

    $dataString = "uno";
    $dataSetLogin = [1, "Hugo", "h@gmail.com", true];
    $dataSets = array(1, "Hugo", "h@gmail.com", true);

    foreach ($dataSetLogin as $dato) {
        echo var_dump($dato);
        echo "${dato}"."<br>";
    }

    define("CONST", "const");

    // echo "El valor 1 es ". $dataString // Se puede concatenar con el punto .
?>