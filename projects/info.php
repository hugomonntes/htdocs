<?php // Etiquetas comienzo y final
    echo "<h1>Hola Mundo</h1>";

    for ($i=1; $i <= 10; $i++) { 
        echo "${i}"."<br>";
    }

    $dataString = "uno";
    $dataSetLogin = [1, "Hugo", "h@gmail.com", true];
    $dataSets = array(1, "Hugo", "h@gmail.com", true);

    foreach ($dataSetLogin as $dato) {
        echo var_dump($dato);
        echo "${dato}"."<br>";
    }

    define("CONSTANTE", "const");  
    echo CONSTANTE;

    define("CONSTANTE2", array("Hugo", 2, true));
    echo CONSTANTE2[0];

    class MarcaCoche {
        public $name = "Alpine";
        public $weight = 1013;
        
        public function getBrandName(){
            return $this -> name;
        }
    }

    $alpine = new MarcaCoche();
    $alpine -> getBrandName();

    // echo MarcaCoche::getBrandName();
    $array2 = array("nombre"=>"Hugo","edad"=>19);
    foreach ($array2 as $clave => $valor) {
        echo $clave.":".$valor;
        echo "<br>";
    }

    $array3=[
        "usuario1" => ["nombre" => "Italiani", "edad" => 37],
        "usuario2" => ["nombre" => "Hugo", "edad" => 22],
        "usuario3" => ["nombre" => "Diego", "edad" => 25]
    ]

?>